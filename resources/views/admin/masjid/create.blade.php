@extends('layouts.admin')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tambah Data Masjid</h1>
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
                <form method="post" action="/admin/masjid">
                    @csrf
                    <div class="form-group">
                      <label for="nama">Nama Masjid:</label>
                      <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="form-group">
                      <label for="nama">Kontak Masjid:</label>
                      <input type="text" class="form-control" id="kontak" name="kontak">
                    </div>
                    <div class="form-group">
                      <label for="alamat">Alamat Masjid:</label>
                      <textarea type="text" class="form-control" id="alamat" name="alamat"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
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