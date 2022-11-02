<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return view('admin.news.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // News::create($request->except(['_token','submit']));
        // return redirect('/adminnews');
        // return $request;
        $tambah = new News;
        $tambah->nama=$request->get('nama');
        $tambah->keterangan=$request->get('keterangan');
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $filename = date('His').'.'.$request->file('gambar')->extension();
            if ($gambar->move('gambar',$filename)) {
                $tambah->gambar=$filename;
            } else {
                # code...
            }
            
        }
        $tambah->save();
        return redirect('/adminnews');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $news = News::find($id);
        // return view('admin.news.edit',compact(['news']));
        $edit = News::find($id);
        return view('admin.news.edit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ubah = News::find($id);
        $awal = $ubah->gambar;
        $edit = [
            'nama' => $request['nama'],
            'gambar' => $awal,
            'keterangan' => $request['keterangan'],
        ];
        $request->gambar->move(public_path().'/gambar', $awal);
        $ubah->update($edit);
        return redirect('/adminnews');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = News::find($id);
        // unlink($hapus->gambar);
        $hapus->delete();
        return redirect('/adminnews');
    }
}