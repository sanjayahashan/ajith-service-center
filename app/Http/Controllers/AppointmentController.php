<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\User;
use App\Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Stripe\Stripe;
use Stripe\Charge;
use Stripe\Refund;
use App\Notifications\AppointmentReserved;
use App\Notifications\Refunded;

class AppointmentController extends Controller
{
    private $slots;
    
    public function __construct()
    {
        $this->middleware('auth');

        $record = DB::table('configs')->first();
        $this->slots = $record['slots'];

        // dd($this->slots);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('appointments.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('appointments.create');
    }

    public function getpayment(Request $request){
        session(['date' => $request->date, 'time' => $request->time]);

        // dd($request->session()->all());
        return view('appointments.payment');
        // $this->store($request);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $token)
    {
        // dd($request->session()->all());
        $time = session('time');
        $date = session('date');
        
        $appointment = new Appointment;
        $appointment->user_id = Auth::user()->_id;
        $appointment->date = $date;
        $appointment->time = $time;
        $appointment->slot = $this->find_count($date, $time)+1;
        $appointment->token = $token;

        // print_r(Auth::user()->_id);
        $appointment->save();

        //send notification
        $user = Auth::user();
        $user->notify(new AppointmentReserved($appointment));

        // return redirect()->route('appointments.create');
    }

    private function find_count($date, $time) 
    {
        $count = Appointment::where([
            ['date', '=', $date],
            ['time', '=', $time],            
        ])->count();
        return $count;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        //
    }

    public function displayTimeSlots(Request $request)
    {
        if($request->ajax())
        {
            $date = $request->date;
            $appointments = Appointment::where('date',$date)->orderBy('time', 'desc')->get();
            $data = array();
            foreach($appointments as $appointment) {
                $data[] = array(
                    "appointment"=> $appointment,
                    "user"=> $appointment->user->name
                );
            }
                
            // print_r(json_encode($data));
            return response()->json($data);
        }
    }

    public function reserveSlots(Request $request)
    {
        if($request->ajax())
        {
            $appointmentGroups = Appointment::where([
                ['date', '=', $request->date],
            ])
            ->get()
            ->groupBy('time');

            $data = array();
            foreach($appointmentGroups as $time => $appointmentGroup) {
                $data[$time] = array(
                    "appointment"=> $appointmentGroup,
                    "count"=> sizeOf($appointmentGroup)
                );
            }
            $data += [
                "max_count"=>$this->slots
            ];
                
            // print_r(json_encode($appointments));
            return response()->json($data);
        }
    }

    public function _reserveSlots(Request $request) {
        if($request->ajax()) {
            // $branch = Branch::find($request->branch);
            
            $date = $request->date;
            $appointments = Appointment::all()->where('date',$date);
            $appointments_count = $appointments->count();

            return $appointments_count;
        }
    }

    public function postcheckout(Request $request){
        Stripe::setApiKey("sk_test_19960cNZj3KgrRpnCVLAcegq00UfIIh35I");
    try{
        $paymentResponse = Charge::create([
            "amount" => 50000,
            "currency" => "lkr",
            "source" => $request->stripeToken, // obtained with Stripe.js
            "description" => "Test charge"
            ]);
            // dd($paymentResponse);
            $this->store($request, $paymentResponse['id']);
    }catch(\Exeption $e){
            return redirect()->route('payment')->with('error',$e->getMessage());
        }
    return redirect()->route('appointments.create')->with('success','Appointment Reserved Successfully');
    }

    public function getDisabledDates() {
        //disabled dates
        $result = DB::table('configs')->first();
        $disabledDates = $result['disabled'];

        return response()->json($disabledDates);
    }

    //refund function
    public function refund($id) {
        // Set your secret key: remember to change this to your live secret key in production
        // See your keys here: https://dashboard.stripe.com/account/apikeys
        Stripe::setApiKey('sk_test_19960cNZj3KgrRpnCVLAcegq00UfIIh35I');

        $appointment = Appointment::find($id);
        $token = $appointment->token;

        $refund = Refund::create([
            'charge' => $token,
        ]);

        //after sending the refund request the appoinment should be deleted
        $appointment->delete();

        //send notification
        $appointment->notify(new Refunded($appointment));
        
        return redirect()->route('appointments.index')->with('success', 'Appointment Refunded');
    }

    //function to disable dates
    public function disableDates(Request $request, $id)
    {
        $appointments = Appointment::where('date',$request->disabled)->get();
        // dd($appointments);

        DB::collection('configs')->where('_id', $id)->push('disabled', $request->disabled);
        
        foreach($appointments as $appointment) {
            $this->refund($appointment->_id);
        }
        
        return redirect()->route('admin.adweb');
    }

    //function to enable dates
    public function deleteDisabledDates($id, $date) 
    {
        DB::collection('configs')->where('_id', $id)->pull('disabled', $date);
        return redirect()->route('admin.adweb');
    }
}
