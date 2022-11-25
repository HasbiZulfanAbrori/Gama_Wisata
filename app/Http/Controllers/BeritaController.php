<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Contact_Us;
use App\Models\Index;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        return view('frontend.news')
        ->with(['berita'=>News::where('is_active', 1)->get(), 'contact_us' => Contact_Us::where('is_active', 1)->get()]);
    }
}