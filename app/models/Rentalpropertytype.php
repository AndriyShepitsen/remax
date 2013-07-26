<?php


class Rentalpropertytype extends Eloquent {
	public  $table = 'rental_propertytypes';
    protected $guarded = array();

    public static $rules = array();



public function rental()
{
return $this->belongsTo('Rental');
}

}