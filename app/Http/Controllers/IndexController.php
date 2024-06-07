<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class IndexController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function danh_muc()
    {
        $category = Category::orderBy('id', 'DESC')->get();
        return view('pages.category', compact('category'));
    }

    public function san_pham()
    {
        return view('pages.product');
    }
}
