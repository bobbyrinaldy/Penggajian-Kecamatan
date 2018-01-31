
@extends('layouts.master')

@section('title')
  Form Pegawai
@endsection

@section('content')
  <div class="box box-info">
            <div class="box-header with-border">
            </div>

            <form class="form-horizontal" action="/pegawai/save" method="post" id="form">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">NIP</label>

                  <div class="col-sm-3 error">
                    <input type="text" class="form-control" placeholder="Masukan NIP Pegawai" name="nip" maxlength="18" id="nip">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-5 error">
                    <input type="text" class="form-control" placeholder="Masukan Nama Pegawai" name="nama">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">No. Telepon</label>

                  <div class="col-sm-5 error">
                    <input type="text" class="form-control" placeholder="Masukan No Telepon" name="no_tlp" maxlength="13">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Alamat</label>

                  <div class="col-sm-5 error">
                    <textarea name="alamat" rows="8" cols="80" class="form-control"></textarea>
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Jenis Kelamin</label>

                  <div class="col-sm-5 error">
                    <input type="radio" name="jk" value="P" checked> Perempuan <br>
                    <input type="radio" name="jk" value="L"> Laki-Laki
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Agama</label>

                  <div class="col-sm-5 error">
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

                  <div class="col-sm-5 error">
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

                  <div class="col-sm-5 error">
                    <select class="form-control" name="jabatan" required>
                      <option value="" selected disabled>-PILIH Jabatan-</option>
                      @foreach ($j as $item)
                        <option value="{{$item->id}}">{{$item->nama}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>


              <!-- /.box-body -->
              <div class="box-footer">
                <a href="/pegawai" class="btn btn-warning">Batal</a>
                <button type="submit" class="btn btn-info">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
@endsection

@section('js')
  @include('pegawai.script')
@endsection
