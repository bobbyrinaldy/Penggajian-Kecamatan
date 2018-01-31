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
                        <a href="#" class="btn btn-warning btn-simple btn-xs" data-name="{{$item->nama}}" data-url="/pegawai/edit/{{$item->id}}"> <span class="fa fa-pencil"></span> </a>
                        <a href="#" class="btn btn-danger btn-simple btn-xs" data-name="{{$item->nama}}" data-url="/pegawai/hapus/{{$item->id}}"> <span class="fa fa-trash"></span> </a>
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
          text: "Anda akan menghapus data pegawai "+nama+"!",
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
          text: "Anda akan merubah data pegawai "+nama+"!",
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
