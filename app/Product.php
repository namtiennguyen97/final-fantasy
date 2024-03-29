<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static findOrFail(int $id)
 */
class Product extends Model
{
    public $table= 'products';
    public function categories(){
        return $this->hasMany('App\Category');
    }
}
