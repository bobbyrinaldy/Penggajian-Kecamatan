@extends('layouts.master')

@section('title')
  Laporan Penerima Gaji Bulan {{date('F Y')}}
@endsection

@section('content')
  <div class="box">
          <div class="box-header with-border">
          </div>
          <div class="box-body">
            {{-- <a href="/potongan/create" class="btn btn-success"> <span class="fa fa-plus"> Tambah Data Potongan Gaji</span></a> --}}
            {{-- <hr> --}}
            <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Golongan</th>
                    <th>Jabatan</th>
                    <th>Total Gaji</th>
                    <th>Tanggal Gajian</th>
                    <th>Slip Gaji</th>
                  </tr>
                  </thead>
                  @php
                    $no=1;
                  @endphp
                  <tbody>
                    @foreach ($potongan as $key)
                    <tr>
                      <td>{{$no++}}</td>
                      <td>{{$key->pegawai->nip}}</td>
                      <td>{{$key->pegawai->nama}}</td>
                      <td>{{$key->pegawai->golongan->nama}}</td>
                      <td>{{$key->pegawai->jabatan->nama}}</td>
                      <td>Rp. {{number_format($key->total)}}</td>
                      <td>{{$key->created_at}}</td>
                      <td>
                        {{-- <a href="#" class="btn btn-warning btn-simple btn-xs" id="btn-edit" data-name="{{$key->pegawai->nama}}" data-url="/potongan/edit/{{$key->id}}"> <span class="fa fa-pencil"></span> </a> --}}
                        {{-- <a href="#" class="btn btn-danger btn-simple btn-xs" id="btn-delete" data-name="{{$key->pegawai->nama}}" data-url="/potongan/hapus/{{$key->id}}"> <span class="fa fa-trash"></span> </a> --}}
                        <a href="#" class="btn btn-info btn-simple btn-xs" id="btn-print" data-name="{{$key->pegawai->nama}}" data-url="/potongan/print/{{$key->id}}"> <span class="fa fa-print"> Cetak Slip Gaji</span> </a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>

                </table>
            </div>
          </div>
        </div>
@endsection

@section('js')
<script type="text/javascript">
  $(document).ready(function(){

    $(".btn-info").click(function(){
        var nama = $(this).data('name');
        var url = $(this).data('url');
        swal({
          title: "Are you sure?",
          text: "Anda akan mencetak slip gaji milik "+nama+"!",
          icon: "info",
          buttons: ["Batal", "Print"],
        })
        .then((print) => {
          if (print) {
            window.open(url);
          }else{

          }
        });
    });

    $(".btn-danger").click(function(){
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

     $(".btn-warning").click(function(){
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
