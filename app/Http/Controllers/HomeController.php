<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Pegawai;
use App\Model\Gaji;
use App\User;
use App\Model\Potongan;
use carbon\carbon;
use Session;
use Hash;
use DB;

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

    public function saveChange(Request $req,$id)
    {
      $u = user::find($id);

      $oldPass = $req->old_password;
      $check = Hash::check($oldPass, $u->password);

      if ($req->password == '' || $req->password_confirmation == '') {
        Session::flash('new_pass', 'Password baru/Konfirmasi Password tidak boleh kosong');
        return back();

      }else if ($req->password != $req->password_confirmation){
        Session::flash('konfirmasi', 'Password Konfirmasi harus sama dengan Password baru');
        return back();

      }else{
        if ($check) {
          DB::table('users')
              ->where('id', $id)
              ->update(['password' => bcrypt($req->password)]);

          Session::flash('success', 'Password berhasil di ubah');
          return back();
        }else {
          Session::flash('fail', 'Password lama anda salah!');
          return back();
        }
      }
      
    }
}
