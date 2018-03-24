@extends('layouts.master')

@section('title')
  Kelola Data Potongan Gaji
@endsection

@section('content')
  <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Tabel Potongan Gaji</h3>
          </div>
          <div class="box-body">
            <a href="/potongan/create" class="btn btn-success"> <span class="fa fa-plus"> Tambah Data Potongan Gaji</span></a>
            <a href="/potongan/restore" class="btn btn-info pull-right"><i class="fa fa-refresh"></i> </a>
            <hr>
            <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th width="1%" rowspan="2">No</th>
                    <th width="15%" rowspan="2">Nama</th>
                    <th width="10%" rowspan="2">No. Rek</th>
                    <th rowspan="2">GAJI NETO</th>
                    <th colspan="5"><center>Potongan</center></th>
                    <th rowspan="2">Jumlah Yang Dibayarkan</th>
                    <th rowspan="2">Tanggal Gajian</th>
                    <th rowspan="2">Aksi</th>
                  </tr>
                  <tr>
                    <th>KPKB</th>
                    {{-- <th>BJB</th> --}}
                    <th>2,5% Zakat Profesi</th>
                    <th>Dharma Wanita</th>
                    <th>Sumber Makmur</th>
                    <th>Jumlah Potongan</th>
                  </tr>
                  </tr>
                  </thead>
                  @php
                    $no=1;
                  @endphp
                  <tbody>
                    @foreach ($potongan as $key)
                    <tr>
                      <td>{{$no++}}</td>
                      <td>{{$key->pegawai->nama}}</td>
                      <td>{{$key->no_rek}}</td>
                      <td>Rp {{number_format($key->pegawai->gaji->gaji)}}</td>
                      <td>Rp {{number_format($key->kpkb)}}</td>
                      {{-- <td>Rp {{number_format($key->bjb)}}</td> --}}
                      <td>Rp {{number_format($key->zakat)}}</td>
                      <td>Rp {{number_format($key->dharma)}}</td>
                      <td>Rp {{number_format($key->makmur)}}</td>
                      <td>Rp
                        {{number_format($key->kpkb+$key->bjb+$key->zakat+$key->dharma+$key->makmur)}}
                      </td>
                      <td>Rp {{number_format($key->pegawai->gaji->gaji-($key->kpkb+$key->bjb+$key->zakat+$key->dharma+$key->makmur))}}</td>
                      <td>{{$key->created_at}}</td>
                      <td>
                        <a href="#" class="btn btn-warning btn-simple btn-xs" id="btn-edit" data-name="{{$key->pegawai->nama}}" data-url="/potongan/edit/{{$key->id}}"> <span class="fa fa-pencil"></span> </a>
                        <a href="#" class="btn btn-danger btn-simple btn-xs" id="btn-delete" data-name="{{$key->pegawai->nama}}" data-url="/potongan/hapus/{{$key->id}}"> <span class="fa fa-trash"></span> </a>
                        <a href="#" class="btn btn-info btn-simple btn-xs" id="btn-print" data-name="{{$key->pegawai->nama}}" data-url="/potongan/print/{{$key->id}}"> <span class="fa fa-print"></span> </a>
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

    // $(".btn-info").click(function(){
    $('#example1').on('click','.btn-info',function () {
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

    // $(".btn-danger").click(function(){
      $('#example1').on('click','.btn-danger',function () {

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

     // $(".btn-warning").click(function(){
     $('#example1').on('click','.btn-warning',function () {

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
