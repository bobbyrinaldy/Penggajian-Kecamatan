@extends('layouts.master')

@section('title')
  Kelola Data Pegawai
@endsection

@section('content')
  <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Tabel Pegawai</h3>
          </div>
          <div class="box-body">
            <a href="/pegawai/create" class="btn btn-success"> <span class="fa fa-plus"> Tambah Data Pegawai</span></a>
            <hr>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>NIP</th>
                  <th>Nama</th>
                  <th>Golongan</th>
                  <th>Jabatan</th>
                  <th>Created At</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @php
                    $no=1;
                    // dd($p);
                  @endphp

                  @foreach ($p as $item)
                    <tr>
                      <td>{{$no++}}</td>
                      <td>{{$item->nip}}</td>
                      <td>{{$item->nama}}</td>
                      <td>{{$item->golongan->nama}}</td>
                      <td>{{$item->jabatan->nama}}</td>
                      <td>{{$item->created_at}}</td>
                      <td>
                        <a href="/pegawai/edit/{{$item->id}}" class="btn btn-warning btn-simple btn-xs"> <span class="fa fa-pencil"></span> </a>
                        <a href="/pegawai/hapus/{{$item->id}}" class="btn btn-danger btn-simple btn-xs"> <span class="fa fa-trash"></span> </a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>

              </table>
          </div>
        </div>
@endsection
