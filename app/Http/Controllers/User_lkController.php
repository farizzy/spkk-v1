<?php 

namespace App\Http\Controllers;

use DB;
use App\Lap_kehilangan;
use App\Daerah_rawan;

use Illuminate\Http\Requests;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests\Lap_kehilanganRequest;

class user_lkController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $search = \Request::get('search');
    $namaorang = Auth::user()->name;
    $lapkehilangan = DB::table('lap_kehilangan')
                                ->leftJoin('daerah_rawan', 'lap_kehilangan.id_daerah', '=', 'daerah_rawan.id_daerah')
                                ->leftJoin('users', 'lap_kehilangan.id_pendaftaran', '=', 'users.id')
                                ->where('users.name', 'like', '%'.$namaorang.'%')
                                ->orWhere('jenis_kendaraan','like', '%'.$search.'%')
                                ->orWhere('merk_kendaraan','like', '%'.$search.'%')
                                ->orWhere('warna_kendaraan','like', '%'.$search.'%')
                                ->orWhere('keterangan','like', '%'.$search.'%')
                                //->orWhere('users.name','like', '%'.$search.'%')
                                ->orWhere('daerah_rawan.nama','like', '%'.$search.'%')
                                ->get();
                                dd($search);
    /*$lapkehilangan = DB::table('lap_kehilangan')
                        ->leftJoin('daerah_rawan', 'lap_kehilangan.id_daerah', '=', 'daerah_rawan.id_daerah')
                        ->leftJoin('users', 'lap_kehilangan.id_pendaftaran', '=', 'users.id')
                        ->get();*/
    return view('user_lk.index', compact('lapkehilangan'));
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

    return view('user_lk.create', compact('id_lap_kehilangan', 'kehilangan', 'daerah', 'nomorsurat'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Lap_kehilanganRequest $request)
  {
    Lap_kehilangan::create($request->all());
    return redirect()->route('user_lk.index')->with('message', 'Laporan berhasil dimasukkan!');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show(Lap_kehilangan $user_lk)
  {
    $namadaerah = daerah_rawan::all();
    $daerah = Daerah_rawan::all('nama', 'id_daerah');
    
    $daerah->all();
    return view('user_lk.show', compact('user_lk', 'daerah'));
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

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy(Lap_kehilangan $lap_kehilangan)
  {

  }
  
}

?>