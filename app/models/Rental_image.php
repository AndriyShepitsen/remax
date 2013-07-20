<?php


class Rental_image extends Eloquent {
    protected $guarded = array();

    public static $rules = array();

 public function rental()
{
return $this->belongsTo('Rental');
}
}