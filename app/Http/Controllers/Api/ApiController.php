<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\Provinsi;
use App\Models\Kota;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Rw;
use App\Models\Laporan;

class ApiController extends Controller
{
    public function negara_index()
    {
    // persiapkan curl
    $ch = curl_init(); 

    // set url 
    curl_setopt($ch, CURLOPT_URL, "https://api.kawalcorona.com/");

    // return the transfer as a string 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

    // $output contains the output string 
    $output = curl_exec($ch); 

    // tutup curl 
    curl_close($ch);      

    // menampilkan hasil curl
    echo $output;
    }
    
    public function indonesia()
    {
        $hariini = Carbon::now()->format('d-m-y'); 
    	$data_skrg = DB::table('kasuses')
                    ->select(DB::raw('SUM(jumlah_positif) as Positif'),
                             DB::raw('SUM(jumlah_positif) as Positif'), 
                             DB::raw('SUM(jumlah_sembuh) as Sembuh'), 
                             DB::raw('SUM(jumlah_meninggal) as Meninggal'),
                             DB::raw('MAX(tanggal) as Tanggal'))
	    			->whereDay('tanggal', '=' , $hariini)
	    			->get();
        $data = DB::table('kasuses')
                    ->select(DB::raw('SUM(jumlah_positif) as Positif'), 
                             DB::raw('SUM(jumlah_sembuh) as Sembuh'), 
                             DB::raw('SUM(jumlah_meninggal) as Meninggal'))
    				->get();
    	$rest = [
    		'success' => true,
    		'data' => [
                'hari_ini' => $data_skrg, 
                'Total' => $data
            ],
    		'message' => 'Data Kasus Seluruh Indonesia Ditampilkan'
    	];
    	return response()->json($rest, 200);
    }
    
