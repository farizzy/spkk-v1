<?php 

namespace App\Http\Controllers;

use DB;
use App\Lap_kehilangan;
use App\Daerah_rawan;

use Illuminate\Http\Requests;

use App\Http\Requests\Lap_kehilanganRequest;

class guest_lkController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $lapkehilangan = DB::table('lap_kehilangan')
                        ->leftJoin('daerah_rawan', 'lap_kehilangan.id_daerah', '=', 'daerah_rawan.id_daerah')
                        ->leftJoin('users', 'lap_kehilangan.id_pendaftaran', '=', 'users.id')
                        ->get();
    return view('Guest_lk.index', compact('lapkehilangan'));
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
    Lap_kehilangan::create($request->all());

  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show(Lap_kehilangan $lap_kehilangan)
  {

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