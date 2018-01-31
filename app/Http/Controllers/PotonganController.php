<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Potongan;
use App\Model\Pegawai;
use DB;
use carbon\Carbon;

class PotonganController extends Controller
{
    public function index()
    {
      $data['potongan'] = potongan::with('pegawai.gaji')->orderBy('created_at','DESC')->get();

      return view ('potongan/index',$data);
    }

    public function create()
    {
      $today = carbon::now()->format('m');
      $data['pegawai'] = DB::select( DB::raw("SELECT * FROM pegawais WHERE id not in (select pegawai_id from potongans where Month(created_at) = $today)") );

      return view ('potongan/create',$data);
    }

    public function save(Request $request)
    {
      $potongan = new Potongan();

      $potongan->pegawai_id	= $request->id;
      $potongan->no_rek     = $request->rek;
      $potongan->kpkb       = $request->kpkb;
      $potongan->bjb        = $request->bjb;
      $potongan->zakat      = $request->zakat;
      $potongan->dharma     = $request->dharma;
      $potongan->makmur     = $request->makmur;
      $potongan->total     = $request->total;
      $potongan->save();

      return redirect('/potongan');
    }

    public function edit($id)
    {
      $data['potongan'] = Potongan::find($id);

      return view('potongan/edit',$data);
    }

    public function update(Request $request, $id)
    {
      $potongan = Potongan::find($id);

      $potongan->no_rek     = $request->rek;
      $potongan->kpkb       = $request->kpkb;
      $potongan->bjb        = $request->bjb;
      $potongan->zakat      = $request->zakat;
      $potongan->dharma     = $request->dharma;
      $potongan->makmur     = $request->makmur;
      $potongan->total     = $request->total;
      $potongan->save();

      return redirect('/potongan');
    }

    public function print($id)
    {
      $data['potongan'] = Potongan::with('pegawai.gaji','pegawai.golongan','pegawai.jabatan')->where('id',$id)->first();

      return view('potongan/print',$data);
    }

    public function delete($id)
    {
      $potongan = Potongan::find($id);
      $potongan->delete();

      return redirect('/potongan');
    }
}
