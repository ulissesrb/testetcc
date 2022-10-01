@extends('layouts.template')

@section('content')
           <!----------------------->
        <div id="mae">

                <form action ="{{route('login.store')}}" method="post" id="formulario">
                    @csrf
                    <div id="field">
                        <div>
                            <br><br>
                            <h2>Realize seu Login</h2>
                            <br>
                            @if (session('status'))
                                <div class="error">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <h4>Digite seu email:</h4>
                            <input class="text-input" type="email" name="email" maxlength="100" value="{{ old('email') }}" required>
                            @error('email') <div class="error">{{ '! '.$message }}</div> @enderror
                            <h4>Digite sua senha:</h4>
                            <input class="text-input" type="password" name="senha" maxlength="20" required><br><br>
                            @error('senha') <div class="error">{{ '! '.$message }}</div> @enderror
                            <input class="button entra" type="reset" value="Limpar">
                            <input class="button entra" type="submit" value="Login"><br><br><br><br>
                        </div>
                    </div>
                   <br><br>

                </form>

        </div>


    @endsection
