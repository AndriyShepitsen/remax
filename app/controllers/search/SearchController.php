<?php

//LOCATION: remax/public/search

class SearchController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
    $houses = House::with('images')->get();

    return View::make('search.results')->with(compact('houses'));

    }

     public function find()
    {
    $housesQuery = House::with('images')->where(function($query){

    $location  = Input::get('location');
    if($location)
    $query->where('address', 'LIKE', '%'.$location.'%');

    $price_l  = Input::get('from');
    if($price_l)
    $query->where('price', '>=', $price_l);

    $price_h  = Input::get('to');
    if($price_h)
    $query->where('price', '<=', $price_h);

    $beds  = Input::get('beds');
    if($beds)
    $query->where('bedrooms', '>=', $beds);

    $baths  = Input::get('baths');
    if($baths)
    $query->where('bathrooms', '>=', $baths);

    })->get();
    
    $houses =$housesQuery;

   // dd($housesQuery);
    return View::make('search.results')->with(compact('houses'));

    }
    public function show($id)
    {
     $house = House::with('images')->where('id', '=', $id)->first();   
     return View::make('search.onehouse')->with(compact('house'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
   
}