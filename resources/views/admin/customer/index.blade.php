@extends('adminlte::page')
@section('title', 'Clientes · ')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Clientes</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Clientes</li>
                </ol>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card col-md-12">
                <div class="card-header" style="display: ruby;">
                    <div class="box-title col-xs-1 no-padding">
                        <a class="btn btn-success btn-flat" href="{{ route('customer.create')  }}"
                           title="Cadastro de nova categoria">
                            <i class="fas fa-sm fa-plus"></i>&nbsp;&nbsp;Novo Cliente
                        </a>
                    </div>

                    <div style="float:right;">
                        <form method="GET">
                        <div class="input-group">
                            @if (empty($customerSearch))
                                {{ $customerSearch = '' }}
                            @endif

                            <input type="text" name="s" placeholder="Pesquisar" class="form-control">

                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default btn-flat" title="Buscar Cliente">
                                    <i class="fas fa-search"></i>
                                </button>
                                @if (!empty($customerSearch))
                                    <a title="Limpar busca" class="btn btn-default"
                                       href="{{ route('customer.index') }}">
                                        <i class="fas fa-backspace"></i>
                                    </a>
                                @endif
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover dataTable table-striped">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Categoria</th>
                                <th>CPF/CNPJ</th>
                                <th>Cidade</th>
                                <th>Estado</th>
                                <th>Data de Criação</th>
                                <th>Data de Atualização</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if (isset($customers))
                            @foreach($customers as $customer)
                                <tr>
                                    <td>
                                        {{ $customer->name }}
                                    </td>
                                    <td>
                                        {{ $customer->email }}
                                    </td>
                                    <td>
                                        {{ $customer->category->name }}
                                    </td>
                                    <td>
                                        {{ $customer->cpf_cnpj }}
                                    </td>
                                    <td>
                                        {{ $customer->city->name_visible }}
                                    </td>
                                    <td>
                                        {{ $customer->city->state->name_visible }}
                                    </td>
                                    <td>
                                        {{ $customer->created_at->format('d/m/Y - H:i') }}
                                    </td>
                                    <td>
                                        {{ $customer->updated_at->format('d/m/Y - H:i') }}
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="100%" class="text-center">
                                    Nenhum cliente {{ (!empty($customerSearch)) ? 'encontrado.' : 'cadastrado.' }}
                                </td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
                @if ($customers->hasPages())
                    <div class="box-footer clearfix">
                        {{ $customers->appends(['q' => $customerSearch])->onEachSide(2)->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>

    @include('vendor/flash-message')
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
    </script>
@endsection

