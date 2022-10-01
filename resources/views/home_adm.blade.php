@extends('layouts.template')

@section('content')

<div id="mae"><!---principal div-->
    <center>

        <div class="nome_adm">
            <h4 class="home_adm"> Bem vindo <i>{{ $user->nome }}</i></h4>
                
            <h4 class="texto_home_adm">
                Acesse sua lista de <span style="color: #2184d5;">problemas</span>, cadastre seus <span style="color: #2184d5;">colaboradores</span> e administre a sua problematização empresarial.
            </h4>
        </div>
    
        <div id="problemas">

                @each('components.prob', $probs, 'prob', 'components.empty_prob')

        </div>

        <div id="adicionar_problema">
            <a class="botao_adicionar" href="{{ route('problemas.create') }}">Adicionar problema</a>
        </div>


    </center>
</div>

    <!----------------------------------------------------->



    @endsection
