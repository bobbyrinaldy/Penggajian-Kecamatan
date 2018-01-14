@extends('layouts.master')

@section('title')
  Kelola Data Potongan Gaji
@endsection

@section('content')
  <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Tabel Potongan Gaji</h3>
          </div>
          <div class="box-body">
            <a href="/potongan/create" class="btn btn-success"> <span class="fa fa-plus"> Tambah Data Potongan Gaji</span></a>
            <hr>
            <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th width="1%" rowspan="2">No</th>
                    <th width="15%" rowspan="2">Nama</th>
                    <th width="10%" rowspan="2">No. Rek</th>
                    <th rowspan="2">GAJI NETO</th>
                    <th colspan="5"><center>Potongan</center></th>
                    <th rowspan="2">Jumlah Yang Dibayarkan</th>
                    <th rowspan="2">Aksi</th>
                  </tr>
                  <tr>
                    <th>KPKB</th>
                    {{-- <th>BJB</th> --}}
                    <th>2,5% Zakat Profesi</th>
                    <th>Dharma Wanita</th>
                    <th>Sumber Makmur</th>
                    <th>Jumlah Potongan</th>
                  </tr>
                  </tr>
                  </thead>
                  @php
                    $no=1;
                  @endphp
                  <tbody>
                    @foreach ($potongan as $key)
                    <tr>
                      <td>{{$no++}}</td>
                      <td>{{$key->pegawai->nama}}</td>
                      <td>{{$key->no_rek}}</td>
                      <td>Rp {{number_format($key->pegawai->gaji->gaji)}}</td>
                      <td>Rp {{number_format($key->kpkb)}}</td>
                      {{-- <td>Rp {{number_format($key->bjb)}}</td> --}}
                      <td>Rp {{number_format($key->zakat)}}</td>
                      <td>Rp {{number_format($key->dharma)}}</td>
                      <td>Rp {{number_format($key->makmur)}}</td>
                      <td>Rp
                        {{number_format($key->kpkb+$key->bjb+$key->zakat+$key->dharma+$key->makmur)}}
                      </td>
                      <td>Rp {{number_format($key->pegawai->gaji->gaji-($key->kpkb+$key->bjb+$key->zakat+$key->dharma+$key->makmur))}}</td>
                      <td>
                        <a href="/potongan/edit/{{$key->id}}" class="btn btn-warning btn-simple btn-xs"> <span class="fa fa-pencil"></span> </a>
                        <a href="/potongan/hapus/{{$key->id}}" class="btn btn-danger btn-simple btn-xs"> <span class="fa fa-trash"></span> </a>
                        <a href="/potongan/print/{{$key->id}}" class="btn btn-info btn-simple btn-xs"> <span class="fa fa-print"></span> </a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>

                </table>
            </div>
          </div>
        </div>
@endsection
