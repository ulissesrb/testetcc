@extends('layouts.template')

@section('content')

<div id="mae">
    <center>
        <div id="nome_adm">
            <h4> Bem vindo <i>{{ $user->nome }}</i></h4>
        </div>

        <div id="problemas">
            @each('components.prob', $probs, 'prob', 'components.empty_prob')
        </div>
    </center>

</div>


@endsection