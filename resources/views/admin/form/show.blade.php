@extends('layouts.app')

@section('content')
<div class="container">
 <div class="row justify-content-center pt-5">

   <div class="card col-md-6 col-lg-6 col-xl-6">

 <div class="card-body">
 <h3><b>{{$form->name}}</b></h3>
 <hr>     
    <h5 class="card-text pt-5"><b>Nome da mãe:</b> {{$form->mother}}</h5>
    <h5 class="card-text pt-5"><b>CPF:</b> {{$form->cpf}}</h5>
    <h5 class="card-text pt-5"><b>RG:</b> {{$form->rg}}</h5>
    <h5 class="card-text pt-5"><b>Passport:</b> {{$form->passport}}</h5>
    <h5 class="card-text pt-5"><b>Endereço:</b> {{$form->address}}</h5>
    <h5 class="card-text pt-5"><b>Email:</b> {{$form->email}}</h5>
    <h5 class="card-text pt-5"><b>Telefone</b> {{$form->phone}}</h5>
    <h5 class="card-text pt-5"><b>Celular</b> {{$form->cellphone}}</h5>
    <h5 class="card-text pt-5"><b>check in</b> {{$form->checkin}}</h5>
    <h5 class="card-text pt-5"><b>Check out</b> {{$form->checkout}}</h5>
    <h5 class="card-text pt-5"><b>Motivo da coleta</b> {{$form->why}}</h5>
    <h5 class="card-text pt-5"><b>Data da coleta</b> {{$form->created_at}}</h5>
    <h5 class="card-text pt-5"><b>Quem cadastrou:</b> {{$form->who}}</h5>
    <h5 class="card-text pt-5"><b>Quem editor:</b> {{$form->whoedit}}</h5>
    <h5 class="card-text pt-5"><b>Última atualização</b> {{$form->update_at}}</h5>
           
    </div>
    <div class="row justify-content-center pt-5">
      <a href="{{route('admin.forms.index')}}" class="btn btn-outline-success btn-lg ">Voltar</a>
    </div>
 </div> 
 

 </div>
</div>
@endsection