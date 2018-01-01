<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Golongan;
use App\Model\Jabatan;
use App\Model\Pegawai;

class PegawaiController extends Controller
{
    public function index()
    {
      $data['p'] = pegawai::with('jabatan','golongan')->get();
      return view('/pegawai/index',$data);
    }

    public function create()
    {
      $data['g'] = golongan::all();
      $data['j'] = jabatan::all();

      return view('/pegawai/create',$data);
    }

    public function save(Request $req)
    {
      $p = new Pegawai;
      $p->nip = $req->nip;
      $p->nama = $req->nama;
      $p->alamat = $req->alamat;
      $p->jk = $req->jk;
      $p->agama = $req->agama;
      $p->no_tlp = $req->no_tlp;
      $p->jabatan_id = $req->jabatan;
      $p->golongan_id = $req->golongan;

      $p->save();

      return redirect('/pegawai');
    }

    public function edit($id)
    {
      $data['p'] = pegawai::find($id);
      $data['g'] = golongan::all();
      $data['j'] = jabatan::all();


      return view('/pegawai/edit',$data);
    }

    public function update(Request $req,$id)
    {
      $p = pegawai::find($id);
      $p->nip = $req->nip;
      $p->nama = $req->nama;
      $p->alamat = $req->alamat;
      $p->jk = $req->jk;
      $p->agama = $req->agama;
      $p->no_tlp = $req->no_tlp;
      $p->jabatan_id = $req->jabatan;
      $p->golongan_id = $req->golongan;

      $p->save();

      return redirect('/pegawai');
    }


    public function delete($id)
    {
      $p = pegawai::find($id);
      $p->delete();

      return back();
    }

    public function search($nip)
    {
      $data = Pegawai::with('golongan')->where('nip',$nip)->first();

      return json_encode($data);
    }
}
