<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    public $timestamps = true;
    public function users(){
    	$this->belongsTo('App\User');
    }

    public function categories(){
    	$this->belongsTo('App\Category');
    }

    public function post_types(){
    	$this->belongsTo('App\Post_type');
    }

}
