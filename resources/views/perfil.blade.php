@extends('layouts.template')

@section('content')
        
<div id="mae"><!---principal div-->
         
        
    <center>
        <div id="contorno_perfil">
            <table>
                <br><br>
                <img src="/img/perfil_icon.png" alt="perfil" width="70px" height="70px"><br>
                <h4>{{ $user->nome }}</h4>
                <h2>Dados pessoais</h2><br>
                <h4> Empresa: {{ $user->empresa->nome }}</h4>
                <h4> Cargo: {{ $user->cargo }}</h4>
                <h4>{{ $user->email }}</h4>
                <a href="/logout">
                    <img src="/img/desliga.png"width="30" height="30">
                </a>
                
            </table>
            
        </div>
    </center>

    <br>
</div>
    <!-----------------------------------------------------> 

    @endsection