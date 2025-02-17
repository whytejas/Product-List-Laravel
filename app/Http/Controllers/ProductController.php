<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view(('products.index'), compact('products'));
    }

    public function create()
    {

        return view(('products.create'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $product = Product::create($request->input());
        return redirect()->route(('products.show'), compact('product'));
    }


    public function show(Product $product)
    {

        return view(('products.show'), compact('product'));
    }

    public function edit(Product $product)
    {

        return view(('products.edit'), compact('product'));
    }

    public function update(Request $request, Product $product)
    {

        $product->update($request->input());
        return view(('products.show'), compact('product'));
    }


    public function destroy(Product $product)
    {

        $product->delete();
        return redirect()->route(('products.index'))->with('status', 'DELETED!');
    }
}
