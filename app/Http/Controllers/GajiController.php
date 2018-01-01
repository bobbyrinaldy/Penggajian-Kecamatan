<?php

namespace App\Http\Controllers;

use App\Model\Gaji;
use App\Model\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GajiController extends Controller
{
    public function index()
    {
    	$data['gaji'] = Gaji::with('pegawai.golongan')->get();
    	return view('gaji.index',$data);
    }

    public function create()
    {
    	$data['pegawai'] = Pegawai::whereNotExists(function($query)
            {
                $query->select(DB::raw(1))
                      ->from('gajis')
                      ->whereRaw('pegawais.id = gajis.pegawai_id');
            })
            ->get();
      

    	return view('gaji.create',$data);
    }

    public function save(Request $req)
    {
    	$money = str_replace('.', '', $req->gaji );
    	
    	$gaji = new Gaji;
    	$gaji->pegawai_id = $req->id;
    	$gaji->gaji = $money;
    	$gaji->save();

    	return redirect('/gaji');
    }

    public function edit($id)
    {
    	$data['gaji'] = Gaji::with('pegawai.golongan')->where('id',$id)->first();
    	$data['pegawai'] = Pegawai::whereNotExists(function($query)
            {
                $query->select(DB::raw(1))
                      ->from('gajis')
                      ->whereRaw('pegawais.id = gajis.pegawai_id');
            })
            ->get();

    	return view('gaji.edit',$data);
    }

    public function update(Request $req,$id)
    {
    	$gaji = Gaji::find($id);

    	$money = str_replace('.', '', $req->gaji );
    	
    	$gaji->pegawai_id = $req->id;
    	$gaji->gaji = $money;
    	$gaji->save();

    	return redirect('/gaji');
    }

    public function delete($id)
    {
    	$g = Gaji::find($id);

    	$g->delete();
    	return back();
    }

}
