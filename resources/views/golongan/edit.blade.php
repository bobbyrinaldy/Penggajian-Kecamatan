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
            <form class="form-horizontal" action="/golongan/update/{{$g->id}}" method="post">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="nama_golongan" class="col-sm-2 control-label">Nama Golongan</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" placeholder="Masukan Nama Golongan" name="nama" value="{{$g->nama}}">
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
