@extends('layouts.app')

@section('content')
   <div class="container">
    <h1>Criar usuário</h1>
    <form action="{{route('admin.forms.update', ['form' => $form->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method("PUT")
        <div class="form-group">
            <label>Nome</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{$form->name}}">
        </div>

        <div class="form-group">
            <label>Nome da mãe</label>
            <input type="text" name="mother" class="form-control @error('mother') is-invalid @enderror" value="{{$form->mother}}">
        </div>

        <div class="form-group">
            <label>CPF</label>
            <input type="text" name="cpf" class="form-control" value="{{$form->cpf}}">
        </div>

        <div class="form-group">
            <label>RG</label>
            <input type="text" name="rg" class="form-control" value="{{$form->rg}}">
        </div>

        <div class="form-group">
            <label>Passport</label>
            <input type="text" name="passport" class="form-control" value="{{$form->passport}}">
        </div>

        <div class="form-group">
            <label>Address</label>
            <input type="text" name="address" class="form-control" value="{{$form->address}}">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control" value="{{$form->email}}">
        </div>

        <div class="form-group">
            <label>Telefone</label>
            <input type="text" name="phone" class="form-control" value="{{$form->phone}}">
        </div>  

        <div class="form-group">
            <label>Celular</label>
            <input type="text" name="cellphone" class="form-control" value="{{$form->cellphone}}">
        </div>  

        <div class="form-group">
            <label>Check in</label>
            <input type="date" name="checkin" class="form-control" value="{{$form->checkin}}">
        </div>   

        <div class="form-group">
            <label>Check out</label>
            <input type="date" name="checkout" class="form-control" value="{{$form->checkout}}">
        </div>  

        <div class="form-group">
            <label>Motivo da coleta</label>
            <input type="text" name="why" class="form-control" value="{{$form->why}}">
        </div>  

         <div class="form-group">
            <label>Validade dos informações</label>
            <input type="text" name="when" class="form-control" value="{{$form->when}}">
        </div>        
          
        <input type="hidden" name="whoedit" value="{{Auth::user()->name}}"> 

        <div>
            <button type="submit" class="btn btn-lg btn-success">Atualizar</button>
        </div>
    </form>
    </div>
@endsection