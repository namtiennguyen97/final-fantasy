<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    public $table='publisher';
    public function ps4Packages(){
        return $this->hasMany('App\Ps4Package');
    }
}
