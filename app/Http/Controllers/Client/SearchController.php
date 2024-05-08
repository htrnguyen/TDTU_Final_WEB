<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product; // Giả sử bạn tìm kiếm sản phẩm

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('q');
        $results = Product::where('name', 'LIKE', '%' . $query . '%')->get();

        return view('search-results', compact('results', 'query'));
    }
}
