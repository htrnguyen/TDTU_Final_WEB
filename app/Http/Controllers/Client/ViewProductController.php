<?php
namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class ViewProductController extends Controller
{
    public function index()
    {
        $breadcrumbs = [
            'Home' => route('home'),
            'Men' => null
        ];

        return view('client.viewproduct', compact('breadcrumbs'));
    }
}


