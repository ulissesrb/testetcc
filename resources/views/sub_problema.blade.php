@extends('layouts.template')

@section('content')
    <div id="mae">
        <center>
            <div id="titulos_subproblema">
                <h2>{{ $empresa->nome }}</h2>
                <h1 class="subproblema_titulo">{{ $prob->nome }}</h1>
                <h4>Subproblemas</h4>
            </div>

            <form action="subproblema" method="post" id="form_subproblema">
            </form>
        </center>

    </div>

<script src="/js/sub_problema.js"></script>

@endsection


