@extends('layouts.default')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-6">
            <h2 class="mt-10">Daftar KAJIAN</h2>

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

            


            <ul class="list-group">
                @foreach ($kajians as $kajian)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{$kajian -> waktu}}
                        {{$kajian -> waktu}}
                        {{$kajian -> tema}}
                    <a href="/kajian/{{$kajian -> id}}" class="badge badge-info">Details</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

@endsection