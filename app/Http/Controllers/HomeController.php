<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Pegawai;
use App\Model\Gaji;
use App\Model\Potongan;
use carbon\carbon;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['pegawai'] = Pegawai::all()->count();
        $data['gaji_pokok'] = gaji::all()->sum('gaji');

        $now = Carbon::now();
        $month = $now->format('m');
        $data['potongan'] = potongan::with('pegawai.gaji')->whereMonth('created_at',$month)->orderBy('created_at','DESC')->count();
        $data['bayar'] = potongan::with('pegawai.gaji')->whereMonth('created_at',$month)->orderBy('created_at','DESC')->pluck('total')->sum();

        $data['potongan_gaji'] = potongan::with('pegawai.gaji')->whereMonth('created_at',$month)->orderBy('created_at','DESC')->get();
        $data['data_gaji'] = gaji::with('pegawai')->orderBy('created_at','desc')->get()->take(5);

        return view('index',$data);
    }
}
