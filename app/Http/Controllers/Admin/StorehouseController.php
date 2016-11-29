<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Storehouse;
use App\Product;

class StorehouseController extends Controller
{

    protected
        $rules = [
            'product_id' => 'required|exists:products,id',
            'purchase_price' => 'required|numeric',
            'count' => 'integer',
            'arrive_count' => 'required|integer',
        ];
    
    public function index() {
    	$stores = Storehouse::with('product')
	    	->paginate(15);

    	return view('admin.storehouse.index', compact('stores'));
    }

    public function create() {
        $products = Product::all();
    	return view('admin.storehouse.create', compact('products'));
    }

    public function store(Request $request) {
    	$this->validate($request, $this->rules);

		Storehouse::create($request->all());

		return back();
    }

    public function edit($id) {
    	$store = Storehouse::with('product')
	    	->find($id);

        $products = Product::all();

    	return view('admin.storehouse.edit', compact('store', 'products'));
    }

    public function update($id, Request $request) {
        $this->validate($request, $this->rules);

        Storehouse::find($id)
            ->update($request->all());

        return back();
    }

    public function delete($id) {
        Storehouse::find($id)
            ->delete();
    }

    
}
