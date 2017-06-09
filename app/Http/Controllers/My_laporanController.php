<?php 

namespace App\Http\Controllers;

use DB;
use App\Lap_kehilangan;
use App\Daerah_rawan;

use Illuminate\Http\Requests;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests\Lap_kehilanganRequest;

class My_laporanController extends Controller 
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
                                ->get();
    /*$lapkehilangan = DB::table('lap_kehilangan')
                        ->leftJoin('daerah_rawan', 'lap_kehilangan.id_daerah', '=', 'daerah_rawan.id_daerah')
                        ->leftJoin('users', 'lap_kehilangan.id_pendaftaran', '=', 'users.id')
                        ->get();*/
    return view('my_laporan.index', compact('lapkehilangan'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {

  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Lap_kehilanganRequest $request)
  {

  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show(Lap_kehilangan $my_laporan)
  {
    $namadaerah = daerah_rawan::all();
    $daerah = Daerah_rawan::all('nama', 'id_daerah');
    
    $daerah->all();
    return view('my_laporan.show', compact('my_laporan', 'daerah'));
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