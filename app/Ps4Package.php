<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ps4Package extends Model
{
    public $table='ps4_packages';
    public function versions(){
        return $this->hasMany('App\Version');
    }
}