    public function provinsi_index()
    {
        $hariini = Carbon::now()->format('d-m-y'); 
        $data_skrg = DB::table('kasuses')
                ->select(DB::raw('provinsis.id'),
                         DB::raw('provinsis.nama_provinsi as Provinsi'),
                         DB::raw('SUM(kasuses.jumlah_positif) as Positif'),
                         DB::raw('SUM(kasuses.jumlah_sembuh) as Sembuh'),
                         DB::raw('SUM(kasuses.jumlah_meninggal) as Meninggal'),
                         DB::raw('MAX(tanggal) as Tanggal'))
                         ->whereDay('tanggal', '=' , $hariini)
                ->join('rws' , 'rws.id', 'kasuses.id_rw',)
                ->join('kelurahans' ,'kelurahans.id', '=', 'rws.id_kelurahan')
                ->join('kecamatans' ,'kecamatans.id', '=', 'kelurahans.id_kecamatan')
                ->join('kotas' ,'kotas.id', '=', 'kecamatans.id_kota')
                ->join('provinsis' ,'provinsis.id', '=', 'kotas.id_provinsi')
                ->whereDate('kasuses.tanggal', date('Y-m-d'))
                ->groupby('provinsis.id')
                ->get();

        $data = DB::table('kasuses')
                ->select(DB::raw('provinsis.nama_provinsi as Provinsi'), 
                         DB::raw('SUM(kasuses.jumlah_positif) as Positif'), 
                         DB::raw('SUM(kasuses.jumlah_sembuh) as Sembuh'),
                         DB::raw('SUM(kasuses.jumlah_meninggal) as Meninggal')) 
                ->join('rws', 'rws.id', '=', 'kasuses.id_rw')
                ->join('kelurahans', 'kelurahans.id', '=', 'rws.id_kelurahan')
                ->join('kecamatans', 'kecamatans.id', '=', 'kelurahans.id_kecamatan')
                ->join('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
                ->join('provinsis', 'provinsis.id', '=', 'kotas.id_provinsi')
                ->groupBy('provinsis.nama_provinsi')
            ->get();

        $rest = [
            'status' => 200,
            'data' => [ 
                'Hari Ini' =>[$data_skrg],
                'Total' =>[$data]
            ],
            'message' => 'Data Kasus Provinsi Ditampilkan'
        ];
        return response()->json($rest, 200);
    }
    public function kota_index()
    {
        //Data Kota 
        $hariini = Carbon::now()->format('d-m-y'); 
        $data_skrg = DB::table('kasuses')
                ->select(DB::raw('kotas.id'),
                         DB::raw('kotas.nama_kota as Kota'),
                         DB::raw('SUM(kasuses.jumlah_positif) as Positif'),
                         DB::raw('SUM(kasuses.jumlah_sembuh) as Sembuh'),
                         DB::raw('SUM(kasuses.jumlah_meninggal) as Meninggal'),
                         DB::raw('MAX(tanggal) as Tanggal'))
                         ->whereDay('tanggal', '=' , $hariini)
                ->join('rws' , 'rws.id', 'kasuses.id_rw',)
                ->join('kelurahans' ,'kelurahans.id', '=', 'rws.id_kelurahan')
                ->join('kecamatans' ,'kecamatans.id', '=', 'kelurahans.id_kecamatan')
                ->join('kotas' ,'kotas.id', '=', 'kecamatans.id_kota')
                ->join('provinsis' ,'provinsis.id', '=', 'kotas.id_provinsi')
                ->whereDate('kasuses.tanggal', date('Y-m-d'))
                ->groupby('provinsis.id')
                ->get();

        $data = DB::table('kotas')
        ->join('kecamatans','kecamatans.id_kota', '=', 'kotas.id')
        ->join('kelurahans','kelurahans.id_kecamatan', '=', 'kecamatans.id')
        ->join('rws','rws.id_kelurahan', '=', 'kelurahans.id')
        ->join('kasuses','kasuses.id_rw', '=', 'rws.id')
        ->select('nama_kota',
        DB::raw('sum(kasuses.jumlah_positif) as positif'),
        DB::raw('sum(kasuses.jumlah_sembuh) as sembuh'),
        DB::raw('sum(kasuses.jumlah_meninggal) as meninggal'))
        ->groupBy('nama_kota')
        ->get();
        $rest = [
            'status' => 200,
            'data' => [ 
                'Hari Ini' =>[$data_skrg],
                'Total' =>[$data]
            ],
            'message' => 'Data Kasus Kota Ditampilkan'
        ];
        return response()->json($rest, 200);
    }

    public function kecamatan_index()
    {
        //Data Kecamatan 
        $hariini = Carbon::now()->format('d-m-y'); 
        $data_skrg = DB::table('kasuses')
                ->select(DB::raw('kecamatans.id'),
                         DB::raw('kecamatans.nama_kecamatan as Kecamatan'),
                         DB::raw('SUM(kasuses.jumlah_positif) as Positif'),
                         DB::raw('SUM(kasuses.jumlah_sembuh) as Sembuh'),
                         DB::raw('SUM(kasuses.jumlah_meninggal) as Meninggal'),
                         DB::raw('MAX(tanggal) as Tanggal'))
                         ->whereDay('tanggal', '=' , $hariini)
                ->join('rws' , 'rws.id', 'kasuses.id_rw',)
                ->join('kelurahans' ,'kelurahans.id', '=', 'rws.id_kelurahan')
                ->join('kecamatans' ,'kecamatans.id', '=', 'kelurahans.id_kecamatan')
                ->join('kotas' ,'kotas.id', '=', 'kecamatans.id_kota')
                ->join('provinsis' ,'provinsis.id', '=', 'kotas.id_provinsi')
                ->whereDate('kasuses.tanggal', date('Y-m-d'))
                ->groupby('provinsis.id')
                ->get();

        $data = DB::table('kecamatans')
        ->join('kelurahans','kelurahans.id_kecamatan', '=', 'kecamatans.id')
        ->join('rws','rws.id_kelurahan', '=', 'kelurahans.id')
        ->join('kasuses','kasuses.id_rw', '=', 'rws.id')
        ->select('nama_kecamatan',
        DB::raw('sum(kasuses.jumlah_positif) as positif'),
        DB::raw('sum(kasuses.jumlah_sembuh) as sembuh'),
        DB::raw('sum(kasuses.jumlah_meninggal) as meninggal'))
        ->groupBy('nama_kecamatan')
        ->get();
        $rest = [
            'status' => 200,
            'data' => [ 
                'Hari Ini' =>[$data_skrg],
                'Total' =>[$data]
            ],
            'message' => 'Data Kasus Kecamatan Ditampilkan'
        ];
        return response()->json($rest, 200);
    }

    public function kelurahan_index()
    {
        //Data Kelurahan
        $hariini = Carbon::now()->format('d-m-y'); 
        $data_skrg = DB::table('kasuses')
                ->select(DB::raw('kelurahans.id'),
                         DB::raw('kelurahans.nama_kelurahan as Kelurahan'),
                         DB::raw('SUM(kasuses.jumlah_positif) as Positif'),
                         DB::raw('SUM(kasuses.jumlah_sembuh) as Sembuh'),
                         DB::raw('SUM(kasuses.jumlah_meninggal) as Meninggal'),
                         DB::raw('MAX(tanggal) as Tanggal'))
                         ->whereDay('tanggal', '=' , $hariini)
                ->join('rws' , 'rws.id', 'kasuses.id_rw',)
                ->join('kelurahans' ,'kelurahans.id', '=', 'rws.id_kelurahan')
                ->join('kecamatans' ,'kecamatans.id', '=', 'kelurahans.id_kecamatan')
                ->join('kotas' ,'kotas.id', '=', 'kecamatans.id_kota')
                ->join('provinsis' ,'provinsis.id', '=', 'kotas.id_provinsi')
                ->whereDate('kasuses.tanggal', date('Y-m-d'))
                ->groupby('provinsis.id')
                ->get();

        $data = DB::table('kelurahans')
        ->join('rws','rws.id_kelurahan', '=', 'kelurahans.id')
        ->join('kasuses','kasuses.id_rw', '=', 'rws.id')
        ->select('nama_kelurahan',
        DB::raw('sum(kasuses.jumlah_positif) as positif'),
        DB::raw('sum(kasuses.jumlah_sembuh) as sembuh'),
        DB::raw('sum(kasuses.jumlah_meninggal) as meninggal'))
        ->groupBy('nama_kelurahan')
        ->get();
        $rest = [
            'status' => 200,
            'data' => [ 
                'Hari Ini' =>[$data_skrg],
                'Total' =>[$data]
            ],
            'message' => 'Data Kasus Kelurahan Ditampilkan'
        ];
        return response()->json($rest, 200);
    }

    public function rw_index()
    {
        //Data Kelurahan
        $hariini = Carbon::now()->format('d-m-y'); 
        $data_skrg = DB::table('kasuses')
                ->select(DB::raw('rws.id'),
                         DB::raw('rws.nama_rw as Rw'),
                         DB::raw('SUM(kasuses.jumlah_positif) as Positif'),
                         DB::raw('SUM(kasuses.jumlah_sembuh) as Sembuh'),
                         DB::raw('SUM(kasuses.jumlah_meninggal) as Meninggal'),
                         DB::raw('MAX(tanggal) as Tanggal'))
                         ->whereDay('tanggal', '=' , $hariini)
                ->join('rws' , 'rws.id', 'kasuses.id_rw',)
                ->join('kelurahans' ,'kelurahans.id', '=', 'rws.id_kelurahan')
                ->join('kecamatans' ,'kecamatans.id', '=', 'kelurahans.id_kecamatan')
                ->join('kotas' ,'kotas.id', '=', 'kecamatans.id_kota')
                ->join('provinsis' ,'provinsis.id', '=', 'kotas.id_provinsi')
                ->whereDate('kasuses.tanggal', date('Y-m-d'))
                ->groupby('provinsis.id')
                ->get();

        $data = DB::table('kelurahans')
        ->join('rws','rws.id_kelurahan', '=', 'kelurahans.id')
        ->join('kasuses','kasuses.id_rw', '=', 'rws.id')
        ->select('nama_kelurahan',
        DB::raw('sum(kasuses.jumlah_positif) as positif'),
        DB::raw('sum(kasuses.jumlah_sembuh) as sembuh'),
        DB::raw('sum(kasuses.jumlah_meninggal) as meninggal'))
        ->groupBy('nama_kelurahan')
        ->get();
        $rest = [
            'status' => 200,
            'data' => [ 
                'Hari Ini' =>[$data_skrg],
                'Total' =>[$data]
            ],
            'message' => 'Data Kasus Kelurahan Ditampilkan'
        ];
        return response()->json($rest, 200);
    }

    public function show($id)
        {
        $provinsi = Provinsi::findOrFail($id);
        $all = DB::table('provinsis')
            ->select('provinsis.kode_provinsi','provinsis.nama_provinsi',
            DB::raw('SUM(kasuses.jumlah_positif) as jumlah_positif'),
            DB::raw('SUM(kasuses.jumlah_sembuh) as jumlah_sembuh'),
            DB::raw('SUM(kasuses.jumlah_meninggal) as jumlah_meninggal'))
                ->join('kotas','provinsis.id','=','kotas.id_provinsi')
                ->join('kecamatans','kotas.id','=','kecamatans.id_kota')
                ->join('kelurahans','kecamatans.id','=','kelurahans.id_kecamatan')
                ->join('rws','kelurahans.id','=','rws.id_kelurahan')
                ->join('kasuses','rws.id','=','kasuses.id_rw')
                ->where('provinsis.id',$id)
                ->groupBy('provinsis.id')
                ->get();
            $toDay = DB::table('provinsis')
            ->select('provinsis.nama_provinsi','provinsis.kode_provinsi',
            DB::raw('SUM(kasuses.jumlah_positif) as jumlah_positif'),
            DB::raw('SUM(kasuses.jumlah_sembuh) as jumlah_sembuh'),
            DB::raw('SUM(kasuses.jumlah_meninggal) as jumlah_meninggal'))
                ->join('kotas','provinsis.id','=','kotas.id_provinsi')
                ->join('kecamatans','kotas.id','=','kecamatans.id_kota')
                ->join('kelurahans','kecamatans.id','=','kelurahans.id_kecamatan')
                ->join('rws','kelurahans.id','=','rws.id_kelurahan')
                ->join('kasuses','rws.id','=','kasuses.id_rw')
                ->where('provinsis.id',$id)
                ->whereDate('kasuses.tanggal',Carbon::today())
                ->groupBy('provinsis.id')
                ->get();
                return response([
                    'success' => true,
                    'data' => ['Hari Ini' => $toDay,
                                'Semua' => $all
                                ],
                    'message' => 'Berhasil'
                ], 200);
        }
}