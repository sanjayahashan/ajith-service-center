<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use App\Ad;
use Image;

class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads = Ad::all();
        return view('ads.index')->with('ads', $ads);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ads.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ad = new Ad();
        $ad->description = $request->description;
        // $ad->company = $request->company;
        // $ad->agent = $request->agent;
        $ad->tel = $request->tel;
        $ad->time = $request->time;
        $ad->save();
        
        //save image
        $image = $request->file('image');
        $path = public_path('storage\photos\ads\\');
        $thumb_name = $ad->id . ".jpg";

        $ad->thumb = $thumb_name;
        $ad->save();

        $thumb = Image::make($image)->resize(370,420)->save($path . $thumb_name);


        return redirect()->route('ads.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ad = Ad::find($id);
        return view('ads.create')->with('ad',$ad);
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
        $ad = Ad::find($id);
        $ad->description = $request->description;
        $ad->tel = $request->tel;
        $ad->time = $request->time;
        // $ad->save();
        
        //save image
        if($request->file('image')) {
            $image = $request->file('image');
            $path = public_path('storage\photos\ads\\');
            $thumb_name = $ad->id . ".jpg";

            $ad->thumb = $thumb_name;
            
            $thumb = Image::make($image)->resize(370,420)->save($path . $thumb_name);
        }

        $ad->save();

        return redirect()->route('ads.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ad = Ad::find($id);

        $ad->delete();

        return redirect()->route('ads.index');
    }

    public function manage()
    {
        $ads = Ad::all();

        return view('ads.manage')->with('ads', $ads);
    }
}
