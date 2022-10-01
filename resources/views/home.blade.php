@extends('layouts.template')

@section('content')

<div id="mae"><!---principal div-->

    <div class=design>

    <center>
        <table>
            <h4> Bem-vindo a <span style="color: #2184d5;">Solve!</span><br>
                Venha resolver seus problemas, através da nossa plataforma<br>
            </h4>

            <br><br><br><br><br>
            <h2>Cadastre sua empresa aqui</h2><br>
            <a class="button entra" href="{{route('cadastro_empresa.create')}}">Cadastrar</a>

        </table>
    </center>

    <br>

    <!----------------------------------------------------->

    <div id="texto">

        <br><br><br>

        <p id="paragrafo">&nbsp;&nbsp;&nbsp;&nbsp;Problemas solucionados com base em uma metodologia japonesa conhecida
                        como <span style="color: #2184d5;">MASP</span> (Metodologia de Análise e Solução de Problemas),
                        oferecendo melhor suporte no cotidiano e progresso da sua empresa.</p>

    </div>


</div>
</div>
<br><br>
    @endsection
