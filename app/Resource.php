<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    public function chapter(){
        return $this->belongsTo('Chapter');
    }
}
