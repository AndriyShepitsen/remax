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