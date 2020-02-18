<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubChapter extends Model
{
    protected $fillable = [
        'video',
    ];

    public function questions(){
        return $this->hasMany('App\Question');
    }

    public function chapter(){
        return $this->belongsTo('App\Chapter');
    }
}
