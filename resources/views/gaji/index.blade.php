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
            <a href="/gaji/restore" class="btn btn-info pull-right"><i class="fa fa-refresh"></i> </a>
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
                        <a href="#" class="btn btn-warning btn-simple btn-xs" data-name="{{$item->pegawai->nama}}" data-url="/gaji/edit/{{$item->id}}" id="btn-edit"> <span class="fa fa-pencil"></span> </a>
                        <a href="#" class="btn btn-danger btn-simple btn-xs" id="btn-delete" data-name="{{$item->pegawai->nama}}" data-url="/gaji/hapus/{{$item->id}}"> <span class="fa fa-trash"></span> </a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>

              </table>
          </div>
        </div>
@endsection

@section('js')
<script type="text/javascript">
  $(document).ready(function(){

    $('#example1').on('click','.btn-danger',function () {
    // $(".btn-danger").click(function(){
        var nama = $(this).data('name');
        var url = $(this).data('url');
        swal({
          title: "Are you sure?",
          text: "Anda akan menghapus data milik "+nama+"!",
          icon: "error",
          buttons: ["Batal", "Hapus!"],
          dangerMode :true,
        })
        .then((willDelete) => {
          if (willDelete) {
            location.replace(url);
          }
        });
    });

    $('#example1').on('click','.btn-warning',function () {

     // $(".btn-warning").click(function(){
        var nama = $(this).data('name');
        var url = $(this).data('url');
        swal({
          title: "Are you sure?",
          text: "Anda akan merubah data milik "+nama+"!",
          icon: "info",
          buttons: ["Batal", "Ubah!"],
          dangerMode :true,
        })
        .then((edit) => {
          if (edit) {
            location.replace(url);
          }
        });
    });

  });
</script>
@endsection
