@extends('layouts.template')

@section('content')
           <!----------------------->
        <div id="mae">
            <form action ="{{route('cadastro_administrador.store')}}" method="post" id="formulariocolab">
                @csrf
                <br><br>
                <h2>Cadastro de administrador</h2><br>
                <div id="fields">
                    <div>
                        <h4>Nome:</h4>
                        <input class="text-input" type="text" name="nome" maxlength="255" required value="{{ old('nome') }}" autocomplete="off">
                        @error('nome') <div class="error">{{ '! '.$message }}</div> @enderror

                        <h4>Cargo Exercido:</h4>
                        <input class="text-input" type="text" name="cargo" maxlength="30" placeholder="Exemplos: Analista de RH, Gerente de departamentos." required value="{{ old('cargo') }}" autocomplete="off">
                        @error('cargo') <div class="error">{{ '! '.$message }}</div> @enderror

                        <h4>Email:</h4>
                        <input class="text-input" type="email" name="email" placeholder="mail@example.com" min="1" required value="{{ old('email') }}" autocomplete="off">
                        @error('email') <div class="error">{{ '! '.$message }}</div> @enderror

                        <h4>Senha:</h4>
                        <input class="text-input" type="password" name="senha"  maxlength="20" required autocomplete="off">
                        @error('senha') <div class="error">{{ '! '.$message }}</div> @enderror
                        <br><br><br><br>

                        &nbsp;&nbsp;&nbsp;&nbsp;<input class="button entra" type="reset" value="Limpar">
                        <input class="button entra" type="submit" value="Cadastrar"><br><br>
                        <br><br>
                    </div>
                </div>

            </form>
            <br>
            {{-- <h5>Já é um colaborador ?</h5>
            <a href="{{route ('login.create')}}" class="cadastro_usuario">Login!</a> --}}
        </div>


        </div>
    <!----------------------------------------------------->

    @endsection
