<?php

namespace App/Model;

use Illuminate\Database\Eloquent\Model;

class BetweenCity extends Model 
{

    protected $table = 'between_cities';
    public $timestamps = true;
    protected $fillable = array('trip_info_id', 'wakeel_name', 'pilgram_count', 'nationality', 'hotel', 'direction_id', 'move_time', 'move_date', 'journey_number', 'advance_standby', 'day');

    public function direction()
    {
        return $this->belongsTo('App/Model\Direction');
    }

}