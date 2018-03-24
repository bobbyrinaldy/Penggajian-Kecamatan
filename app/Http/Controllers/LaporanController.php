<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Potongan;
use App\Model\Gaji;
use Carbon\Carbon;

class LaporanController extends Controller
{
    public function indexTerimaGaji()
    {
      $now = Carbon::now();
      $month = $now->format('m');
      $data['potongan'] = potongan::with('pegawai.gaji')->whereMonth('created_at',$month)->orderBy('created_at','DESC')->get();

      return view('laporan/penerima_gaji/index',$data);
    }

    public function indexGajiBulanan()
    {
      $now = Carbon::now();
      $month = $now->format('m');
      $data['potongan'] = potongan::with('pegawai.gaji')->whereMonth('created_at',$month)->orderBy('created_at','DESC')->get();

      return view('laporan/gaji_bulanan/index',$data);
    }

    public function indexJurnal()
    {
      $data['gaji'] = Gaji::all()->sum('gaji');
      $now = Carbon::now();
      $month = $now->format('m');
      $data['potongan'] = potongan::with('pegawai.gaji')->whereMonth('created_at',$month)->orderBy('created_at','DESC')->pluck('total')->sum();
      // dd($data['potongan']);

      // dd($data['gaji']);
      return view('laporan/jurnal/index',$data);
    }

    public function printJurnal()
    {
      $data['gaji'] = Gaji::all()->sum('gaji');
      $now = Carbon::now();
      $month = $now->format('m');
      $data['potongan'] = potongan::with('pegawai.gaji')->whereMonth('created_at',$month)->orderBy('created_at','DESC')->pluck('total')->sum();
      // dd($data['potongan']);

      // dd($data['gaji']);
      return view('laporan/jurnal/print',$data);
    }
}
