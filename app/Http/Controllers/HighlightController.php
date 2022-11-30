<?php

namespace App\Http\Controllers;

use App\Models\Highlight;
use Illuminate\Http\Request;

class HighlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Highlight $id)
    {
        $highlight = Highlight::all();
        return view('admin.highlight.index',compact('highlight'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Highlight $id)
    {
        return view('admin.highlight.create', [
            'highlight' => Highlight::where($id->id)->get(),
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
        $tambah = new Highlight();
        $tambah->judul_highlight=$request->get('judul_highlight');
        $tambah->deskripsi_highlight=$request->get('deskripsi_highlight');
        $tambah->link=$request->get('link');
        $tambah->is_active=$request->get('is_active');
        if ($request->hasFile('gambar_highlight')) {
            $gambar_highlight = $request->file('gambar_highlight');
            $filename = date('His').'.'.$request->file('gambar_highlight')->extension();
            if ($gambar_highlight->move('gambar_highlight',$filename)) {
                $tambah->gambar_highlight=$filename;
            } else {
                # code...
            }
            
        }
        $tambah->save();
        return redirect('/adminhighlight');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Highlight  $highlight
     * @return \Illuminate\Http\Response
     */
    public function show(Highlight $highlight)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Highlight  $highlight
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edithighlight = Highlight::find($id);
        return view('admin.highlight.edit',[
            'edithighlight' => $edithighlight,]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Highlight  $highlight
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ubah = Highlight::find($id);
        $awal = $ubah->gambar_highlight;
        if($request->gambar_highlight){
            $ubah->gambar_highlight = $awal;
            $request->gambar_highlight->move(public_path().'/gambar_highlight', $awal);
        }
        $ubah->judul_highlight = $request->judul_highlight;
        $ubah->deskripsi_highlight = $request->deskripsi_highlight;
        $ubah->link = $request->link;
        $ubah->is_active = $request->is_active;
        $ubah->save();
        return redirect('/adminhighlight')->with('updateSucces','Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Highlight  $highlight
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = Highlight::find($id);
        // unlink($hapus->gambar);
        $hapus->delete();
        return redirect('/adminhighlight');
    }
}
