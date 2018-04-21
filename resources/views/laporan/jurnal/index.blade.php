@extends('layouts.master')

@section('title')
  Laporan Jurnal Periode {{date('F Y')}}
@endsection

@section('content')
  <div class="box">
          <div class="box-header with-border">
            <a href="/laporan/jurnal/print" class="btn btn-success" target="_blank"><span class="fa fa-print"> Print Jurnal</span></a>
            <hr>
            <p>Gaji Belum Dibayarkan</p>
            <p>Tanggal : <b>{{date('28 F Y', strtotime('-1 months'))}}</b></p>
          </div>
          <div class="box-body">
            {{-- <a href="/potongan/create" class="btn btn-success"> <span class="fa fa-plus"> Tambah Data Potongan Gaji</span></a> --}}
            {{-- <hr> --}}
            <div class="table-responsive">
              <table class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th width="30%">Keterangan</th>
                    <th width="30%">Debit</th>
                    <th width="30%">Kredit</th>
                  </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td>Beban Gaji</td>
                      <td>Rp.{{number_format($gaji-$potongan)}}</td>
                      <td>-</td>
                    </tr>

                    <tr>
                      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hutang Gaji</td>
                      <td>-</td>
                      <td>Rp.{{number_format($gaji-$potongan)}}</td>
                    </tr>
                  </tbody>

                </table>
            </div>
          </div>
        </div>

        <div class="box">
                <div class="box-header with-border">
                  <p>Gaji Sudah Dibayarkan</p>
                  <p>Tanggal : <b>{{date('2 F Y')}}</b></p>
                </div>
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th width="30%">Keterangan</th>
                          <th width="30%">Debit</th>
                          <th width="30%">Kredit</th>
                        </tr>
                        </thead>

                        <tbody>
                          <tr>
                            <td>Hutang Gaji</td>
                            {{-- <td>Rp.{{number_format($potongan)}}</td> --}}
                            <td>Rp.{{number_format($gaji-$potongan)}}</td>
                            <td>-</td>
                          </tr>

                          <tr>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kas</td>
                            <td>-</td>
                            {{-- <td>Rp.{{number_format($potongan)}}</td> --}}
                            <td>Rp.{{number_format($gaji-$potongan)}}</td>
                          </tr>
                        </tbody>

                      </table>
                  </div>
                </div>
              </div>
@endsection
