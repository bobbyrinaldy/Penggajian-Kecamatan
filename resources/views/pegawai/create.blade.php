@extends('layouts.master')

@section('title')
  Form Jabatan
@endsection

@section('content')
  <div class="box box-info">
            <div class="box-header with-border">
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="/pegawai/save" method="post">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">NIP</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" placeholder="Masukan NIP Pegawai" name="nip" maxlength="18">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" placeholder="Masukan Nama Pegawai" name="nama">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Alamat</label>

                  <div class="col-sm-5">
                    <textarea name="alamat" rows="8" cols="80" class="form-control"></textarea>
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Jenis Kelamin</label>

                  <div class="col-sm-5">
                    <input type="radio" name="jk" value="P"> Perempuan <br>
                    <input type="radio" name="jk" value="L"> Laki-Laki
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Agama</label>

                  <div class="col-sm-5">
                    <select class="form-control" name="agama" required>
                      <option value="" selected disabled>-PILIH AGAMA-</option>
                      <option value="ISLAM">ISLAM</option>
                      <option value="KRISTEN">KRISTEN</option>
                      <option value="HINDU">HINDU</option>
                      <option value="BUDHA">BUDHA</option>
                      <option value="KONG HU CHU">KONG HU CHU</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Golongan</label>

                  <div class="col-sm-5">
                    <select class="form-control" name="golongan" required>
                      <option value="" selected disabled>-PILIH GOLONGAN-</option>
                      @foreach ($g as $item)
                        <option value="{{$item->id}}">{{$item->nama}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Jabatan</label>

                  <div class="col-sm-5">
                    <select class="form-control" name="jabatan" required>
                      <option value="" selected disabled>-PILIH GOLONGAN-</option>
                      @foreach ($j as $item)
                        <option value="{{$item->id}}">{{$item->nama}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Gaji Pokok (Rp.)</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" placeholder="Masukan Gaji Pokok" name="gaji">
                  </div>
                </div>
              </div>



              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Batal</button>
                <button type="submit" class="btn btn-info">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
@endsection
