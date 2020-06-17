@extends('layouts.admin')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Mubaligh <a href="/admin/mubaligh/create" type="button" class="btn btn-info">+ Data</a></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
        @if (session('status'))
              <div class="alert alert-success">
                  {{ session('status')}}
              </div>
          @endif
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
                                    <th>No HP</th>
                                    <th>ALAMAT</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            @for ($i = 1; $i <= 1; $i++)
                            @foreach ($mubaligh as $contain)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$contain->nama}}</td>
                                <td>{{$contain->nohp}}</td>
                                <td>{{$contain->alamat}}</td>
                                <td>
                                    <a class="btn btn-warning btn-sm" href="/admin/mubaligh/{{$contain -> id}}">Edit</a>
                                    <form action="/admin/mubaligh/{{ $contain -> id }}" method="POST" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
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

@endsection