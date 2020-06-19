@extends('layouts.default')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-6">
            <h2 class="mt-10">Daftar Jadwal</h2>

            <div class="row">     
            <div class="col-md-8"> 

            </div>         
                <div class="col-md-4">             
                    <form action="/search" method="get">                 
                        <div class="input-group mt-4">                    
                         <input type="search" name="search" class="form-control">                     
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
                                    <th>NO</th>
                                    <th>idmubaligh</th>
                                    <th>idmasjid</th>
                                    <th>waktu</th>
                                    <th>tema</th>
                                </tr>
                            </thead>
                            @for ($i = 1; $i <= 1; $i++)
                            @foreach ($kajians as $contain)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$contain->id_mubaligh}}</td>
                                <td>{{$contain->id_masjid}}</td>
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