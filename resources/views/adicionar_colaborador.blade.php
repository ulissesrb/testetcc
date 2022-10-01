@extends('layouts.template')

@section('content')

<div id="mae">

    <div class=design>

        <center>
            <div hidden id="id_prob">{{ $prob->id }}</div>
            <div id="nome_problema">
                <p class="nome_empresa_principal">
                    <b>{{ $prob->nome }}</b>
                </p>
            </div>
            <br>
            <div id="salvar">
                <input class="button entra" type="submit" value="Salvar">
            </div>
            <br>
            <div id="colabs">
                @each('components.add_colab', $colabs, 'colab', 'components.empty_colab')
            </div>

        </center>
    </div>
    <script src="/js/add_colab.js"></script>
</div>

@endsection
