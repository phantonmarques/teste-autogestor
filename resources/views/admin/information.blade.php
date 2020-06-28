@extends('adminlte::page')

@section('content_header')
    <h1>&nbsp;Informações</h1>
@stop

@section('content')
    <div class="container">
        <div class="card row justify-content-center">
            <div class="col-md-12">
                <div class="card-header">
                    <div class="box-title">API consumida utilizando METHOD GET</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Razão Social:</label>
                            {{ $response->nome }}
                        </div>
                        <div class="col-md-6">
                            <label>Nome Fantasia:</label>
                            {{ $response->fantasia }}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label>Data abertura CNPJ:</label>
                            {{ $response->abertura }}
                        </div>
                        <div class="col-md-6">
                            <label>CNPJ:</label>
                            {{ $response->cnpj }}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label>Endereço:</label>
                            {{ $response->logradouro . ' ' . $response->numero }}
                        </div>
                        <div class="col-md-6">
                            <label>CEP:</label>
                            {{ str_replace('.', '', $response->cep) }}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label>Cidade:</label>
                            {{ $response->municipio }}
                        </div>
                        <div class="col-md-6">
                            <label>Estado:</label>
                            {{ $response->uf }}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label>Diretores:</label><br>
                            @foreach($response->qsa as $diretor)
                                {{ $diretor->nome }}<br>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-md-12">
                            <label style="font-size: 10pt">
                                Para realizar a requisição utilizei o CURL do PHP Puro, mas como outra alternativa também poderia utilizar a biblioteca do laravel "Ixudra\Curl\Facades\Curl".<br><br>
                                A função que está utilizando o CURL é "{{ $method }}".
                            </label>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
