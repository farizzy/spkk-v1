<?php 

namespace App\Http\Controllers;

use DB;
use App\Berita;
use App\Penemuan;
use Illuminate\Http\Requests;

use App\Http\Requests\BeritaRequest;

class Guest_beritaController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $news = Berita::orderBy('created_at', 'desc')->paginate(5);
    $pengambilan = DB::table('penemuan')
                        ->leftJoin('lap_kehilangan', 'penemuan.id_lap_kehilangan', '=', 'lap_kehilangan.id_lap_kehilangan')
                        ->where('status','=', 1)
                        ->get();
    return view('guest_berita.index', compact('news', 'pengambilan'));
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
  public function store(BeritaRequest $request)
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
  public function edit()
  {

  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update()
  {

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy()
  {

  }
  
}

?>