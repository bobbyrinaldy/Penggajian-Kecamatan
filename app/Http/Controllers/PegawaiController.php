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
      $data['p'] = pegawai::all();
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
      $p->golongan_id = $req->golongan;
      $p->jabatan_id = $req->jabatan;
      $p->gaji_pokok = $req->gaji;

      $p->save();

      return redirect('/pegawai');
    }
}
