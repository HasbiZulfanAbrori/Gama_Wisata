<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Profile;
use App\Models\Contact_Us;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Profile $id)
    {
        $profile = Profile::all();
        return view('admin.profile.index',compact('profile'));
    }

    public function profilefrontend(Profile $id)
    {
        $profilefrontend = Profile::all();
        return view('frontend.profil')
        ->with(['profilefrontend' => Profile::all(), 'contact_us' => Contact_Us::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Profile $id)
    {
        return view('admin.profile.create', [
            'profile' => Profile::where($id->id)->get(),
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
        $tambah = new Profile();
        $tambah->tentang_kami=$request->get('tentang_kami');
        $tambah->visi=$request->get('visi');
        $tambah->misi=$request->get('misi');
        $tambah->akreditasi=$request->get('akreditasi');
        if ($request->hasFile('gambar1')) {
            $gambar1 = $request->file('gambar1');
            $filename = date('dmY').'.'.$request->file('gambar1')->getClientOriginalName();
            if ($gambar1->move('gambar1',$filename)) {
                $tambah->gambar1=$filename;
                // $gambar1->save();
            } else {
                # code...
            }   
        }
        if ($request->hasFile('gambar2')) {
            $gambar2 = $request->file('gambar2');
            $filename = date('dmY').'.'.$request->file('gambar2')->getClientOriginalName();
            if ($gambar2->move('gambar2',$filename)) {
                $tambah->gambar2=$filename;
                // $gambar2->save();
            } else {
                # code...
            }   
        }
        $tambah->save();
        return redirect('/adminprofile');
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
        $editprofile = Profile::find($id);
        return view('admin.profile.edit',[
            'editprofile' => $editprofile,]
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
        $ubah = Profile::find($id);
        $awal = $ubah->gambar1;
        $awal = $ubah->gambar2;
        if($request->gambar1){
            $ubah->gambar1 = $awal;
            $request->gambar1->move(public_path().'/gambar1', $awal);
        }
        if($request->gambar2){
            $ubah->gambar2 = $awal;
            $request->gambar2->move(public_path().'/gambar2', $awal);
        }
        $ubah->tentang_kami = $request->tentang_kami;
        $ubah->visi = $request->visi;
        $ubah->misi = $request->misi;
        $ubah->akreditasi = $request->akreditasi;
        $ubah->save();
        return redirect('/adminprofile')->with('updateSucces','Data Berhasil di Update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = Profile::find($id);
        // unlink($hapus->gambar);
        $hapus->delete();
        return redirect('/adminprofile');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$profile = Profile::table('profile')
		->where('nama','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('index',['profile' => $profile]);
 
	}
}