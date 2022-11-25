<?php

namespace App\Http\Controllers;

use App\Models\Contact_Us;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact_us = Contact_Us::all();
        return view('admin.contact.index',compact('contact_us'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Contact_Us $id)
    {
        return view('admin.contact.create', [
            'Contact_Us' => Contact_Us::where($id->id)->get(),
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
        $tambah = new Contact_Us;
        $tambah->no_telp=$request->get('no_telp');
        $tambah->alamat=$request->get('alamat');
        $tambah->is_active=$request->get('is_active');
        $tambah->save();
        return redirect('/admincontact');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact_Us  $contact_Us
     * @return \Illuminate\Http\Response
     */
    public function show(Contact_Us $contact_Us)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact_Us  $contact_Us
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editcontact = Contact_Us::find($id);
        return view('admin.contact.edit',[
            'editcontact' => $editcontact]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact_Us  $contact_Us
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ubah = Contact_Us::find($id);
        $ubah->no_telp = $request->no_telp;
        $ubah->alamat = $request->alamat;
        $ubah->is_active = $request->is_active;
        $ubah->save();
        return redirect('/admincontact')->with('updateSucces','Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact_Us  $contact_Us
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = Contact_Us::find($id);
        // unlink($hapus->gambar);
        $hapus->delete();
        return redirect('/admincontact');
    }
}