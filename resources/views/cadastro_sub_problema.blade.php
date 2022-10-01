@extends('layouts.template')

@section('content')
        
<div id="mae"><!---principal div-->
         
    <div class=design>
        
        <center>
            <div id="formulariocad">           
                <br><br>
                <h2>Descrição de Problemas</h2>
                <br><br><br><br>
            
                <h4> Nomeie seu sub-problema: </h4><br>
                <textarea id="nome_problema" rows="1"></textarea>

                <h4> Descreva-o sucintamente: </h4><br>
                <textarea id="descricao" rows="5" cols="70" maxlength="300"></textarea><br><br><br>
                <input class="button entra" type="submit" value="Enviar"><br><br>           
            </div>
        </center>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
    @endsection

