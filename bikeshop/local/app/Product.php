<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    public $incrementing = false;
    public function product_type(){
    	return $this->belongsTo('App\ProductType','id_type_product','id');
    }
    public function bill_detail(){
    	return $this->hasMany('App\BillDetail','id_product','id');
    }
}
