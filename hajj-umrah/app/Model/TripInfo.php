<?php

namespace App/Model;

use Illuminate\Database\Eloquent\Model;

class TripInfo extends Model 
{

    protected $table = 'trip_info';
    public $timestamps = true;
    protected $fillable = array('info');

}