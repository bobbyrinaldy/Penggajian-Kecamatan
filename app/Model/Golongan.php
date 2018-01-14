<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Golongan extends Model
{
    public function pegawai()
    {
        return $this->belongsTo('App\Model\Pegawai','golongan_id');
    }
}
