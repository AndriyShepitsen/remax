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
    $houses = "House::with('images')";
    

    $location  = Input::get('location');
    if($location)
    $houses .="->where('address', 'LIKE', '%'.$location.'%')";

     $price_l  = Input::get('from');
    if($price_l)
    $houses .="->where('price', '>=', $price_l)";

    $price_h  = Input::get('to');
    if($price_h)
    $houses .="->where('price', '<=', $price_h)";

    $beds  = Input::get('beds');
    if($beds)
    $houses .="->where('bedrooms', '>=', $beds)";
    
    $baths  = Input::get('baths');
    if($baths)
    $houses .="->where('bathrooms', '>=', $baths)";

   // $houses = ${houses};
    dd($houses);
   // return View::make('search.results')->with(compact('houses'));

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