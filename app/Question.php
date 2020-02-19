<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function author(){
        return $this->belongsTo('App\User', 'user_id');
    }
    
    public function answers(){
        return $this->hasMany('App\Answer');
    }

    public function subchapter(){
        return $this->belongsTo('App\SubChapter');
    }
}
