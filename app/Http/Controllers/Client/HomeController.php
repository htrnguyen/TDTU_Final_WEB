<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    // public function index()
    // {
    //     return response()->json([
    //         'message' => 'Welcome to the home page!',
    //         'status' => 'success',
    //     ]);
    // }
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')  // Sắp xếp theo thời gian tạo, mới nhất đầu tiên
            ->take(10)  // Lấy 5 sản phẩm
            ->get();  // Thực thi truy vấn
        if (!$products) {
            return response()->json([
                'message' => 'No products found',
                'status' => 'error',
            ]);
        }

        return view('client.home', ['products' => $products]);
    }
}
