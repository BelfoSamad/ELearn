<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'cover',
    ];

    public function chapters(){
        return $this->hasMany('App\Chapter');
    }

    public function teacher(){
        return $this->hasOne('App\User');
    }

    public function enrolled_students(){
        return $this->belongsToMany('App\User', 'user_course');
    }
}
