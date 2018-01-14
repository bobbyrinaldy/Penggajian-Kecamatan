@extends('layouts.master')

@section('title')
  Form Edit Potongan Gaji
@endsection

@section('content')
  <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Horizontal Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="/potongan/update/{{$potongan->id}}" method="post">
              {{ csrf_field() }}
              <input type="hidden" name="_method" value="put">
              <div class="box-body">


                <div class="">

                  <div class="form-group">
                    <label for="nama" class="col-sm-2 control-label">Nama Pegawai</label>

                    <div class="col-sm-5">
                      <input type="hidden" name="id" class="form-control" value="{{$potongan->pegawai->id}}" readonly="yes" id="id">
                      <input type="hidden" name="nip" class="form-control" readonly="yes" value="{{$potongan->pegawai->nip}}" id="nip">
                      <input type="text" name="nama" class="form-control" readonly="yes" value='{{$potongan->pegawai->nama}}' id="nama">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="pokok" class="col-sm-2 control-label" >Gaji Pokok</label>
                    <div class="col-sm-5">
                      <input type="text" name="pokok" class="form-control" readonly='yes' value="{{$potongan->pegawai->gaji->gaji}}" id='pokok'>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="rek" class="col-sm-2 control-label" >No. Rek SES. BG KKN</label>
                    <div class="col-sm-5">
                      <input type="text" name="rek" class="form-control" value="{{$potongan->no_rek}}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="kpkb" class="col-sm-2 control-label" >KPKB</label>
                    <div class="col-sm-5">
                      <input type="text" name="kpkb" class="form-control" id='kpkb' value="{{$potongan->kpkb}}">
                    </div>
                  </div>

                  <div class="form-group">
                    {{-- <label for="bjb" class="col-sm-2 control-label" >BJB</label> --}}
                    <div class="col-sm-5">
                      <input type="hidden" name="bjb" class="form-control" id='bjb' value="{{$potongan->bjb}}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="zakat" class="col-sm-2 control-label" >Zakat</label>
                    <div class="col-sm-5">
                      <input type="text" name="zakat" class="form-control gaji" readonly='yes' value="{{$potongan->zakat}}" id='zakat'>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="dharma" class="col-sm-2 control-label" >Dharma Wanita</label>
                    <div class="col-sm-5">
                      <input type="text" name="dharma" class="form-control" id='golongan' value="{{$potongan->dharma}}" readonly='yes'>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="makmur" class="col-sm-2 control-label" >Sumber Makmur</label>
                    <div class="col-sm-5">
                      <input type="text" name="makmur" class="form-control" id='makmur' value="{{$potongan->makmur}}" value='0'>
                    </div>
                  </div>

                  <hr>

                  <div class="form-group">
                    <label for="potongan" class="col-sm-2 control-label" >Total Potongan</label>
                    <div class="col-sm-5">
                      <input type="text" name="potongan" class="form-control" id='potongan' value="{{$potongan->kpkb + $potongan->zakat + $potongan->dharma + $potongan->makmur}}" readonly='yes'>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="total" class="col-sm-2 control-label" >Jumlah Yang Dibayarkan</label>
                    <div class="col-sm-5">
                      <input type="text" name="total" class="form-control" id='total' value="{{$potongan->pegawai->gaji->gaji - ($potongan->kpkb + $potongan->zakat + $potongan->dharma + $potongan->makmur)}}" readonly='yes'>
                    </div>
                  </div>

                </div>


              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="/gaji" class="btn btn-default">Batal</a>
                <button type="submit" class="btn btn-info">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
@endsection

@section('js')
  <script type="text/javascript">
    $('#kpkb').on('change', function() {
      var makmur = $('#makmur').val();
      var gaji = $('#pokok').val();
      var dharma = $('#golongan').val();
      var zakat = $('#zakat').val();
      var kpkb = $(this).val();
      var bjb = $('#bjb').val();
      var hasil = parseInt(dharma) + parseInt(zakat) + parseInt(kpkb) + parseInt(bjb) + parseInt(makmur);
      var total = parseInt(gaji) - (hasil);
      $('#potongan').val(hasil);
      $('#total').val(total);
      console.log(hasil);
    })

    $('#bjb').on('change', function() {
      var makmur = $('#makmur').val();
      var gaji = $('#pokok').val();
      var dharma = $('#golongan').val();
      var zakat = $('#zakat').val();
      var kpkb = $('#kpkb').val();
      var bjb = $('#bjb').val();
      var hasil = parseInt(dharma) + parseInt(zakat) + parseInt(kpkb) + parseInt(bjb) + parseInt(makmur);
      var total = parseInt(gaji) - (hasil);
      $('#potongan').val(hasil);
      $('#total').val(total);
      console.log(hasil);
    })

    $('#makmur').on('change', function() {
      var makmur = $('#makmur').val();
      var gaji = $('#pokok').val();
      var dharma = $('#golongan').val();
      var zakat = $('#zakat').val();
      var kpkb = $('#kpkb').val();
      var bjb = $('#bjb').val();
      var hasil = parseInt(dharma) + parseInt(zakat) + parseInt(kpkb) + parseInt(bjb) + parseInt(makmur);
      var total = parseInt(gaji) - (hasil);
      $('#potongan').val(hasil);
      $('#total').val(total);
      console.log(hasil);
    })
  </script>
@endsection
