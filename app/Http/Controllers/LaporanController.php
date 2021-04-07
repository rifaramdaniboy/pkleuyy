<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\Provinsi;

use App\Models\Kasus;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use PDF;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laporan = Kasus::with('rw')->get();
        return view('admin.report.index', compact('laporan'));
    }
    public function ReportProvinsi(Request $request)
    {
        $awal = $request->awal;
        $akhir = $request->akhir;
        if ($awal < $akhir) {
            $provinsi = Provinsi::select('provinsis.id', 'provinsis.nama_provinsi', 'provinsis.kode_provinsi', 'kasuses.tanggal', 'kasuses.jumlah_positif', 'kasuses.jumlah_sembuh', 'kasuses.jumlah_meninggal')
                ->join('kotas', 'provinsis.id', '=', 'kotas.id_provinsi')
                ->join('kecamatans', 'kotas.id', '=', 'kecamatans.id_kota')
                ->join('kelurahans', 'kecamatans.id', '=', 'kelurahans.id_kecamatan')
                ->join('rws', 'kelurahans.id', '=', 'rws.id_kelurahan')
                ->join('kasuses', 'rws.id', '=', 'kasuses.id_rw')
                ->whereBetween('kasuses.tanggal', [$awal, $akhir])
                ->get();
            return view('admin.report.index', compact('provinsi'));
        } elseif ($awal > $akhir) {
            return redirect()->back()->with(['error' => 'Tanggal yang dimasukkan tidak valid']);
        }
    }

    public function cetak_pdf()
    {
        $laporan = Kasus::with('rw')->get();
        $pdf = PDF::loadview('admin.report.report', compact('laporan'));
        return $pdf->download('Laporan-kasuses.pdf');
    }
}
