@extends('layouts.default')

@section('content')

<div>ini isi dari info mubaligh</div>
<div class="row">     <div class="col-md-8">          </div>         <div class="col-md-4">             <form action="/search" method="get">                 <div class="input-group mt-4">                     <input type="search" name="search" class="form-control">                     <span class="input-group-prepend">                         <button type="submit" class="btn btn-success">Search</button>                     </span>                 </div>             </form>         </div>     </div>

@endsection