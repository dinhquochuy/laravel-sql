<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    public $table = 'customers';
    public function bill(){
        return $this->hasMany('App\Bills','id_customer','id');
    }
}
