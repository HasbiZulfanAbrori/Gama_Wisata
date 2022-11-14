<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.index')->with(['news' => News::paginate(10)]);
    }
}