<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;

class AdminProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('admin.product')->with('products', $products);
    }

    public function productCreate()
    {
        return view('admin.createProduct');
    }

    public function productOrder()
    {
        return view('admin.orderProduct');
    }
    
    public function store()
    {

        try {
            $attributes = request()->validate([
                'name' => 'required|string|max:255',
                'description' => 'required|string',
                'price' => 'required|numeric|min:0',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'stock_quantity' => 'required|numeric|min:0',
                'category_id' => 'required|numeric',
                'color' => 'required|string',
                'size' => 'required|string'
            ]);

            $product = Product::create($attributes);

            return response()->json([
                'success' => true,
                'data' => $attributes,
                'created' => $product
            ]);
            return redirect()->route('products.index')->with('success', 'Product created successfully.');
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
                // 'data' => $attributes,
                // 'created' => $product
            ]);
            return redirect()->back()->with('error', 'Product not found.');
        } catch (Exception $e) {
            Log::error('Error creating product: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
                // 'data' => $attributes,
                // 'created' => $product
            ]);
            throw new Exception('Failed to create product. Please try again.', 500);
        }

        // if (!Product::create($attributes)) {
        //     throw
        // }
    }

    public function show() {
        $products = Product::all();

        return response()->json([
            'success' => true,
            'data' => $products
        ]);
    }
}
