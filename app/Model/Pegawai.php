<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    public function golongan()
    {
        return $this->belongsTo('App\Model\Golongan','golongan_id');
    }

    public function gaji()
    {
        return $this->hasOne('App\Model\Gaji');
    }

    public function jabatan()
    {
        return $this->belongsTo('App\Model\Jabatan','jabatan_id');
    }
}
