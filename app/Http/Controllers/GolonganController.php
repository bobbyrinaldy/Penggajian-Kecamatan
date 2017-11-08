<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Golongan;

class GolonganController extends Controller
{
    public function index()
    {
      $data['g'] = golongan::all();
      return view('golongan/index',$data);
    }

    public function create()
    {
      return view('golongan/create');
    }

    public function save(Request $req)
    {
      $g = new golongan;
      $g->nama = $req->nama;
      $g->save();

      return redirect('/golongan');
    }

    public function edit($id)
    {
      $data['g'] = golongan::find($id);

      return view('golongan/edit',$data);
    }

    public function update(Request $req,$id)
    {
      $g = golongan::find($id);
      $g->nama = $req->nama;
      $g->save();

      return redirect('/golongan');
    }

    public function delete($id)
    {
      $g = golongan::find($id);
      $g->delete();

      return back();
    }
}
