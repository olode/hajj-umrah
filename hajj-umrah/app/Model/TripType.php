<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TripType extends Model 
{

    protected $table = 'trip_types';
    public $timestamps = true;
    protected $fillable = array('type');

}