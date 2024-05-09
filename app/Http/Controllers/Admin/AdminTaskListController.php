<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
class AdminTaskListController extends Controller
{
    public function index()
    {
        return view('admin.tasklist');
    }
}
