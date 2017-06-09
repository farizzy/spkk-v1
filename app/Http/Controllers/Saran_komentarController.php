<?php 

namespace App\Http\Controllers;

use App\Saran_komentar;

use Illuminate\Http\Request;
use App\Http\Requests\Saran_komentarRequest;

use DB;
use Illuminate\Support\Facades\Redirect;


class Saran_komentarController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    
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
  public function store(Saran_komentarRequest $request)
  {
    Saran_komentar::create($request->all());
    return redirect()->route('lap_kehilangan.show');
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
  public function destroy($id)
  {
    
  }

  public function insertform(){
      return view('lap_kehilangan.show');
  }

  public function insert(Request $request){
      $komentar = $request->input('komentar');
      $idpengirim = $request->input('id_pendaftaran');
      $idlaporan = $request->input('id_lap_kehilangan');

      DB::insert('insert into saran_komentar (id_lap_kehilangan, id_pendaftaran, saran_komentar) values(?, ?, ?)', [$idlaporan, $idpengirim, $komentar]);
      return Redirect::back()->with('message','Operation Successful !');
   }
  
}

?>