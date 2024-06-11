<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'product_code' => 'required|string|max:100|unique:products',
            'category_id' => 'required|integer|exists:categories,id',
            'brand' => 'nullable|string|max:100',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
        ]);

        $product = new Product();
        $product->product_name = $request->product_name;
        $product->product_code = $request->product_code;
        $product->category_id = $request->category_id;
        $product->brand = $request->brand;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'product_code' => 'required|string|max:100|unique:products,product_code,' . $id,
            'category_id' => 'required|integer|exists:categories,id',
            'brand' => 'nullable|string|max:100',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
        ]);

        $product = Product::findOrFail($id);
        $product->product_name = $request->product_name;
        $product->product_code = $request->product_code;
        $product->category_id = $request->category_id;
        $product->brand = $request->brand;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
