@extends('layouts.template')

@section('content')


    <div id="mae">
        <!-- nome problema-->
        <div id="nome_problema">

            <p class="nome_empresa_principal">
                <b>{{ $empresa->nome }}</b>
            </p>
    
        </div>
        <div id="nome_problema">
    
            <p class="nome_problema_principal">
                {{ $prob->nome }}
            </p>
    
        </div>
        <div id="info_porques">
            <h2 class="porques">Porquês</h2>
            <details> <summary><img src="/img/interrog.png" height="20px" width="20px"></summary>
                <br>
                <p2> Criada por Sakichi Toyoda (fundador da Toyota), a técnica do 5 Porquês é uma ferramenta simples e eficiente. O método consiste em questionar 5 vezes o porquê de um problema ou defeito ter ocorrido, a fim de descobrir a sua real causa, ou seja, a causa raiz.</p2><br><br>
                <p2>A recorrência de um problema geralmente ocorre porque a causa real que levou o problema acontecer não foi identificada corretamente, fazendo com que toda e qualquer ação feita acabe não funcionando. Em situações como essa utilizar o 5 Porquês é uma boa opção, pois a ferramenta irá direcionar a análise para a causa raiz do que está acontecendo e assim ajudar a refletir e propor uma solução efetiva para o problema.
                </p2><br><br>
                <p2>Será explicado cada porquê com base no exemplo clássico de Ohno (retirado do livro Sistema Toyota de Produção).</p2>
                <br>
            </details><br>
        </div>


            <form action="/problemas/{{$prob->id}}/@yield('num_min')_porque" method = "post" id="porque_form" class="center">
                @csrf
                <div id= "form_container">
                    <h2> @yield('num_max') Porquê </h2>
                    <br>
                    @yield('info')
   
                    <textarea name="porque" class="input_porque" style="height: 40%; width:70%; font-size:16px">{{ $porque }}</textarea><br>
                    @error("porque") <div class="error">{{ '! '.$message }}</div> @enderror
                    <br><br>
                    <a class="button entra" type="button" href="/problemas/{{$prob->id}}@yield('num_ant')">Retornar</a>
                    <input class="button entra" type="reset" value="Limpar">
                    <a id="porque_link" class="button entra" type="button" href="#">Continuar</a>
                    <br><br><br>


                </div>
            </form>
    </div>

    <script src="/js/porque.js"></script>

@endsection
