<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    public function pegawai()
    {
        return $this->belongsTo('App\Model\Pegawai','jabatan_id');
    }
}
