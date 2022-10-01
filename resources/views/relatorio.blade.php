@extends('layouts.template')

@section('content')

<div id="mae"><!---principal div-->
    <center>

        <div class="nome_adm">
            <h4 class="home_adm"><i>{{ $empresa->nome}}</i></h4>
        </div>
    
        <div id="problemas">
            <h4> {{$probs[1]->nome}}</h4>
                

        </div>

      


    </center>
</div>

    <!----------------------------------------------------->



    @endsection
