<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Arrival extends Model 
{

    protected $table = 'arrivals';
    public $timestamps = true;
    protected $fillable = array('trip_info_id', 'wakeel_name', 'pilgram_count', 'nationality', 'hotel', 'direction_id', 'arrival_time', 'arrival_date', 'journey_number', 'advance_standby', 'day');

    public function wakeel()
    {
        return $this->belongsTo('App/Model\TripInfo');
    }

    public function direction()
    {
        return $this->belongsTo('App/Model\Direction');
    }

}