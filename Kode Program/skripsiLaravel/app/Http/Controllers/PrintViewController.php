<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use DB;
    use App\Http\Requests;
    use App\Http\Controllers\Controller;

    class PrintViewController extends Controller {
        public function index(){
			$tanah1 = DB::select
			    ('SELECT
				*
			      FROM
				tanah
			       ORDER BY
				waktu_sensing DESC
				LIMIT
				    30');
            
            return view('skripsi_perangkat',['tanah1'=>$tanah1]); 
        }
        
        public function cari(Request $request)
		{
			// menangkap data pencarian
			$cariAwal = $request->cariAwal;
			$cariAkhir = $request->cariAkhir;
	 
			// mengambil data dari table tanah sesuai pencarian data
			$tanah1 = DB::table('tanah')
			->where('waktu_sensing','>',$cariAwal)
			->where('waktu_sensing','<',$cariAkhir)
			->paginate();
	 
			// mengirim data pegawai ke view index
			return view('skripsi_perangkat',['tanah1' => $tanah1]);
	 
		}
		
	public function sortkode(){
	    $tanah1 = DB::select
			    ('SELECT
				*
			      FROM
				tanah
			       ORDER BY
				kode_petak ASC,waktu_sensing DESC
			    ');
				    
	    return view('skripsi_perangkat',['tanah1'=>$tanah1]);
	}
	    
    }



