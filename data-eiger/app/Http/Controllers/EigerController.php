<?php

namespace App\Http\Controllers;

use App\eiger;
use Illuminate\Http\Request;

class EigerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return eiger::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $eiger = new eiger();
        $eiger->nama = $request->nama;
        $eiger->jenis = $request->jenis;
        $eiger->harga = $request->harga;
        $eiger->save();

        return "Data Eiger Sudah DI Tambahkan";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\eiger  $eiger
     * @return \Illuminate\Http\Response
     */
    public function show(eiger $eiger)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\eiger  $eiger
     * @return \Illuminate\Http\Response
     */
    public function edit(eiger $eiger)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\eiger  $eiger
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $nama = $request->nama;
        $jenis = $request->jenis;
        $harga = $request->harga;

        $eiger = eiger::find($id);
        $eiger->nama = $nama;
        $eiger->jenis = $jenis;
        $eiger->harga = $harga;

        $eiger->save();

        return "Data Eiger Berhasil Di Update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\eiger  $eiger
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $id = $request->id;
        $eiger = eiger::find($id);
        $eiger->delete();

        return "Data Eiger Berhasil Di Hapus";
    }
}
