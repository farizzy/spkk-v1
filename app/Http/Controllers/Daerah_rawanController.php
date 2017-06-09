<?php 

namespace App\Http\Controllers;

use DB;
use App\Daerah_rawan;
use Illuminate\Http\Requests;

use App\Http\Requests\Daerah_rawanRequest;

class Daerah_rawanController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $daerahrawan = Daerah_rawan::all();
    return view('Daerah_rawan.index', compact('daerahrawan'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    $daerah = Daerah_rawan::where('nama', true)->orderBy('nama')->get();
    //$daerah = Daerah_rawan::pluck('nama', 'id_daerah');

    return view('daerah_rawan.create', compact('nama', 'daerah'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Daerah_rawanRequest $request)
  {
    Daerah_rawan::create($request->all());
    return redirect()->route('daerah_rawan.index')->with('message', 'Daerah berhasil ditambahkan!');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show(Daerah_rawan $daerah_rawan)
  {
    return view('daerah_rawan.show', compact('daerah_rawan'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit(Daerah_rawan $daerah_rawan)
  {
    return view('daerah_rawan.edit', compact('daerah_rawan'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Daerah_rawanRequest $request, Daerah_rawan $daerah_rawan)
  {
    $daerah_rawan->update($request->all());
    return redirect()->route('daerah_rawan.index')->with('message', 'Data daerah berhasil diubah!');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy(Daerah_rawan $daerah_rawan)
  {
    $daerah_rawan->delete();
    return redirect()->route('daerah_rawan.index')->with('message', 'Data daerah berhasil dihapus!');
  }
  
}

?>