@extends('layouts.template')

@section('content')

    <div id="mae">
        <center>

    <!-- nome empresa-->
    <div id="nome_problema">

        <p class="nome_empresa_principal">
            <b>{{ $user->empresa->nome }}</b>
        </p>

    </div>
    <!-- nome problema-->
    <div id="nome_problema">

        <p class="nome_problema_principal">
            {{ $prob->nome }}
        </p>

    </div>
    <br>
    {{-- <!-- nave bar-->
    <div id="nave_bar">

       local da barra de progresso

    </div> --}}

    <div id="funcionalidades_colaborador">
    <!-- lista de colaboradores -->

        <div id="lista_colaboradores">
            <div id="titulo_colab_prob">
                <h4>Colaboradores</h4>
            </div>
            <div id="colab_prob">
                <br>
                <p class="colab_prob">
                    @each('components.colab_prob', $colabs, 'colab')
                </p>
                
            </div>




        </div>


        <div id="botoes_prob_prin">
            <h4>
                Funcionalidades
            </h4>

            <a class="link_funcionalidade" href="/problemas/{{$prob->id}}/primeiro_porque">Continuar problema</a><br><br>
            <a class="link_funcionalidade" href="colaboradoralgumacoisa">Relatórios</a><br><br>
           
            @admin
            <a class="link_funcionalidade" href="/problemas/{{ $prob->id }}/adicionar_colaborador">Adicionar Colaboradores</a><br><br>
            @endadmin
            <a class="link_funcionalidade" href="/problemas/{{ $prob->id }}/deletar">Concluir problema</a><br>

        </div>
    </div>
    <div id="passos">

        <div id="nome_problema">
            <p class="nome_problema_principal">
                Passo a Passo
            </p>
        </div>

        <div id="linha_passo">
            <div id="passo">
                <h4>porquês</h4> 

            </div>
            <div id="passo">
                subproblema

            </div>
            
            
        </div>

       

    </div>
    



        </center>
    </div>





@endsection
