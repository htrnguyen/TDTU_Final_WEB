<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class AdminController extends Controller
{
    public function index()
    {
        $date = Carbon::now()->format('d-m-Y');
        $hours = Carbon::now()->format('H:i:s');
        return view('admin.home', compact('date','hours'));
    }
}
