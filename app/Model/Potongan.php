<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Potongan extends Model
{
  public function pegawai()
  {
      return $this->belongsTo('App\Model\Pegawai','pegawai_id');
  }

}
