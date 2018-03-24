@extends('layouts.master')

@section('title')
Dashboard
@endsection

@section('content')
  <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-aqua"><i class="fa fa-group"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Jumlah Pegawai</span>
                <span class="info-box-number">{{$pegawai}} Orang</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-red"><i class="fa fa-money"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Gaji Pokok <br> Seluruh Pegawai </span>
                <span class="info-box-number">Rp. {{number_format($gaji_pokok)}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix visible-sm-block"></div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-green"><i class="fa fa-tasks"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Pegawai Sudah Di <br> Gaji Bulan ini</span>
                <span class="info-box-number">{{$potongan}} Orang</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-yellow"><i class="fa fa-money"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Gaji Yang <br>Sudah Dibayarkan</span>
                <span class="info-box-number">Rp.{{number_format($bayar)}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="box" style="height:500px">
              <div class="box-header with-border">
                <h4>5 Data Potongan Gaji Terbaru</h4>
              </div>
              <div class="box-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th width="30%">Nama</th>
                        <th width="10%">Golongan</th>
                        <th width="20%">Jabatan</th>
                        <th width="30%">Total dibayarkan</th>
                      </tr>
                    </thead>

                    <tbody>
                      @foreach ($potongan_gaji as $value)
                        <tr>
                          <td>{{$value->pegawai->nama}}</td>
                          <td>{{$value->pegawai->golongan->nama}}</td>
                          <td>{{$value->pegawai->Jabatan->nama}}</td>
                          <td>Rp. {{number_format($value->total)}}</td>
                        </tr>
                      @endforeach
                    </tbody>


                  </table>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="box" style="height:500px">
              <div class="box-header with-border">
                <h4>5 Data Gaji Pokok Pegawai Terbaru</h4>
              </div>
              <div class="box-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th width="30%">Nama</th>
                        <th width="10%">Golongan</th>
                        <th width="20%">Jabatan</th>
                        <th width="30%">Gaji Pokok</th>
                      </tr>
                    </thead>

                    <tbody>
                      @foreach ($data_gaji as $value)
                        <tr>
                          <td>{{$value->pegawai->nama}}</td>
                          <td>{{$value->pegawai->golongan->nama}}</td>
                          <td>{{$value->pegawai->jabatan->nama}}</td>
                          <td>Rp.{{number_format($value->gaji)}}</td>
                        </tr>
                      @endforeach
                    </tbody>


                  </table>
                </div>
              </div>
            </div>
          </div>

        </div>

        <!-- /.row -->

@endsection
