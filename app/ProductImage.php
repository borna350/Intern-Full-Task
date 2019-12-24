<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $fillable = ['product_id', 'image'];

    public function productImg(){
        return $this->belongsTo('App\Product', 'product_id', 'id');
    }
}

