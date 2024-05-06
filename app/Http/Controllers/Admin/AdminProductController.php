<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class AdminProductController extends Controller
{
    public function index()
    {
        return view('admin.product');
    }

    public function productCreate()
    {
        return view('admin.createProduct');
    }

    public function productOrder()
    {
        return view('admin.orderProduct');
    }
}
