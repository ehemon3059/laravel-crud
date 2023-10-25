<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class productController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable'
        ]);

        $newProduct = Product::create($data);

        return redirect(route('product.index'));
    }

    public function edit(Product $variableProduct){
        return view('products.edit' , ['product' => $variableProduct ]);
    }

    public function update(Product $updateProduct , Request $request){
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable'
        ]);

        $updateProduct->update($data);

        return redirect(route('product.index'))->with('success', 'product update successfully');

    }

    public function destory(Product $deleteProduct){
        $deleteProduct->delete();
        return redirect(route('product.index'))->with('success', 'product Delete successfully');

    }
}
