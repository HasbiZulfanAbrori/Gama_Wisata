<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function show($id)
    {
        $artikel = News::find($id);
        return view('artikel',compact('artikel'));
    }
}