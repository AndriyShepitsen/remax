<?php


class Rental extends Eloquent {
    protected $guarded = array();

    public static $rules = array();

public function rental_images()
{
return $this->hasOne('Rental_image');
}


}