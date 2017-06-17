<?php 

namespace App\Http\Controllers;

use DB;
use App\Lap_kehilangan;
use App\Daerah_rawan;

use Illuminate\Http\Requests;

use App\Http\Requests\Lap_kehilanganRequest;

class Lap_kehilanganController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $search = \Request::get('search');
    $lapkehilangan = DB::table('lap_kehilangan')
                                ->leftJoin('daerah_rawan', 'lap_kehilangan.id_daerah', '=', 'daerah_rawan.id_daerah')
                                ->leftJoin('users', 'lap_kehilangan.id_pendaftaran', '=', 'users.id')
                                ->where('jenis_kendaraan','like', '%'.$search.'%')
                                ->orWhere('merk_kendaraan','like', '%'.$search.'%')
                                ->orWhere('warna_kendaraan','like', '%'.$search.'%')
                                ->orWhere('keterangan','like', '%'.$search.'%')
                                ->orWhere('users.name','like', '%'.$search.'%')
                                ->orWhere('daerah_rawan.nama','like', '%'.$search.'%')
                                ->get();

    // $lapkehilangan = DB::table('lap_kehilangan')
    //                     ->leftJoin('daerah_rawan', 'lap_kehilangan.id_daerah', '=', 'daerah_rawan.id_daerah')
    //                     ->leftJoin('users', 'lap_kehilangan.id_pendaftaran', '=', 'users.id')
    //                     ->get();
    return view('Lap_kehilangan.index', compact('lapkehilangan'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    $kehilangan = Lap_kehilangan::where('id_lap_kehilangan', true)->orderBy('id_lap_kehilangan')->get();
    $daerah = Daerah_rawan::pluck('nama', 'id_daerah');
    
    $currentMonth = date('m');
    $currentYear = date('Y');
    $thisMonth = DB::table('lap_kehilangan')->whereRaw('MONTH(tanggal_hilang) = ?', [$currentMonth])->get();
    $urut = count($thisMonth)+1;

    $nomorsurat = 'LPHK/'.$currentYear.'/'.$currentMonth.'/'.$urut;

    return view('lap_kehilangan.create', compact('id_lap_kehilangan', 'kehilangan', 'daerah', 'nomorsurat'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Lap_kehilanganRequest $request)
  {
    Lap_kehilangan::create($request->all());
    return redirect()->route('lap_kehilangan.index')->with('message', 'Laporan berhasil dimasukkan!');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show(Lap_kehilangan $lap_kehilangan)
  {
    //$filtered = $daerah->pluck('nama');
    $namadaerah = daerah_rawan::all();
    $daerah = Daerah_rawan::all('nama', 'id_daerah');
    
    $daerah->all();
    //dd($lap_kehilangan);
    //$idnya = \Route::get('id');
    //$namadaerah = DB::table('daerah_rawan')->whereRaw('id_daerah = ?', [$deskripsi])->get();
    return view('lap_kehilangan.show', compact('lap_kehilangan', 'daerah'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit(Lap_kehilangan $lap_kehilangan)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Lap_kehilanganRequest $request, Lap_kehilangan $lap_kehilangan)
  {
    
  }

  public function search()
  {
    $search = \Request::get('search'); //<-- we use global request to get the param of URI
 
    //$lap_kehilangan = Lap_kehilangan::where('name','like','%'.$search.'%')
    $lap_kehilangan = DB::table('lap_kehilangan')
                                ->where('jenis_kendaraan','like', '%'.$search.'%')
                                ->orWhere('merk_kendaraan','like', '%'.$search.'%')
                                ->orWhere('warna_kendaraan','like', '%'.$search.'%')
                                ->orWhere('keterangan','like', '%'.$search.'%')
                                ->get();
    return view('lap_kehilangan.index',compact('lap_kehilangan'));
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy(Lap_kehilangan $lap_kehilangan)
  {
    $lap_kehilangan->delete();
    return redirect()->route('lap_kehilangan.index')->with('message', 'Data daerah berhasil dihapus!');
  }
  
}

?>