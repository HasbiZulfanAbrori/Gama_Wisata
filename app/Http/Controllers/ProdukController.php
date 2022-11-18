<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Contact_Us;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produk::all();
        return view('admin.produk.index',compact('produk'));
    }

    public function tampil_produk(){
        return view('frontend.produk')
        ->with(['produk' => Produk::all(),'contact_us' => Contact_Us::paginate(1)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Produk $id)
    {
        return view('admin.produk.create', [
            'produk' => Produk::where($id->id)->get(),
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
        $tambah = new Produk;
        $tambah->nama_produk=$request->get('nama_produk');
        $tambah->deskripsi_produk=$request->get('deskripsi_produk');
        if ($request->hasFile('gambar_produk')) {
            $gambar_produk = $request->file('gambar_produk');
            $filename = date('His').'.'.$request->file('gambar_produk')->extension();
            if ($gambar_produk->move('gambar_produk',$filename)) {
                $tambah->gambar_produk=$filename;
            } else {
                # code...
            }
            
        }
        $tambah->save();
        return redirect('/adminproduk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $editproduk = Produk::find($id);
        return view('admin.produk.edit',[
            'editproduk' => $editproduk,]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ubah = Produk::find($id);
        $awal = $ubah->gambar_produk;
        if($request->gambar_produk){
            $ubah->gambar_produk = $awal;
            $request->gambar_produk->move(public_path().'/gambar_produk', $awal);
        }
        $ubah->nama_produk = $request->nama_produk;
        $ubah->deskripsi_produk = $request->deskripsi_produk;
        $ubah->save();
        return redirect('/adminproduk')->with('updateSucces','Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = Produk::find($id);
        // unlink($hapus->gambar);
        $hapus->delete();
        return redirect('/adminproduk');
    }
}
