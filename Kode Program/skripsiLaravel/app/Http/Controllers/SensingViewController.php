<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use DB;
    use App\Http\Requests;
    use App\Http\Controllers\Controller;

    class SensingViewController extends Controller {
        public function index(){
            $nodes1 = DB::select(
                'SELECT 
                    kode_node  , waktu_sensing ,nama_node,ph_tanah,kelembaban_tanah,suhu_tanah,suhu_udara 
                FROM
                    nodesensor JOIN tanah ON tanah.kode_petak = nodesensor.kode_node
                WHERE
                    waktu_sensing IN (SELECT 
                        max(waktu_sensing)
                    FROM
                        tanah
                    WHERE
                        kode_petak = 1)'
            );
            $nodes2 = DB::select(
                'SELECT 
                    kode_node  , waktu_sensing ,nama_node,ph_tanah,kelembaban_tanah,suhu_tanah,suhu_udara 
                FROM
                    nodesensor JOIN tanah ON tanah.kode_petak = nodesensor.kode_node
                WHERE
                    waktu_sensing IN (SELECT 
                        max(waktu_sensing)
                    FROM
                        tanah
                    WHERE
                        kode_petak = 2)'
            );
            $nodes3 = DB::select(
                'SELECT 
                    kode_node  , waktu_sensing ,nama_node,ph_tanah,kelembaban_tanah,suhu_tanah,suhu_udara 
                FROM
                    nodesensor JOIN tanah ON tanah.kode_petak = nodesensor.kode_node
                WHERE
                    waktu_sensing IN (SELECT 
                        max(waktu_sensing)
                    FROM
                        tanah
                    WHERE
                        kode_petak = 3)'
            );
            $nodes4 = DB::select(
                'SELECT 
                    kode_node  , waktu_sensing ,nama_node,ph_tanah,kelembaban_tanah,suhu_tanah,suhu_udara 
                FROM
                    nodesensor JOIN tanah ON tanah.kode_petak = nodesensor.kode_node
                WHERE
                    waktu_sensing IN (SELECT 
                        max(waktu_sensing)
                    FROM
                        tanah
                    WHERE
                        kode_petak = 4)'
            );
            return view('skripsi_sensing',['nodes1'=>$nodes1,'nodes2'=>$nodes2,'nodes3'=>$nodes3,'nodes4'=>$nodes4]); 
        }
    }



