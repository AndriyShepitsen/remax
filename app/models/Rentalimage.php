<?php


class Rentalimage extends Eloquent {
	public  $table = 'rental_images';

    protected $guarded = array();

    public static $rules = array();

 public function rental()
{
return $this-belongsTo('Rental');
}
}