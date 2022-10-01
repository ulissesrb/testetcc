@extends('layouts.template')

@section('content')
           <!----------------------->
        <div id="mae">
            <form action ="{{route('cadastro_colaborador.store')}}" method="post" id="formulariocolab">
                @csrf
                <br>
                <h2>Cadastro de colaborador</h2>
                <div id="fields">
                    <div>
                        <div id="nome_cadastro"></div>
                        <h4>Nome:</h4>
                        <input class="text-input" type="text" name="nome"  maxlength="255" required value="{{ old('nome') }}" autocomplete="off">
                        @error('nome') <div class="error">{{ '! '.$message }}</div> @enderror

                        <h4>Cargo Exercido:</h4>
                        <input class="text-input" type="text" name="cargo" placeholder="Exemplos: gerente, supervisor de vendas e analista de dados" maxlength="30" required value="{{ old('cargo') }}" autocomplete="off">
                        @error('cargo') <div class="error">{{ '! '.$message }}</div> @enderror

                        <h4>Email:</h4>
                        <input class="text-input" type="email" name="email" placeholder ="nome@exemplo.com" min="1" required value="{{ old('email') }}" autocomplete="off">
                        @error('email') <div class="error">{{ '! '.$message }}</div> @enderror
                        
                        <h4>Senha:</h4>
                        <input class="text-input" type="password" name="senha" maxlength="20" required autocomplete="off">
                        @error('senha') <div class="error">{{ '! '.$message }}</div> @enderror
                        <br><br><br>

                        <h4>Administrador ?</h4>
                        <input class="text-input" type="checkbox" name="administrador">
                        <br><br><br><br>

                        &nbsp;&nbsp;&nbsp;&nbsp;<input class="button entra" type="reset" value="Limpar">
                        <input class="button entra" type="submit" value="Cadastrar"><br><br>
                        <br><br>
                    </div>
                </div>

            </form>
            <br>
            {{-- <h5>Já é um colaborador ?</h5>
            <a href="{{route('login.create')}}" class="cadastro_usuario">Login!</a> --}}
        </div>


        </div>
    <!----------------------------------------------------->

    @endsection
