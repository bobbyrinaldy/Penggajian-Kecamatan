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
            <a href="/golongan/create" class="btn btn-success"> <span class="fa fa-plus"> Tambah Data Golongan</span></a>
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
                  @php
                    $no=1;
                  @endphp

                  @foreach ($g as $item)
                    <tr>
                      <td>{{$no++}}</td>
                      <td>{{$item->nama}}</td>
                      <td>
                        <a href="/golongan/edit/{{$item->id}}" class="btn btn-warning btn-simple btn-xs"> <span class="fa fa-pencil"></span> </a>
                        <a href="/golongan/hapus/{{$item->id}}" class="btn btn-danger btn-simple btn-xs"> <span class="fa fa-trash"></span> </a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>

              </table>
          </div>
        </div>
@endsection
