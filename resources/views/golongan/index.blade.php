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
            <a href="/golongan/restore" class="btn btn-info pull-right"><i class="fa fa-refresh"></i> </a>

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
                        <a href="#" class="btn btn-warning btn-simple btn-xs" data-name="{{$item->nama}}" data-url="/golongan/edit/{{$item->id}}"> <span class="fa fa-pencil"></span> </a>
                        <a href="#" class="btn btn-danger btn-simple btn-xs" data-name="{{$item->nama}}" data-url="/golongan/hapus/{{$item->id}}"> <span class="fa fa-trash"></span> </a>
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

    // $(".btn-danger").click(function(){
    $('#example1').on('click','.btn-danger',function () {
        var nama = $(this).data('name');
        var url = $(this).data('url');
        swal({
          title: "Are you sure?",
          text: "Anda akan menghapus data golongan "+nama+"!",
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

     // $(".btn-warning").click(function(){
     $('#example1').on('click','.btn-warning',function () {
        var nama = $(this).data('name');
        var url = $(this).data('url');
        swal({
          title: "Are you sure?",
          text: "Anda akan merubah data golongan "+nama+"!",
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
