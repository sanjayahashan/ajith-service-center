<?php

namespace App\Http\Controllers;

use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Vehicle;
use App\Ad;
use Image;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicle::all();
        $ads = Ad::all();
        
        return view('vehicles.index')->with(['vehicles' => $vehicles, 'ads' => $ads]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
     {
         return view('vehicles.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vehicle = new Vehicle();
        $vehicle->brand = $request->brand;
        $vehicle->model = $request->model;
        $vehicle->engine = $request->engine;
        $vehicle->power = $request->power;
        $vehicle->milage = $request->milage;
        $vehicle->smec = $request->smec;
        $vehicle->ignition = $request->ignition;
        $vehicle->transmission = $request->transmission;
        $vehicle->price = $request->price;
        $vehicle->description = $request->description;

        //save the file
        // $path = Storage::putFile('photos/vehicles', $request->file('image'));
        // $path = $request->file('image')->store('public/photos/vehicles');
        $image = $request->file('image');
        
        $thumb_name = $vehicle->brand . $vehicle->model . "thumb.jpg";
        $image_name = $vehicle->brand . $vehicle->model . ".jpg";
        
        $vehicle->thumb = $thumb_name;
        $vehicle->image = $image_name;

        $this->storeImages($image, $thumb_name, $image_name);

        // dd($thumb);

        $vehicle->save();

        return redirect()->route('vehicles.create');
    }

    public function storeImages($image, $thumb_name, $image_name)
    {
        $path = public_path('storage\photos\vehicles\\');

        $thumb = Image::make($image)->resize(270,310)->save($path . $thumb_name);
        $image = Image::make($image)->save($path . $image_name);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vehicle = Vehicle::find($id);
        $ads = Ad::all();
        return view('vehicles.view')->with(['vehicle' => $vehicle, 'ads' => $ads]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehicle = Vehicle::find($id);
        $ads = Ad::all();

        return view('vehicles.create')->with(['vehicle' => $vehicle, 'ads' => $ads]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $vehicle = Vehicle::find($id);
        $vehicle->brand = $request->brand;
        $vehicle->model = $request->model;
        $vehicle->engine = $request->engine;
        $vehicle->power = $request->power;
        $vehicle->milage = $request->milage;
        $vehicle->smec = $request->smec;
        $vehicle->ignition = $request->ignition;
        $vehicle->transmission = $request->transmission;
        $vehicle->price = $request->price;
        $vehicle->description = $request->description;

        if($request->file('image'))
        {
            $image = $request->file('image');
            $vehicle->image = $image;

            $thumb_name = $vehicle->brand . $vehicle->model . "thumb.jpg";
            $image_name = $vehicle->brand . $vehicle->model . ".jpg";
            
            $vehicle->thumb = $thumb_name;
            $vehicle->image = $image_name;

            $this->storeImages($image, $thumb_name, $image_name);
        }

        $vehicle->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehicle = Vehicle::find($id);

        $vehicle->delete();
        Storage::delete(['photos\vehicles\\'.$vehicle->thumb, 'photos\vehicles\\'.$vehicle->image]);

        return redirect()->route('vehicles.index');
    }
}
