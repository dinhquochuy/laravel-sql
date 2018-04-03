<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public $table = 'menu';
    function foods(){
        return $this->belongsToMany(
            'App\Menu',
            'menu_detail',
            'id_food',
            'id_menu'
        );
    }
}
