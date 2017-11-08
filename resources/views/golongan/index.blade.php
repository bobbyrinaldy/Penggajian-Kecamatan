@extends('layouts.master')

@section('title')
  Kelola Data Golongan
@endsection

@section('content')
  <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Tabel Golongan</h3>
          </div>
          <div class="box-body">
            <a href="/pegawai/create" class="btn btn-success"> <span class="fa fa-plus"> Tambah Data Golongan</span></a>
            <hr>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Golongan</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>

                </tbody>

              </table>
          </div>
        </div>
@endsection
