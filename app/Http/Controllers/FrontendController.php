<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Models\Provinsi;
use App\Http\Models\Kota;
use App\Http\Models\Kecamatan;
use App\Http\Models\Kelurahan;
use App\Http\Models\RW;
use App\Http\Models\kasuses;
use Illuminate\Support\Carbon;

class FrontendController extends Controller
{



    public function index()
    {
        // Count Up
        $positif = DB::table('rws')
            ->select(
                'kasuses.jumlah_positif',
                'kasuses.jumlah_sembuh',
                'kasuses.jumlah_meninggal'
            )
            ->join('kasuses', 'rws.id', '=', 'kasuses.id_rw')
            ->sum('kasuses.jumlah_positif');
        $sembuh = DB::table('rws')
            ->select(
                'kasuses.jumlah_positif',
                'kasuses.jumlah_sembuh',
                'kasuses.jumlah_meninggal'
            )
            ->join('kasuses', 'rws.id', '=', 'kasuses.id_rw')
            ->sum('kasuses.jumlah_sembuh');
        $meninggal = DB::table('rws')
            ->select(
                'kasuses.jumlah_positif',
                'kasuses.jumlah_sembuh',
                'kasuses.jumlah_meninggal'
            )
            ->join('kasuses', 'rws.id', '=', 'kasuses.id_rw')
            ->sum('kasuses.jumlah_meninggal');


        $global = file_get_contents('https://api.kawalcorona.com/positif');
        $posglobal = json_decode($global, TRUE);
        $datasembuh = file_get_contents("https://api.kawalcorona.com/sembuh");
        $possembuh = json_decode($datasembuh, TRUE);
        $datameninggal = file_get_contents("https://api.kawalcorona.com/meninggal");
        $posmeninggal = json_decode($datameninggal, TRUE);


        // Date
        $tanggal = Carbon::now()->format('D d-M-Y');

        // Table Provinsi
        $tampil = DB::table('provinsis')
            ->join('kotas', 'kotas.id_provinsi', '=', 'provinsis.id')
            ->join('kecamatans', 'kecamatans.id_kota', '=', 'kotas.id')
            ->join('kelurahans', 'kelurahans.id_kecamatan', '=', 'kecamatans.id')
            ->join('rws', 'rws.id_kelurahan', '=', 'kelurahans.id')
            ->join('kasuses', 'kasuses.id_rw', '=', 'rws.id')
            ->select(
                'nama_provinsi',
                DB::raw('sum(kasuses.jumlah_positif) as jumlah_positif'),
                DB::raw('sum(kasuses.jumlah_sembuh) as jumlah_sembuh'),
                DB::raw('sum(kasuses.jumlah_meninggal) as jumlah_meninggal')
            )
            ->groupBy('nama_provinsi')->orderBy('nama_provinsi', 'ASC')
            ->get();

        // Table Dunia
        $datadunia = file_get_contents("https://api.kawalcorona.com/");
        $dunia = json_decode($datadunia, TRUE);


        return view('welcome', compact('positif', 'sembuh', 'meninggal', 'tanggal', 'tampil', 'posglobal', 'dunia', 'possembuh', 'posmeninggal'));
    }
}
