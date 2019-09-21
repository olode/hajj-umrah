<?php

namespace App/Model;

use Illuminate\Database\Eloquent\Model;

class Arrival extends Model 
{

    protected $table = 'arrivals';
    public $timestamps = true;
    protected $fillable = array('wakeel_id', 'pilgram_count', 'nationality', 'hotel', 'direction_id', 'arrival_time', 'arrival_date', 'journey_number', 'advance_standby', 'day');

    public function wakeel()
    {
        return $this->belongsTo('App/Model\Wakeel');
    }

    public function direction()
    {
        return $this->belongsTo('App/Model\Direction');
    }

}