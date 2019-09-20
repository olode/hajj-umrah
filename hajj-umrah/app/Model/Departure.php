<?php

namespace App/Model;

use Illuminate\Database\Eloquent\Model;

class Departure extends Model 
{

    protected $table = 'departures';
    public $timestamps = true;
    protected $fillable = array('wakeel_id', 'pilgram_count', 'nationality', 'hotel', 'departure_time', 'departure_date', 'journey_number', 'advance_standby', 'day');

    public function wakeel()
    {
        return $this->belongsTo('App/Model\Wakeel');
    }

    public function direction()
    {
        return $this->belongsTo('App/Model\Direction');
    }

}