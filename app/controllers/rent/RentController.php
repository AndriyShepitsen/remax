<?php

//LOCATION: remax/public

class RentController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function appartments() {

    $rentals = Rental::with('rental_images', 'agent')->where('property_type','=', 1)->paginate(5);
    return View::make('rent.rent_results')->with(compact('rentals'));

    }

    public function show($id) {

    $rental = Rental::with('rental_images', 'agent')->where('id','=', $id)->first();
    return View::make('rent.one_rent')->with(compact('rental'));

    }
    public function all() {

    $rentals = Rental::with('rental_images', 'agent')->paginate(5);
    return View::make('rent.rent_results')->with(compact('rentals'));

    }

    public function houses(){

    $rentals = Rental::with('rental_images', 'agent')->where('property_type','=', 2)->paginate(5);
    return View::make('rent.rent_results')->with(compact('rentals'));

    }

    public function index()
    {
    $rentals = Rental::with('rental_images', 'agent')->where(function($query){

    $location_r  = Input::get('location_r');
    if($location_r)
    $query->where('address', 'LIKE', '%'.$location_r.'%');

    $price_l_r  = Input::get('from_r');
    if($price_l_r)
    $query->where('price', '>=', $price_l_r);

    $price_h_r  = Input::get('to_r');
    if($price_h_r)
    $query->where('price', '<=', $price_h_r);

    $beds_r  = Input::get('beds_r');
    if($beds_r)
    $query->where('bedrooms', '>=', $beds_r);

    $baths_r  = Input::get('baths_r');
    if($baths_r)
    $query->where('bathrooms', '>=', $baths_r);


    })->paginate(5);

    return View::make('rent.rent_results')->with(compact('rentals'))->with('Input', Input::all());

    }
 

   
}