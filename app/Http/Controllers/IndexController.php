<?php

namespace App\Http\Controllers;

use App\Models\Index;
use Illuminate\Http\Request;


class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Index $id)
    {
        $index = Index::all();
        return view('admin.index.index',compact('index'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Index $id)
    {
        return view('admin.index.create', [
            'index' => Index::where($id->id)->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambah = new Index;
        $tambah->judul=$request->get('judul');
        $tambah->branding=$request->get('branding');
        if ($request->hasFile('video')) {
            $video = $request->file('video');
            $filename = date('His').'.'.$request->file('video')->extension();
            if ($video->move('video',$filename)) {
                $tambah->video=$filename;
            } else {
                # code...
            }
            
        }
        $tambah->save();
        return redirect('/adminindex');

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
        $editindex = Index::find($id);
        return view('admin.index.edit',[
            'editindex' => $editindex,]
        );
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
        $ubah = Index::find($id);
        $awal = $ubah->video;
        if($request->video){
            $ubah->video = $awal;
            $request->video->move(public_path().'/video', $awal);
        }
        $ubah->judul = $request->judul;
        $ubah->branding = $request->branding;
        $ubah->save();
        return redirect('/adminindex')->with('updateSucces','Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = Index::find($id);
        // unlink($hapus->gambar);
        $hapus->delete();
        return redirect('/adminindex');
    }
}