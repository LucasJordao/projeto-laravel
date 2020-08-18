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
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Criar Departamento</div>
    
                    <div class="card-body">
                    
                    {{Form::open(array('method'=> 'post', 'action' => 'DepartamentoController@store'))}}
                        <div class="form-group">
                            {{Form::label('nome', 'Titulo')}}
                            {{Form::text('nome', '', array('placeholder'=> 'Digite o nome do departamento', 'class' => 'form-control'))}}
                        </div>
                        <div class="form-group">
                            {{Form::label('descricao', 'Descrição')}}
                            {{Form::textarea('descricao', '',array('placeholder'=>'Digite a descrição do departamento', 'class' => 'form-control',))}}
                        </div>
                        <button type="submit" class="btn btn-primary">Criar</button>
                        <a href="{{route('departamento')}}" class="btn btn-danger">Voltar</a>
                    {{Form::close()}}
                    </div>
                </div>
            </div>
        </div>
    </div> 
</body>
</html>
