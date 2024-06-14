<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->paginate(25);
        return view('admin.product.index', compact('products'));
    }

    public function create()

    {
        $categories = Category::all();
        // dd($categories);
        return view('admin.product.create', compact('categories'));
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
            'image' => 'required|max:255',
        ]);

        $product = new Product();
        $product->product_name = $request->product_name;
        $product->product_code = $request->product_code;
        $product->category_id = $request->category_id;
        $product->brand = $request->brand;
        $product->price = $request->price;
        $product->description = $request->description;

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $product->image = $imageName;
        }

        $product->save();

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.show', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('admin.products.edit', compact('product', 'categories'));
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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $product = Product::findOrFail($id);

        // $product->product_name = $request->product_name;
        // $product->product_code = $request->product_code;
        // $product->category_id = $request->category_id;
        // $product->brand = $request->brand;
        // $product->price = $request->price;
        // $product->description = $request->description;

        $imageName = '';
        if ($request->hasFile('image')) {
            // Xóa hình ảnh cũ nếu có
            if ($product->image) {
                unlink(public_path('images').'/'.$product->image);
            }

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            // $product->image = $imageName;
        }

        // $product->save();
        $product->insert([
            "product_name" => $request->product_name,
            "product_code" => $request->product_code,
            "category_id" => $request->category_id,
            "brand" => $request->brand,
            "price" => $request->price,
            "description" => $request->description,
            "image" => $imageName
        ]);

        return redirect('/product-lists')->with('success', 'Product updated successfully.');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        
        // Xóa hình ảnh nếu có
        if ($product->image) {
            unlink(public_path('images').'/'.$product->image);
        }

        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
