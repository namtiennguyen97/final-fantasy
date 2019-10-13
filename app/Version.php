<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Version extends Model
{
    public $table='versions';
    public function ps4Package(){
        return $this->belongsTo('App\Ps4Package');
    }
}
