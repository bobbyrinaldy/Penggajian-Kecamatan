@extends('layouts.master')

@section('title')
  Form Potongan Gaji
@endsection

@section('content')
  <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Horizontal Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="/potongan/save" method="post">
              {{ csrf_field() }}
              <div class="box-body">

                <div class="before">
                  <div class="form-group">
                    <label for="nip" class="col-sm-2 control-label">NIP Pegawai</label>

                    <div class="col-sm-5">
                      <select class="form-control select2" name="nip" id="nip">
                        <option selected disabled>Pilih Pegawai</option>
                        @foreach ($pegawai as $item)
                          <option value="{{$item->nip}}">{{$item->nip}} / {{$item->nama}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>

                <div class="after" style="display: none;">

                  <div class="form-group">
                    <label for="nama" class="col-sm-2 control-label">Nama Pegawai</label>

                    <div class="col-sm-5">
                      <input type="hidden" name="id" class="form-control" readonly="yes" id="id">
                      <input type="text" name="nama" class="form-control" readonly="yes" id="nama">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="pokok" class="col-sm-2 control-label" >Gaji Pokok</label>
                    <div class="col-sm-5">
                      <input type="text" name="pokok" class="form-control" readonly='yes' id='pokok'>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="rek" class="col-sm-2 control-label" >No. Rek SES. BG KKN</label>
                    <div class="col-sm-5">
                      <input type="text" name="rek" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="kpkb" class="col-sm-2 control-label" >KPKB</label>
                    <div class="col-sm-5">
                      <input type="text" name="kpkb" class="form-control" id='kpkb' value="0">
                    </div>
                  </div>

                  <div class="form-group">
                    {{-- <label for="bjb" class="col-sm-2 control-label" >BJB</label> --}}
                    <div class="col-sm-5">
                      <input type="hidden" name="bjb" class="form-control" id='bjb' value="0">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="zakat" class="col-sm-2 control-label" >Zakat</label>
                    <div class="col-sm-5">
                      <input type="text" name="zakat" class="form-control gaji" readonly='yes' id='zakat'>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="dharma" class="col-sm-2 control-label" >Dharma Wanita</label>
                    <div class="col-sm-5">
                      <input type="text" name="dharma" class="form-control" id='golongan' readonly='yes'>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="makmur" class="col-sm-2 control-label" >Sumber Makmur</label>
                    <div class="col-sm-5">
                      <input type="text" name="makmur" class="form-control" id='makmur' value='0'>
                    </div>
                  </div>

                  <hr>

                  <div class="form-group">
                    <label for="potongan" class="col-sm-2 control-label" >Total Potongan</label>
                    <div class="col-sm-5">
                      <input type="text" name="potongan" class="form-control" id='potongan' readonly='yes'>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="total" class="col-sm-2 control-label" >Jumlah Yang Dibayarkan</label>
                    <div class="col-sm-5">
                      <input type="text" name="total" class="form-control" id='total' readonly='yes'>
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

    $('#nip').on('change', function() {
      var nip = $(this).val();

      if (nip != "") {
        $('.after').css('display','block');

        $.ajax({

            url: "/pegawai/search/"+nip,
            type: "GET",
            data : {nip : nip},
            dataType:"json"

        }).done(function(response) {
          console.log(response);

            $('#nama').val(response.nama);
            if (response.golongan.nama == 'IV/A' || response.golongan.nama == 'IV/B' || response.golongan.nama == 'IV/C' || response.golongan.nama == 'IV/D'  || response.golongan.nama == 'IV/E') {
              var dharma = 4000;
              $('#golongan').val(4000);
            } else if(response.golongan.nama == 'III/A' || response.golongan.nama == 'III/B' || response.golongan.nama == 'III/C' || response.golongan.nama == 'III/D'  || response.golongan.nama == 'III/E') {
              var dharma = 3000;
              $('#golongan').val(3000);
            } else if(response.golongan.nama == 'II/A' || response.golongan.nama == 'II/B' || response.golongan.nama == 'II/C' || response.golongan.nama == 'II/D'  || response.golongan.nama == 'II/E') {
              var dharma = 2000;
              $('#golongan').val(2000);
            } else {
              var dharma = 1000;
              $('#golongan').val(1000);
            }
            $('#pokok').val(response.gaji.gaji);
            var gaji = response.gaji.gaji;
            $('#zakat').val(response.gaji.gaji*0.025);
            var zakat = response.gaji.gaji*0.025;
            $('#potongan').val(dharma+zakat);
            $('#total').val(gaji - (dharma+zakat));
            $('#id').val(response.id);
        });

      }
    })
  </script>
@endsection
