<?php


class House extends Eloquent {
    protected $guarded = array();

    public static $rules = array();

public function images()
{
return $this->hasOne('Image');
}


}