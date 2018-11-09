<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public $timestamps = true;
    public function users(){
    	$this->belongsTo('App\User');
    }

    public function posts(){
    	$this->belongsTo('App\Post');
    }
}
