<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @include('includes.topo')
    <div class="container" style="margin-top:30px;">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
    
                    <div class="card-body">
                    <a href="{{route('departamentoCreate')}}" class="btn btn-primary" style="margin-bottom:10px;">Criar</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Descrição</th>
                                <th scope="col">Data de criação</th>
                                <th>Opções</th>
                              </tr>
                            </thead>
                            <tbody>
                             @foreach ($departamentos->sortBy('id') as $departamento)
                                <tr>
                                    <th scope="row">{{$departamento->id}}</th>
                                    <td>{{$departamento->nome}}</td>
                                    <td>{{$departamento->descricao}}</td>
                                    <td>{{date('d/m/Y', strtotime($departamento->created_at))}}</td>
                                    <td>
                                        <a href="">Delete</a> | <a href="">Atualizar</a>
                                    </td>
                                </tr>
                             @endforeach
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</body>
</html>
