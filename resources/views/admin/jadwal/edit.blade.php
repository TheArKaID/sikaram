@extends('layouts.admin')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Data Masjid</h1>
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
                <form method="post" action="/admin/jadwal/{{ $jadwal -> id}}">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                      <label for="nama">Mubaligh</label>
                      {!! Form::select('id_mubaligh', $mubaligh, $jadwal -> id_mubaligh, array('class' => 'form-control','id' => 'id_mubaligh'))!!}
                  </div>
                  <div class="form-group">
                      <label for="nama">Masjid</label>
                      {!! Form::select('id_masjid', $masjid, $jadwal -> id_masjid, array('class' => 'form-control','id' => 'id_masjid'))!!}
                  </div>
                  <div class="form-group">
                    <label for="nama">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal">
                  </div>
                  <div class="form-group">
                    <label for="nama">Jam</label>
                    <input type="time" class="form-control" id="jam" name="jam">
                  </div>
                    <div class="form-group">
                      <label for="nama">Tema</label>
                      <input type="text" class="form-control" id="tema" name="tema" value="{{ $jadwal -> tema}}">
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