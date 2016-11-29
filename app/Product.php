<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Product;
use App\Storehous;

class Product extends Model
{
    
    protected
    	$table = 'products',
    	$fillable = ['title', 'description', 'slug', 'content', 'count'];

    public function storehouse() {
    	return $this->hasMany(Storehous::class, 'product_id', 'id');
    }
    
}
