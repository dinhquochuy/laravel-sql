<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodType extends Model
{
    public $table = 'food_type';
    public function foods(){
        return $this->hasMany('App\Foods','id_type','id');// truyền vào 3 tham số: 1 là đường dẫn, 2 là khóa ngoại, 3 là khóa chính
    }
    function menuDetail(){
        return $this->hasMany(
            'App\MenuDetail',
            'App\Foods',
            'id_type',
            'id_food',
            'id',
            'id'
        );
    }
}
