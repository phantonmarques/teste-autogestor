@extends('adminlte::page')
@section('plugins.Sweetalert2', true)
@section('title', 'Criar Cliente · ')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Clientes</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('customer.index') }}">Clientes</a></li>
                    <li class="breadcrumb-item active">Criar Cliente</li>
                </ol>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header with-border">
                    <div class="row">
                        <div class="col-md-8">
                            <h3 class="box-title"> Criar Cliente</h3>
                        </div>
                        <div class="col-md-4">
                            <h6 align="right" style="color:red">* Campos obrigatórios</h6>
                        </div>
                    </div>
                </div>

                <form action="{{ route('customer.store') }}" method="POST" onsubmit="return validateForm(this)">
                    {!! csrf_field() !!}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="name">Nome</label><span style="color: red;">*</span>
                                <input type="text" name="name" id="name" placeholder="Informe nome do cliente" class="form-control" />
                            </div>
                            <div class="col-md-4">
                                <label for="email">E-mail</label><span style="color: red;">*</span>
                                <input type="text" name="email" id="email" placeholder="Informe e-mail do cliente" class="form-control" />
                            </div>
                            <div class="col-md-4">
                                <label for="cpf_cnpj">CPF/CNPJ</label><span style="color: red;">*</span>
                                <input type="text" name="cpf_cnpj" id="cpf_cnpj" placeholder="Informe cpf/cnpj do cliente" class="form-control" />
                            </div>
                        </div>
    
                        <div class="row">
                            <div class="col-md-4">
                                @if ($errors->has('name'))
                                    <div class="text-red">{{ $errors->first('name') }}</div>
                                @endif
                            </div>
                            <div class="col-md-4">
                                @if ($errors->has('email'))
                                    <div class="text-red">{{ $errors->first('email') }}</div>
                                @endif
                            </div>
                            <div class="col-md-4">
                                @if ($errors->has('cpf_cnpj'))
                                    <div class="text-red">{{ $errors->first('cpf_cnpj') }}</div>
                                @endif
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-md-4">
                                <label for="category_id">Categoria</label><span style="color: red;">*</span>
                                <select name="category_id" class="form-control">
                                    <option value="">---- SELECIONE ----</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}"> {{ $category->name }} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                @if ($errors->has('category_id'))
                                    <div class="text-red">{{ $errors->first('category_id') }}</div>
                                @endif
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-md-4">
                                <label for="state">Estado</label><span style="color: red;">*</span>
                                <select name="state" class="form-control" onchange="searchCity(this.value)">
                                    <option value="">---- SELECIONE ----</option>
                                    @foreach($states as $state)
                                        <option value="{{ $state->id }}"> {{ $state->name_visible }} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="city_id">Cidade</label><span style="color: red;">*</span>
                                <select name="city_id" id="city_id" class="form-control">
                                    <option value="">---- SELECIONE ----</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                @if ($errors->has('state'))
                                    <div class="text-red">{{ $errors->first('state') }}</div>
                                @endif
                            </div>
                            <div class="col-md-4">
                                @if ($errors->has('city_id'))
                                    <div class="text-red">{{ $errors->first('city_id') }}</div>
                                @endif
                            </div>
                        </div>

                    </div>
    
                    <div class="card-footer">
                        <div class="col-lg-2" style="float:right;margin-bottom: 1%;margin-top: 1%;">
                            <input type="submit" class="btn btn-block btn-success" value="Salvar" />
                        </div>
                        <div class="col-lg-2" style="float:right;margin-bottom: 1%;margin-top: 1%;">
                            <a href="{{ route('customer.index') }}" class="btn btn-block btn-danger">Voltar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        window.onload = function () {
            // Alert error, timeout for display none
            alert = document.getElementById('alert-sync');

            if (typeof (alert) != 'undefined' && alert != null) {
                window.setTimeout('hideAlert(alert)', 4000);
            }
        };

        /**
         * Hide alert, after 4000 ms
         * @param alert
         */
        function hideAlert(alert) {
            alert.style.display = 'none';
        }

        /**
         * Validate form
         * @param f
         * @returns {boolean}
         */
        function validateForm(f) {
            if (f.name.value === '') {
                Swal.fire({
                    icon: 'error',
                    title: 'Erro',
                    text: 'Campo [Nome] obrigatório!',
                });
                return false;
            } else if (f.email.value === '') {
                Swal.fire({
                    icon: 'error',
                    title: 'Erro',
                    text: 'Campo [E-mail] obrigatório!',
                });
                return false;
            } else if (!validateEmail(f.email.value)) {
                Swal.fire({
                    icon: 'error',
                    title: 'Erro',
                    text: 'E-mail inválido, favor informe corretamente!',
                });
                return false;
            } else if (f.cpf_cnpj.value === '') {
                Swal.fire({
                    icon: 'error',
                    title: 'Erro',
                    text: 'Campo [CPF/CNPJ] obrigatório!',
                });
                return false;
            } else if (f.category_id.value === '') {
                Swal.fire({
                    icon: 'error',
                    title: 'Erro',
                    text: 'Campo [Categoria] obrigatório, favor selecione!',
                });
                return false;
            } else if (f.city_id.value === '') {
                Swal.fire({
                    icon: 'error',
                    title: 'Erro',
                    text: 'Campo [Cidade] obrigatório, favor selecione o estado em seguida a Cidade!',
                });
                return false;
            }

            return true;
        }

        function validateEmail(str) {
            var pattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            return pattern.test(str);  // returns a boolean
        }

        function searchCity(state) {
            if (state.length > 0) {
                $.ajax({
                    url: '{{ url('admin/citys') }}/' +  state,
                    type: 'GET',
                    crossDomain: true,
                    success: function (data) {
                        if (typeof (data[0].id) !== undefined) {
                            let selectCidades = document.getElementById("city_id");

                            $('#city_id').empty();

                            for (var k in data) {
                                var option = document.createElement("option");
                                option.value = data[k].id;
                                option.text = data[k].name_visible;
                                selectCidades.add(option);
                            }
                        }
                    },
                    error: function () {
                        Swal.fire({
                            icon: 'info',
                            title: 'Erro',
                            text: 'Desconhecido, favor recarrega a página e tente novamente!',
                        })
                    },
                });
            } else if (state.length === 0) {
                $('#city_id').empty();

                let selectCidades = document.getElementById("city_id");

                let option = document.createElement("option");
                option.value = '';
                option.text = '---- SELECIONE ----';
                selectCidades.add(option);

                Swal.fire({
                    icon: 'info',
                    title: 'Erro',
                    text: 'Obrigatório selecionar um estado para escolher uma cidade!',
                })
            }
        }
    </script>
@endsection
