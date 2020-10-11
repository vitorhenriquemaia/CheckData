@extends('layouts.app')

@section('content')
   <div class="container">
    <h1>Criar usuário</h1>
    <form action="{{route('admin.forms.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Nome</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}">
        </div>

        <div class="form-group">
            <label>Nome da mãe</label>
            <input type="text" name="mother" class="form-control @error('mother') is-invalid @enderror" value="{{old('mother')}}">
        </div>

        <div class="form-group">
            <label>CPF</label>
            <input type="text" name="cpf" class="form-control">
        </div>

        <div class="form-group">
            <label>RG</label>
            <input type="text" name="rg" class="form-control">
        </div>

        <div class="form-group">
            <label>Passport</label>
            <input type="text" name="passport" class="form-control">
        </div>

        <div class="form-group">
            <label>Address</label>
            <input type="text" name="address" class="form-control">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control">
        </div>

        <div class="form-group">
            <label>Telefone</label>
            <input type="text" name="phone" class="form-control">
        </div>  

        <div class="form-group">
            <label>Celular</label>
            <input type="text" name="cellphone" class="form-control">
        </div>  

        <div class="form-group">
            <label>Check in</label>
            <input type="date" name="checkin" class="form-control">
        </div>   

        <div class="form-group">
            <label>Check out</label>
            <input type="date" name="checkout" class="form-control">
        </div>  

        <div class="form-group">
            <label>Motivo da coleta</label>
            <input type="text" name="why" class="form-control">
        </div>  

         <div class="form-group">
            <label>Validade dos informações</label>
            <input type="date" name="when" class="form-control">
        </div>  

        <input type="hidden" name="who" value="{{Auth::user()->name}}">         

        <div>
            <button type="submit" class="btn btn-lg btn-success">Salvar</button>
        </div>
    </form>
    </div>
@endsection