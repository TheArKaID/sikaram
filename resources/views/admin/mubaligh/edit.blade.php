@extends('layouts.admin')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Data Mubaligh</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col">
                <form method="post" action="/admin/mubaligh/{{ $mubaligh -> id}}">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                      <label for="nama">Nama Mubaligh:</label>
                      <input type="text" class="form-control" id="nama" name="nama" value="{{ $mubaligh -> nama}}">
                    </div>
                    <div class="form-group">
                      <label for="nama">No HP Mubaligh:</label>
                      <input type="text" class="form-control" id="nohp" name="nohp" value="{{ $mubaligh -> nohp}}">
                    </div>
                    <div class="form-group">
                      <label for="alamat">Alamat Mubaligh:</label>
                      <textarea type="text" class="form-control" id="alamat" name="alamat">{{ $mubaligh -> alamat}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" name="action" value="edit">Edit</button>
                    <button type="submit" class="btn btn-success" name="action" value="kembali">Kembali</button>
                </form>
            </div>
        </div>
        <div class="row">
          <section class="col-lg-5 connectedSortable">
          </section>
        </div>
      </div>
    </section>
  </div>

@endsection