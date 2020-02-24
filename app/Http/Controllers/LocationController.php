<?php

namespace App\Http\Controllers;

use App\Location;
use App\Item;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConfirmationLocation;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $locations = Auth::user()->locations;

        $items = Item::get()->pluck('item_name','id');

        return view('locations.index',compact('locations','items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

     return view('locations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $location = new Location();
       $location->quantity = $request->get('quantity');
       $location->return_date = $request->get('return_date');
       $location->pickup_date = $request->get('pickup_date');
       $location->item_id = $request->get('item_id');
       $location->user_id = Auth::user()->id;



       $location->save();
       $items = Item::get()->pluck('item_name','id');

        Mail::to("ghischa@gmail.com")
            ->send(new ConfirmationLocation($location));

        dd('je suis le meilleur1');


       return redirect()->route('location_index',compact('items'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function edit(Location $location)
    {
        $items = Item::get()->pluck('item_name','id');

        return view('locations.edit',compact('location','items'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Location $location)
    {

        $location->quantity = $request->get('quantity');
        $location->return_date = $request->get('return_date');
        $location->pickup_date = $request->get('pickup_date');
        $location->item_id = $request->get('item_id');
        $location->user_id = Auth::user()->id;
        $location->update();
         $items = Item::get()->pluck('item_name','id');

        return redirect()->route('location_index',compact('items'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location)
    {

        $location->delete();

        $items = Item::get()->pluck('item_name','id');
        return redirect()->route('location_index',compact('items'));
    }
}
