@extends('layouts.admin')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Masjid</h1>
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
                <div class="card mt-2">
                    <div class="card-body">
                        
                        <table class="table table-striped table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th>NO</th>
                                    <th>NAMA</th>
                                    <th>KONTAK</th>
                                    <th>ALAMAT</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            @for ($i = 1; $i <= 1; $i++)
                            @foreach ($masjid as $contain)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$contain->nama}}</td>
                                <td>{{$contain->kontak}}</td>
                                <td>{{$contain->alamat}}</td>
                                <td>
                                    <a class="btn btn-warning btn-sm" href="">Edit</a>
                                    <a class="btn btn-danger btn-sm" href="">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                            @endfor
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
          <section class="col-lg-5 connectedSortable">
          </section>
        </div>
      </div>
    </section>
  </div>

{{-- <div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-2">
                <div class="card-body">
                    
                    <table class="table table-striped table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>NO</th>
                                <th>NAMA</th>
                                <th>KONTAK</th>
                                <th>ALAMAT</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        @for ($i = 1; $i <= 1; $i++)
                        @foreach ($masjid as $contain)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$contain->nama}}</td>
                            <td>{{$contain->jumlah}}</td>
                            <td>{{$contain->produksi}}</td>
                            <td>
                                <a class="btn btn-warning btn-sm" href="">Edit</a>
                                <a class="btn btn-danger btn-sm" href="">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                        @endfor
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div> --}}

@endsection