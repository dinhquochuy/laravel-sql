<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foods extends Model
{
    public $table = 'foods';
    public function foodType(){
        return $this->belongsTo('App\FoodType','id_type','id');
    }
    public function menu(){
        return $this->belongsToMany('App\Menu','id_menu','id_food','id_menu');
    }
    function pageUrl(){
        return $this->belongsTo('App\PageUrl','id_url','id');
    }
}
