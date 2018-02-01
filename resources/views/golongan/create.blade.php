@extends('layouts.master')

@section('title')
  Form Golongan
@endsection

@section('content')
  <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Horizontal Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="/golongan/save" method="post" id="form">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="nama_jabatan" class="col-sm-2 control-label">Nama Golongan</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" placeholder="Masukan Nama Golongan" name="nama">
                  </div>
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="/golongan" class="btn btn-warning">Batal</a>
                <button type="submit" class="btn btn-info">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
@endsection

@section('js')
  @include('golongan.script')
@endsection
