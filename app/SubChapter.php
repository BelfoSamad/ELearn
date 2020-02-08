<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubChapter extends Model
{
    protected $fillable = [
        'video',
    ];

    public function comments(){
        return $this->hasMany('App\Comment');
    }

    public function chapter(){
        return $this->belongsTo('App\Chapter');
    }
}
