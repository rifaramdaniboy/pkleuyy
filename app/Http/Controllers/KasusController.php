<?php

namespace App\Http\Controllers;

use App\Models\Kasus;
use App\Models\Rw;
use App\Models\Kelurahan;
use App\Models\Kecamatan;
use App\Models\Kota;
use App\Models\Provinsi;
use Illuminate\Http\Request;

class KasusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laporan = Kasus::with('rw')->get();
        return view('admin.laporan.index', compact('laporan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rw = Rw::all();
        return view('admin.laporan.create', compact('rw'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $positif = (int)$request->jumlah_positif - $request->jumlah_meninggal;
        $meninggal = $request->jumlah_positif - $request->jumlah_sembuh;
        $request->validate([
            'jumlah_positif' => 'required|numeric|min:1',
            'jumlah_sembuh' => "required|numeric|min:1|max:$positif",
            'jumlah_meninggal' => "required||numeric|min:1|max:$meninggal",
            'tanggal' => 'required',
        ], [
            'jumlah_positif.required' => 'Data tidak boleh kosong',
            'jumlah_positif.min' => 'Jumlah positif tidak boleh kurang dari 1',
            'jumlah_sembuh.required' => 'Data tidak boleh kosong',
            'jumlah_sembuh.min' => 'Jumlah sembuh tidak boleh kurang dari 1',
            'jumlah_sembuh.max' => 'Jumlah sembuh tidak boleh melebihi jumlah Positif',
            'jumlah_meninggal.required' => 'Data tidak boleh kosong',
            'jumlah_meninggal.min' => 'Jumlah meninggal tidak boleh kurang dari 1',
            'jumlah_meninggal.max' => 'Jumlah meninggal tidak boleh melebihi jumlah Positif atau Sembuh ',
            'tanggal.required' => 'Data tidak boleh kosong',
        ]);


        $laporan = new Kasus();
        $laporan->id_rw = $request->id_rw;
        $laporan->jumlah_positif = $request->jumlah_positif;
        $laporan->jumlah_sembuh = $request->jumlah_sembuh;
        $laporan->jumlah_meninggal = $request->jumlah_meninggal;
        $laporan->tanggal = $request->tanggal;
        $laporan->save();
        return redirect()->route('laporan.index')->with(['succes' => 'Data Berhasil Di simpan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kasus  $kasus
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $laporan = Kasus::findOrFail($id);
        $rw = Rw::all();
        $selected = $laporan->rw->pluck('id')->toArray();
        return view('admin.laporan.edit', compact('laporan', 'rw', 'selected'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kasus  $kasus
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $laporan = Kasus::findOrFail($id);
        $rw = Rw::all();
        $selected = $laporan->rw->pluck('id')->toArray();
        return view('admin.laporan.edit', compact('laporan', 'rw', 'selected'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kasus  $kasus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $laporan = Kasus::findOrFail($id);
        $laporan->id_rw = $request->id_rw;
        $laporan->jumlah_positif = $request->jumlah_positif;
        $laporan->jumlah_sembuh = $request->jumlah_sembuh;
        $laporan->jumlah_meninggal = $request->jumlah_meninggal;
        $laporan->tanggal = $request->tanggal;
        $laporan->save();
        return redirect()->route('laporan.index')->with(['succes' => 'Data Berhasil Di Update']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kasus  $kasus
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $laporan = Kasus::findOrFail($id);
        $laporan->delete();
        return redirect()->route('laporan.index')->with(['succes' => 'Data Berhasil Di Hapus']);
    }
}
