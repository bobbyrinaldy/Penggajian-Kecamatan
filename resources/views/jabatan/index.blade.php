@extends('layouts.master')

@section('title')
  Kelola Data Jabatan
@endsection

@section('content')
  <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Tabel Jabatan</h3>
          </div>
          <div class="box-body">
            <a href="/jabatan/create" class="btn btn-success"> <span class="fa fa-plus"> Tambah Data Jabatan</span></a>
            <a href="/jabatan/restore" class="btn btn-info pull-right"><i class="fa fa-refresh"></i> </a>
            <hr>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Jabatan</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @php
                    $no=1;
                  @endphp

                  @foreach ($j as $item)
                    <tr>
                      <td>{{$no++}}</td>
                      <td>{{$item->nama}}</td>
                      <td>
                        <a href="#" class="btn btn-warning btn-simple btn-xs" data-name="{{$item->nama}}" data-url="/jabatan/edit/{{$item->id}}"> <span class="fa fa-pencil"></span> </a>
                        <a href="#" class="btn btn-danger btn-simple btn-xs" data-name="{{$item->nama}}" data-url="/jabatan/hapus/{{$item->id}}"> <span class="fa fa-trash"></span> </a>
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
        var nama = $(this).data('name');
        var url = $(this).data('url');
        swal({
          title: "Are you sure?",
          text: "Anda akan menghapus data jabatan "+nama+"!",
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
        var nama = $(this).data('name');
        var url = $(this).data('url');
        swal({
          title: "Are you sure?",
          text: "Anda akan merubah data jabatan "+nama+"!",
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
