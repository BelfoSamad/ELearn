<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    protected $fillable = [
        'resource',
    ];

    public function course(){
        return $this->belongsTo('App\Course');
    }

    public function sub_chapters(){
        return $this->hasMany('App\SubChapter');
    }

    public function resources(){
        return $this->hasMany('App\Resource');
    }
}
