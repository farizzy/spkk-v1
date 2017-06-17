<?php 

namespace App\Http\Controllers;

use DB;
use App\Penemuan;
use App\Lap_kehilangan;

use Illuminate\Http\Requests;
use App\Http\Requests\PenemuanRequest;

class PenemuanController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $search = \Request::get('search');
    $ditemukan = DB::table('penemuan')
                        ->leftJoin('lap_kehilangan', 'penemuan.id_lap_kehilangan', '=', 'lap_kehilangan.id_lap_kehilangan')
                        ->where('no_polisi_temuan','like', '%'.$search.'%')
                        ->orWhere('jenis_temuan','like', '%'.$search.'%')
                        ->orWhere('merk_temuan','like', '%'.$search.'%')
                        ->orWhere('warna_temuan','like', '%'.$search.'%')
                        ->orWhere('no_mesin_temuan','like', '%'.$search.'%')
                        ->orWhere('deskripsi_temuan','like', '%'.$search.'%')
                        ->get();
    $hasil = count($ditemukan);

    //dd($hasil);
    
    if ($hasil == 0) {
      return view('Penemuan.index', compact('ditemukan', 'hasil'));
    } else {
      return view('Penemuan.index', compact('ditemukan', 'hasil'));
    }
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    $temu = Penemuan::where('id_penemuan', true)->orderBy('id_penemuan')->get();
    $listsurat = Lap_kehilangan::pluck('no_surat_hilang');
    $listnopol = Lap_kehilangan::pluck('no_polisi');

    $bersangkutan = Lap_kehilangan::pluck('no_surat_hilang', 'id_lap_kehilangan', 'no_polisi');

    $currentMonth = date('m');
    $currentYear = date('Y');
    $thisMonth = DB::table('penemuan')->whereRaw('MONTH(tanggal_temuan) = ?', [$currentMonth])->get();
    $urut = count($thisMonth)+1;

    $suratpenemuan = 'PK/'.$currentYear.'/'.$currentMonth.'/'.$urut;

    return view('penemuan.create', compact('id_penemuan', 'temu', 'suratpenemuan', 'bersangkutan', 'test'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(PenemuanRequest $request)
  {
    Penemuan::create($request->all());
    return redirect()->route('penemuan.index')->with('message', 'Laporan penemuan berhasil dimasukkan!');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit(Penemuan $penemuan)
  {
    return view('penemuan.edit', compact('penemuan'));
    /*$data = $request->input('id_penemuan');
      
    $id_ditemukan = $request->id_penemuan;
    Penemuan::where('id_penemuan', $id_ditemukan)
      ->update(['status' => 1]);*/
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(PenemuanRequest $request, Penemuan $penemuan)
  {
    $id_diambil = $penemuan->id_penemuan;
    //dd($id_diambil);
    Penemuan::where('id_penemuan', $id_diambil)
      ->update(['status' => 1]);
    return redirect()->route('penemuan.index')->with('message', 'Kendaraan telah diambil!');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy(Penemuan $penemuan)
  {
    $penemuan->delete();
    return redirect()->route('penemuan.index')->with('message', 'Data penemuan berhasil dihapus!');
  }
  
}

?>