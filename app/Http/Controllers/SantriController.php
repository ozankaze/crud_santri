<?php

namespace App\Http\Controllers;

use App\Santri;
use Illuminate\Http\Request;

class SantriController extends Controller
{
  public function index()
  {
    $santris = Santri::all();

    return view('santri.index', compact('santris'));
  }

  public function create()
  {
    return view('santri.create');
  }

  public function store(Request $request)
  {
    // this is for validation
    $request->validate([
      'nama' => 'required',
      'umur' => 'required|integer',
      'alamat' => 'required',
      'jenis_kelamin' => 'required'
    ]);

    // dd($request->all());

    /* cara ke 1 */
    /* $nama = $request->nama;
    $umur = $request->umur;
    $alamat = $request->alamat;
    $jenis_kelamin = $request->jenis_kelamin;

    Santri::create([
      'nama' => $nama,
      'umur' => $umur,
      'alamat' => $alamat,
      'jenis_kelamin' => $jenis_kelamin
    ]); */

    /* cara ke 2 */
    /* $data['nama'] = $request->nama;
    $data['umur'] = $request->umur;
    $data['alamat'] = $request->alamat;
    $data['jenis_kelamin'] = $request->jenis_kelamin;

    Santri::create($data); */

    /* cara ke 3 */
    Santri::create($request->all());

    // Santri::create($request->all());

    // return view('santri.create');
    // return view('santri.create');
    return redirect()->route('santri.index');
  }

  public function show($id)
  {
    $santris = Santri::findOrFail($id);

    // dd($santri);

    return view('santri.show', compact('santris'));
  }

  public function edit($id)
  {
    $santris = Santri::findOrFail($id);

    return view('santri.edit', compact('santris'));
  }

  public function update(Request $request, $id)
  {
    $santris = Santri::findOrFail($id);

    $santris->nama = $request->nama;
    $santris->umur = $request->umur;
    $santris->alamat = $request->alamat;
    $santris->jenis_kelamin = $request->jenis_kelamin;
    $santris->save();

    return redirect()->route('santri.index');
    
  }
}
