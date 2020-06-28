@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Olá {{ auth()->user()->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Você se autenticou para avaliar o meu teste.<br>
                        Obrigado pela <b>oportunidade</b>! <i class="far fa-smile-wink"></i>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
