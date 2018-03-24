<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Potongan extends Model
{

  use SoftDeletes;

  public function pegawai()
  {
      return $this->belongsTo('App\Model\Pegawai','pegawai_id');
  }

}
