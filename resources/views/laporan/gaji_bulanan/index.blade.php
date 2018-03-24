@extends('layouts.master')

@section('title')
  <center> <img src="{{asset('assets/img/logo.png')}}" width="50px" alt=""> </center>
  <center> <b>Pemerintah Kota Bandung</b> </center>
  <center>Daftar Gaji Bulan {{date('F Y')}}</center>
  <h5>UNIT : KECAMATAN BANDUNG KULON</h5>
@endsection

@section('content')
  <div class="box">
          <div class="box-header with-border">
          </div>
          <div class="box-body">
            {{-- <a href="/potongan/create" class="btn btn-success"> <span class="fa fa-plus"> Tambah Data Potongan Gaji</span></a> --}}
            {{-- <hr> --}}
            <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped" >
                  <thead>
                  <tr>
                    <td width="5%">No</td>
                    <td>Data Pegawai</td>
                    <td width="20%">Jabatan</td>
                    <td>Gaji Pokok</td>
                    <td>Jumlah Potongan</td>
                    <td>Pengasilan Bersih</td>
                  </tr>
                  </thead>
                  @php
                    $no=1;
                  @endphp
                  <tbody>
                    @if ($potongan)
                      @foreach ($potongan as $key)
                        <tr>
                          <td>{{$no++}}</td>
                          <td>
                            {{$key->pegawai->nama}}<br>
                            {{$key->pegawai->nip}}<br>
                            {{$key->pegawai->golongan->nama}}
                          </td>
                          <td>{{$key->pegawai->jabatan->nama}}</td>
                          <td>
                            Rp. {{number_format($key->pegawai->gaji->gaji)}}
                            @php
                            $gaji_pokok[] = $key->pegawai->gaji->gaji;
                            $total_gaji_pokok = array_sum($gaji_pokok);
                            @endphp
                          </td>
                          <td>
                            Rp.
                            {{number_format($key->kpkb+$key->bjb+$key->zakat+$key->dharma+$key->makmur)}}
                            @php
                            $jml_potongan[] = $key->kpkb+$key->bjb+$key->zakat+$key->dharma+$key->makmur;
                            $total_potongan = array_sum($jml_potongan);

                            @endphp
                          </td>
                          <td>
                            Rp. {{number_format($key->total)}}
                            @php
                            $gaji_bersih[] = $key->total;
                            $total_gaji_bersih = array_sum($gaji_bersih);
                            @endphp
                          </td>

                        </tr>
                      @endforeach
                    @endif
                  </tbody>

                  <tfoot>
                      <tr>
                        <th colspan="3">Total</th>
                        <th>Rp. {{number_format(@$total_gaji_pokok)}}</th>
                        <th>Rp. {{number_format(@$total_potongan)}}</th>
                        <th>Rp. {{number_format(@$total_gaji_bersih)}}</th>
                      </tr>


                  </tfoot>

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
