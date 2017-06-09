<?php 

namespace App\Http\Controllers;

use DB;
use App\Penemuan;
use App\Lap_kehilangan;

use Illuminate\Http\Requests;
use App\Http\Requests\PenemuanRequest;

class Guest_pkController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $ditemukan = DB::table('penemuan')
                        ->leftJoin('lap_kehilangan', 'penemuan.id_lap_kehilangan', '=', 'lap_kehilangan.id_lap_kehilangan')
                        ->get();

    return view('Guest_pk.index', compact('ditemukan'));
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
  public function store(PenemuanRequest $request)
  {

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
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy(Penemuan $penemuan)
  {

  }
  
}

?>