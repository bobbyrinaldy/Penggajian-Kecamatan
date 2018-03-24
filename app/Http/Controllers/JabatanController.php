<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Jabatan;

class JabatanController extends Controller
{
    public function index()
    {
      $data['j'] = jabatan::all();

      return view('jabatan/index',$data);
    }

    public function create()
    {
      return view('jabatan/create');
    }

    public function save(Request $req)
    {
      $j = new Jabatan;

      $j->nama = $req->nama;
      $j->save();

      return redirect('/jabatan');
    }

    public function edit($id)
    {
      $data['j'] = jabatan::find($id);

      return view('jabatan/edit',$data);
    }

    public function update(Request $req,$id)
    {
      $j = jabatan::find($id);

      $j->nama = $req->nama;
      $j->save();

      return redirect('/jabatan');
    }

    public function delete($id)
    {
      $j = jabatan::find($id);
      $j->delete();

      return back();
    }

    public function restore()
    {
      $jabatan = Jabatan::onlyTrashed()
                ->restore();
      return back();
    }
}
