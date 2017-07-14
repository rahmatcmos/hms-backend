<?php

namespace App\Http\Controllers;

use App\HasilLab;
use Illuminate\Http\Request;

class HasilLabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return HasiLab::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $hasilLab = new HasilLab;
      $hasilLab->id_transaksi = $request->input('id_transaksi');
      $hasilLab->id_transaksi = $request->input('id_tindakan');
      $hasilLab->id_transaksi = $request->input('dokumen');
      $hasilLab->save();
      return response($hasilLab, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      return HasilLab::findOrFail($id);
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
      $hasilLab = HasilLab::findOrFail($id);
      $hasilLab->id_transaksi = $request->input('id_transaksi');
      $hasilLab->id_transaksi = $request->input('id_tindakan');
      $hasilLab->id_transaksi = $request->input('dokumen');
      $hasilLab->save();
      return response($hasilLab, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      HasilLab::destroy($id);
      return response('', 204);
    }
}