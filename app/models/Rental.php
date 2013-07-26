<?php


class Rental extends Eloquent {
    protected $guarded = array();

    public static $rules = array();

public function rental_images()
{
return $this->hasOne('Rentalimage');
}

public function propertytype()
{
return $this->hasOne('Rentalpropertytype');
}

public function agent()
{
return $this->belongsTo('Agent');
}

}