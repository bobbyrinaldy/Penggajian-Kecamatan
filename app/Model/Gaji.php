<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Gaji extends Model
{
    public function pegawai()
    {
        return $this->belongsTo('App\Model\Pegawai');
    }
}
