@extends('layouts.default')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-6">
            <h2 class="mt-10">Jadwal Kajian</h2>

            <div class="row">     
            <div class="col-md-8"> 

            </div>         
                <div class="col-md-4">             
                    <form action="/kajian/search" method="get">                 
                        <div class="input-group mt-4">                    
                         <input type="search" name="search" placeholder="Tema" class="form-control" value="{{ isset($_GET['search']) ? $_GET['search'] : '' }}">                     
                            <span class="input-group-prepend">                         
                                <button type="submit" class="btn btn-success">Search</button>                     
                            </span>                 
                        </div>             
                    </form>         
                </div>     
            </div>
        </div>
    </div>
</div>

<div class="content-wrapper">
    <section class="content">
      <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto">
                <div class="card mt-2">
                    <div class="card-body">
                        
                        <table class="table table-responsive">
                            <thead class="thead-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Mubaligh</th>
                                    <th>Masjid</th>
                                    <th>Tema</th>
                                    <th>Waktu</th>
                                </tr>
                            </thead>
                            @for ($i = 1; $i <= 1; $i++)
                            @foreach ($kajians as $contain)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$contain->mubaligh->nama}}</td>
                                <td>{{$contain->masjid->nama}}</td>
                                <td>{{$contain->waktu}}</td>
                                <td>{{$contain->tema}}</td>
                            </tr>
                            @endforeach
                            @endfor
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>
  </div>

@endsection