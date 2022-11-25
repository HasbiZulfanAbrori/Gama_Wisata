<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Contact_Us;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function show($id)
    {
        return view('frontend.artikel')
        ->with(['artikel' => News::find($id), 'contact_us' => Contact_Us::paginate(1)]);
    }
}