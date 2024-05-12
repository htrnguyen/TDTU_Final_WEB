<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use App\Models\Product;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;

class AdminCouponController extends Controller
{
    public function index()
    {
        $coupons = Coupon::all();

        return view('admin.coupon')->with('coupons', $coupons);
    }
}
