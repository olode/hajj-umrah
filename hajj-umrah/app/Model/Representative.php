<?php

namespace App/Model;

use Illuminate\Database\Eloquent\Model;

class Representative extends Model 
{

    protected $table = 'representatives';
    public $timestamps = true;
    protected $fillable = array('name', 'phone', 'recipient', 'terminator', 'wakeel_id');

    public function wakeel()
    {
        return $this->belongsTo('App/Model\Wakeel');
    }

}