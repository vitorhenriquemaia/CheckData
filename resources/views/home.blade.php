@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(Auth::user()->user_type=='employee')
                    <div class="row justify-content-center pb-2">
                    <a href="{{route('admin.forms.create')}}" class="btn btn-primary">Criar Hospede</a>                             
                    </div>     
                    @endif
                     <div class="row justify-content-center">
                     <a href="{{route('admin.forms.index')}}" class="btn btn-primary">ver clientes</a>
                    </div>
                     </div>
                   
            </div>
        </div>
    </div>
</div>
@endsection
