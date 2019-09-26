<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model 
{

    protected $table = 'trips';
    public $timestamps = true;
    protected $fillable = array('trip_info_id', 'wakeel_name', 'pilgram_count', 'nationality', 'hotel', 'direction_id', 'time', 'date', 'trip_number', 'advance_standby', 'day', 'trip_type_id', 'completed');

    public function direction()
    {
        return $this->belongsTo('App\Model\Direction');
    }

    public function trip_type()
    {
        return $this->belongsTo('App\Model\TripType', 'trip_type_id');
    }

    public function trip_info()
    {
        return $this->belongsTo('App\Model\TripInfo', 'trip_info_id');
    }

    public function repersentative(){
        return $this->hasOne('App\Model\Representative');
    }

    public function transport(){
        return $this->hasOne('App\Model\TransportCompany');
    }
}