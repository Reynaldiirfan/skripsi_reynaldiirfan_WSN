<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use DB;
    use App\Http\Requests;
    use App\Http\Controllers\Controller;

    class GISViewController extends Controller {
        public function index(){
            $nodes1 = DB::select(
                'SELECT 
                    waktu_node,nama_node,status_node,koor_lintang,koor_bujur 
                FROM
                    nodesensor
                WHERE
                    kode_node=1'
            );
            $nodes2 = DB::select(
                'SELECT 
                     waktu_node,nama_node,status_node,koor_lintang,koor_bujur
                FROM
                    nodesensor
                WHERE
                    kode_node=2'
            );
            $nodes3 = DB::select(
                'SELECT 
                    waktu_node,nama_node,status_node,koor_lintang,koor_bujur 
                FROM
                    nodesensor
                WHERE
                    kode_node=3'
            );
            $nodes4 = DB::select(
                'SELECT 
                    waktu_node,nama_node,status_node,koor_lintang,koor_bujur 
                FROM
                    nodesensor
                WHERE
                    kode_node=4'
            );
            return view('skripsi_gis',['nodes1'=>$nodes1,'nodes2'=>$nodes2,'nodes3'=>$nodes3,'nodes4'=>$nodes4]); 
        }
    }



