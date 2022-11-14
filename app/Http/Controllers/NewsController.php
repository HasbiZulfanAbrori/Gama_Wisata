<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(News $id)
    {
        $news = News::all();
        return view('admin.news.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(News $id)
    {
        return view('admin.news.create', [
            'news' => News::where($id->id)->get(),
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
        // News::create($request->except(['_token','submit']));
        // return redirect('/adminnews');
        // return $request;
        $tambah = new News;
        $tambah->judul_news=$request->get('judul_news');
        $tambah->keterangan_news=$request->get('keterangan_news');
        if ($request->hasFile('gambar_news')) {
            $gambar_news = $request->file('gambar_news');
            $filename = date('His').'.'.$request->file('gambar_news')->extension();
            if ($gambar_news->move('gambar_news',$filename)) {
                $tambah->gambar_news=$filename;
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
        $editnews = News::find($id);
        return view('admin.news.edit',[
            'editnews' => $editnews,]
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
        $ubah = News::find($id);
        $awal = $ubah->gambar_news;
        if($request->gambar_news){
            $ubah->gambar_news = $awal;
            $request->gambar_news->move(public_path().'/gambar_news', $awal);
        }
        $ubah->judul_news = $request->judul_news;
        $ubah->keterangan_news = $request->keterangan_news;
        $ubah->save();
        return redirect('/adminnews')->with('updateSucces','Data Berhasil di Update');

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

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$news = News::table('news')
		->where('nama','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('index',['news' => $news]);
 
	}
}