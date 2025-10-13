<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Trang chủ - hiển thị danh sách sản phẩm
    public function index()
    {
        $products = Product::latest()->paginate(8);
        return view('home', compact('products'));
    }

    // Trang chi tiết sản phẩm
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('product', compact('product'));
    }
}
