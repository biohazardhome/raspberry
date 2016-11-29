<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Product;

class Storehouse extends Model
{
    
    protected
    	$table = 'storehouse',
    	$fillable = ['product_id', 'purchase_price', 'count', 'arrive_count'];

    public function product() {
    	return $this->belongsTo(Product::class/*, 'id', 'product_id'*/);
    }

}
