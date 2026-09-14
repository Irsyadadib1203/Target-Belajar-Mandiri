<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    public function index()
    {
        return view('produk.products')->with('products', Products::all());
    }

    public function create()
    {
        return view('produk.create');
    }
    public function store(Request $request)
    {
        validator($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
        ])->validate();
        
        Products::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
        ]);
        return redirect()->route('product.index')->with('success', 'Product created successfully.');
    }
    public function edit($id)
    {
        $product = Products::findOrFail($id);
        return view('produk.edit', compact('product'));
    }
    public function update(Request $request, $id)
    {
        validator($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
        ])->validate();

        $product = Products::findOrFail($id);
        $product->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
        ]);
        return redirect()->route('product.index')->with('success', 'Product updated successfully.');
    }
    public function destroy($id)
    {
        $product = Products::findOrFail($id);
        $product->delete();
        return redirect()->route('product.index')->with('success', 'Product deleted successfully.');    
    }
}
