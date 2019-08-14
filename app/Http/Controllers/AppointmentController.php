<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Stripe\Stripe;
use Stripe\Charge;
use App\Notifications\AppointmentReserved;

class AppointmentController extends Controller
{
    public $slots = 3;
    
    public function __construct()
    {
        $this->middleware('auth');
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
    public function store(Request $request)
    {
        // dd($request->session()->all());
        $time = session('time');
        $date = session('date');
        
        $appointment = new Appointment;
        $appointment->user_id = Auth::user()->_id;
        $appointment->date = $date;
        $appointment->time = $time;
        $appointment->slot = $this->find_count($date, $time)+1;

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
     * @param  \App\Appoinment  $appoinment
     * @return \Illuminate\Http\Response
     */
    public function show(Appoinment $appoinment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Appoinment  $appoinment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appoinment $appoinment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Appoinment  $appoinment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appoinment $appoinment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Appoinment  $appoinment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appoinment $appoinment)
    {
        //
    }

    public function displayTimeSlots(Request $request)
    {
        if($request->ajax())
        {
            $date = $request->date;
            $appointments = Appointment::where('date',$date)->orderBy('time')->get();
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
        Stripe::setApiKey("sk_test_Xbb5bgwahgVCbYwiK1X77cSS00QoUHQJWw");
    try{
        Charge::create([
            "amount" => 50000,
            "currency" => "lkr",
            "source" => $request->stripeToken, // obtained with Stripe.js
            "description" => "Test charge"
            ]);
            $this->store($request);
    }catch(\Exeption $e){
            return redirect()->route('payment')->with('error',$e->getMessage());
        }
    return redirect()->route('appointments.create')->with('success','Appointment Reserved Successfully');
    }
}
