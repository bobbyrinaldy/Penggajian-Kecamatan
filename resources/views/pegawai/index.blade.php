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
                
                </tbody>

              </table>
          </div>
        </div>
@endsection
