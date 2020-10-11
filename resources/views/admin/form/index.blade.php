@extends('layouts.app')

@section('content')
<table class="table table-stripped">
    <thead>
    <tr>
        <th>#</th>
        <th>Nome</th>
        <th>Nome da mãe</th>
        <th>Quem criou</th> 
        <th>Setor</th>   
        <th>Quando foi criado</th>
        <th>Motivo</th>
        <th>Última atualização</th>
        <th>Ações</th>
    </tr>
    </thead>
    <tbody>
        @foreach($forms as $form)
        <tr>
            <td>{{$form->id}}</td>
            <td>{{$form->name}}</td>
            <td>{{$form->mother}}</td> 
            <td>{{$form->who}}</td>
            <td>{{$form->profile->setor}}</td>
            <td>{{$form->created_at}}</td> 
            <td>{{$form->why}}</td> 
            <td>{{$form->updated_at}}</td>        
            
            <td>
              <div class="btn-group">

              <div class="btn">
              <a href="{{route('admin.forms.show',['form' => $form->id])}}" class="btn btn-sm btn-primary">Detalhes</a>
              </div>              

              <div class="btn">
              <a href="{{route('admin.forms.edit', ['form' => $form->id])}}" class="btn btn-sm btn-primary">Editar</a>
              </div> 
              @if(Auth::user()->user_type=='admin')
              <div class="btn">
              <form action="{{route('admin.forms.destroy', ['form' => $form->id])}}" method="POST">
                  @csrf 
                  @method("DELETE")
                 <button type="submit" class="btn btn-sm btn-danger">Remover</button>
                </form>                 
              </div>  
              @endif        
               
              </div>          

            </td>
        </tr>
        @endforeach
    </tbody>
</table>


{{$forms->links()}}

@endsection

