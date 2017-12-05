<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = "bill";
     public function bill_detail(){
    	return $this->hasMany('App\BillDetail','id_bill','id_bill');
    }
     public function customer(){
    	return $this->hasMany('App\Customer','id_customer','id_bill');
    }
}
