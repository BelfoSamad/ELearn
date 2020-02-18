<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public function author(){
        return $this->hasOne('App\User');
    }

    public function question(){
        return $this->belongsTo('App\Question');
    }
}
