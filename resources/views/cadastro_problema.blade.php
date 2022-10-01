@extends('layouts.template')

@section('content')

<div id="mae"><!---principal div-->

    <div class=design>
        <center>
            <form action="{{ route('problemas.store') }}"  method="post">
                @csrf
                <div id="problema">
                    <div id="titulo_problema">
                        <h2>Cadastro Problema</h2>
                    </div>
                    <div id="nome_problema_cadastro">
                        <h4>Nome do problema</h4>
                        <input class="campo_cad_problema" type="text" name="nome" maxlength="255" autocomplete="off" required>
                        @error('nome') <div class="error">{{ '! '.$message }}</div> @enderror
                    </div>
                    {{-- <div id="colaboradores_cad_problema">
                        <h4>Colaboradores</h4>
                        <select class="colaboradores_select" id="colaboradores" multiple="multiple">
                            <option value="dog">Maria Carolina Pereira Santos</option>
                            <option value="cat">Orlando Moraes Silva</option>
                            <option value="rabbit">Eliza Mendes de Carneiro Souza</option>
                            <option value="parrot">Matias Antonio Santos</option>
                        </select>
                    </div> --}}

                    
                    <div id="botao_cad_problema">
                        <input class="button entra" type="submit" value="Enviar"><br><br>
                    </div>
                    <br><br>
                </div>
            </form>
        </center>
    </div>

</div><br><br><br><br><br><br><br>
    @endsection

