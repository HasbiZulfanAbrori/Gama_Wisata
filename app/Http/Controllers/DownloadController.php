<?php

namespace App\Http\Controllers;

use App\Models\Download;
use App\Models\Contact_Us;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Download $id)
    {
        $download = Download::all();
        return view('admin.download.index',compact('download'));
    }

    public function tampil(Download $id)
    {
        return view('frontend.download')
        ->with(['download' => Download::all(),'contact_us' => Contact_Us::paginate(1)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Download $id)
    {
        return view('admin.download.create', [
            'download' => Download::where($id->id)->get(),
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
        $tambah = new Download();
        $tambah->nama_file=$request->get('nama_file');
        if ($request->hasFile('file_download')) {
            $file_download = $request->file('file_download');
            $filename = date('dmY').'.'.$request->file('file_download')->getClientOriginalName();
            if ($file_download->move('file_download',$filename)) {
                $tambah->file_download=$filename;
            } else {
                # code...
            }
            
        }
        $tambah->save();
        return redirect('/admindownload');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Download  $download
     * @return \Illuminate\Http\Response
     */
    public function show(Download $download)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Download  $download
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editfile = Download::find($id);
        return view('admin.download.edit',[
            'editfile' => $editfile,]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Download  $download
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ubah = Download::find($id);
        $awal = $ubah->file_download;
        if($request->file_download){
            $ubah->file_download = $awal;
            $request->file_download->move(public_path().'/file_download', $awal);
        }
        $ubah->nama_file = $request->nama_file;
        $ubah->save();
        return redirect('/admindownload')->with('updateSucces','Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Download  $download
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = Download::find($id);
        // unlink($hapus->gambar);
        $hapus->delete();
        return redirect('/admindownload');
    }
}
