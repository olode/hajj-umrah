<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Departure extends Model 
{

    protected $table = 'departures';
    public $timestamps = true;
    protected $fillable = array('trip_info_id', 'wakeel_name', 'pilgram_count', 'nationality', 'hotel', 'direction_id', 'departure_time', 'departure_date', 'journey_number', 'advance_standby', 'day');

    public function wakeel()
    {
        return $this->belongsTo('App/Model\TripInfo');
    }

    public function direction()
    {
        return $this->belongsTo('App\Model\Direction');
    }

    public function trip()
    {
        return $this->belongsTo('App\Model\TripInfo','trip_info_id');
    }

}