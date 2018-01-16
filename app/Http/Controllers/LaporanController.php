<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Potongan;

class LaporanController extends Controller
{
    public function indexSlip()
    {
      $data['potongan'] = potongan::with('pegawai.gaji')->orderBy('created_at','DESC')->get();

      return view('laporan/slip_gaji/index',$data);
    }
}
