<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Wakeel extends Model 
{

    protected $table = 'wakeel';
    public $timestamps = true;
    protected $fillable = array('name');

}