<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class AdminCustomerController extends Controller
{
    public function index()
    {
        $customers = User::where('role', 'user')->get();
        return view('admin.customer')->with('customers', $customers);
    }

    public function block() {
        
    }
}
