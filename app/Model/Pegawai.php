<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Pegawai extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

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
