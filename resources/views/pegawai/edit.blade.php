@extends('layouts.master')

@section('title')
  Form Jabatan
@endsection

@section('content')
  <div class="box box-info">
            <div class="box-header with-border">
            </div>

            <form class="form-horizontal" action="/pegawai/update/{{$p->id}}" method="post">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">NIP</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" placeholder="Masukan NIP Pegawai" name="nip" maxlength="18" value="{{$p->nip}}">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" placeholder="Masukan Nama Pegawai" name="nama" value="{{$p->nama}}">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">No. Telepon</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" placeholder="Masukan No Telepon" name="no_tlp" value="{{$p->no_tlp}}">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Alamat</label>

                  <div class="col-sm-5">
                    <textarea name="alamat" rows="8" cols="80" class="form-control">{{$p->alamat}}</textarea>
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Jenis Kelamin</label>

                  <div class="col-sm-5">
                    <input type="radio" name="jk" value="P" @if ($p->jk == 'P') {{ 'checked' }} @endif> Perempuan <br>
                    <input type="radio" name="jk" value="L" @if ($p->jk == 'L') {{ 'checked' }} @endif> Laki-Laki
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Agama</label>

                  <div class="col-sm-5">
                    <select class="form-control" name="agama" required>
                      <option value="" disabled>-PILIH AGAMA-</option>
                      <option value="ISLAM" @if ($p->agama == 'ISLAM') {{ 'selected' }} @endif>ISLAM</option>
                      <option value="KRISTEN" @if ($p->agama == 'KRISTEN') {{ 'selected' }} @endif>KRISTEN</option>
                      <option value="HINDU" @if ($p->agama == 'HINDU') {{ 'selected' }} @endif>HINDU</option>
                      <option value="BUDHA" @if ($p->agama == 'BUDHA') {{ 'selected' }} @endif>BUDHA</option>
                      <option value="KONG HU CHU" @if ($p->agama == 'KONG HU CHU') {{ 'selected' }} @endif>KONG HU CHU</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Golongan</label>

                  <div class="col-sm-5">
                    <select class="form-control" name="golongan" required>
                      <option value="" disabled>-PILIH GOLONGAN-</option>
                      @foreach ($g as $item)
                        <option value="{{$item->id}}" @if ($p->golongan_id == $item->id) {{ 'selected' }}  @endif>{{$item->nama}}</option>
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
                      <option value="" selected disabled>-PILIH Jabatan-</option>
                      @foreach ($j as $item)
                        <option value="{{$item->id}}" @if ($p->jabatan_id == $item->id) {{ 'selected' }}  @endif>{{$item->nama}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>


              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Batal</button>
                <button type="submit" class="btn btn-info">Simpan</button>
                <input type="hidden" name="_method" value="put">
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
@endsection
