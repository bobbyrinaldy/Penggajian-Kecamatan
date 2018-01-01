<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    public function golongan()
    {
        return $this->hasOne('App\Model\Golongan','id');
    }

    public function jabatan()
    {
        return $this->hasOne('App\Model\Jabatan','id');
    }
}
