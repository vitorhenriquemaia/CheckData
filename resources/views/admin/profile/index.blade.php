@extends('layouts.app')

@section('content')

<div class="container">
 <div class="row justify-content-center">  
    <div class="card col-4 text-center">
     <p><b>Nome do funcionário:</b> {{Auth::user()->name}}</p>
     <p><b>Cargo:</b> {{Auth::user()->profile->position}}</p>
     <p><b>Setor:</b> {{Auth::user()->profile->setor}}</p>
    </div>  
 </div>
</div>

@endsection