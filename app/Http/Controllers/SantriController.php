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
}
