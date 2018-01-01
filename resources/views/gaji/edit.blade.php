@extends('layouts.master')

@section('title')
  Form Edit Gaji
@endsection

@section('content')
  <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Horizontal Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="/gaji/update/{{$gaji->id}}" method="post">
              {{ csrf_field() }}
              <div class="box-body">

                <div class="before">
                  <div class="form-group">
                    <label for="nip" class="col-sm-2 control-label">NIP Pegawai</label>

                    <div class="col-sm-5">
                      <select class="form-control select2" name="nip" id="nip">
                        <option value="{{$gaji->pegawai->nip}}" selected="yes">{{$gaji->pegawai->nip}} / {{$gaji->pegawai->nama}}</option>
                        <option disabled>Pilih Pegawai</option>
                        @foreach ($pegawai as $item)
                          <option value="{{$item->nip}}">{{$item->nip}} / {{$item->nama}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>
                
                <div class="after">

                  <div class="form-group">
                    <label for="nama" class="col-sm-2 control-label">Nama Pegawai</label>

                    <div class="col-sm-5">
                      <input type="hidden" name="id" class="form-control" readonly="yes" id="id" value="{{$gaji->pegawai->id}}">
                      <input type="text" name="nama" class="form-control" readonly="yes" id="nama" value="{{$gaji->pegawai->nama}}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="golongan" class="col-sm-2 control-label" >Golongan Pegawai</label>

                    <div class="col-sm-1">
                      <input type="text" name="golongan" class="form-control" readonly="yes" id="golongan" value="{{$gaji->pegawai->golongan->nama}}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="gaji" class="col-sm-2 control-label">Gaji Pokok</label>

                    <div class="col-sm-4">
                      <input type="text" name="gaji" class="form-control money" value="{{$gaji->gaji}}" id="gaji">
                    </div>
                  </div>

                </div>
                

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="/gaji" class="btn btn-default">Batal</a>
                <button type="submit" class="btn btn-info">Simpan</button>
                <input type="hidden" name="_method" value="put">
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
@endsection

@section('js')
  <script type="text/javascript">
    $('#nip').on('change', function() {
      var nip = $(this).val();
      console.log(nip);


      if (nip != "") {
        $('.after').css('display','block');

        $.ajax({

            url: "/pegawai/search/"+nip,
            type: "GET",
            data : {nip : nip},
            dataType:"json"

        }).done(function(response) {
            $('#nama').val(response.nama);
            $('#golongan').val(response.golongan.nama);
            $('#id').val(response.id);
            $('#gaji').val('');
        });

      }
    })
  </script>
@endsection
