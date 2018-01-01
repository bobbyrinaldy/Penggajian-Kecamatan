@extends('layouts.master')

@section('title')
  Kelola Data Gaji
@endsection

@section('content')
  <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Tabel Gaji Pegawai</h3>
          </div>
          <div class="box-body">
            <a href="/gaji/create" class="btn btn-success"> <span class="fa fa-plus"> Tambah Data Gaji Pegawai</span></a>
            <hr>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>NIP</th>
                  <th>Nama Pegawai</th>
                  <th>Golongan</th>
                  <th>Gaji Pokok</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @php
                    $no=1;
                  @endphp

                  @foreach ($gaji as $item)
                    <tr>
                      <td>{{$no++}}</td>
                      <td>{{$item->pegawai->nip}}</td>
                      <td>{{$item->pegawai->nama}}</td>
                      <td>{{$item->pegawai->golongan->nama}}</td>
                      <td>Rp. {{number_format($item->gaji)}}</td>
                      <td>
                        <a href="/gaji/edit/{{$item->id}}" class="btn btn-warning btn-simple btn-xs"> <span class="fa fa-pencil"></span> </a>
                        <a href="/gaji/hapus/{{$item->id}}" class="btn btn-danger btn-simple btn-xs"> <span class="fa fa-trash"></span> </a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>

              </table>
          </div>
        </div>
@endsection
