<?php 

namespace App\Http\Controllers;

use DB;
use App\Berita;
use Illuminate\Http\Requests;
use Illuminate\Support\Facades\Input;

use App\Http\Requests\BeritaRequest;

class BeritaController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $news = Berita::orderBy('created_at', 'desc')->paginate(5);
    return view('berita.index', compact('news'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    $berita = Berita::where('judul', true)->orderBy('created_at', 'asc')->get();

    return view('berita.create', compact('berita'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(BeritaRequest $request)
  {
    $berita = new berita;

    $berita->title = Input::get('name');
    if (Input::hasFile('image')) {
      $file = Input::file('image');
      $file->move(public_path(). '/', $file->getClientOriginalName());

      $berita->judul = $request->judul;
      $berita->isi = $request->isi;
      $berita->title = $file->getClientOriginalName();
      $berita->size = $file->getClientsize();
      $berita->type = $file->getClientMimeType();
    }
    $berita->save();

    //Berita::create($request->all());
    return redirect()->route('berita.index')->with('message', 'Berita berhasil ditambahkan!');
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
  public function edit(Berita $berita)
  {
    return view('berita.edit', compact('berita'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(BeritaRequest $request, Berita $berita)
  {
    $berita->update($request->all());
    return redirect()->route('berita.index')->with('message', 'Data daerah berhasil diubah!');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy(Berita $berita)
  {
    $berita->delete();
    return redirect()->route('berita.index')->with('message', 'Berita berhasil dihapus!');
  }
  
}

?>