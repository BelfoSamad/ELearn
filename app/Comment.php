<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function author(){
        return $this->hasOne('User');
    }

    public function sub_chapter(){
        return $this->belongsTo('SubChapter');
    }
}
