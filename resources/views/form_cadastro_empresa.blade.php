@extends('layouts.template')

@section('content')
           <!----------------------->
        <div id="mae">
            <form action="{{route('cadastro_empresa.store')}}" method="post" id="formulariocad">
                @csrf
                <br><br><br>
                <h2>Bem vindo, realize o cadastro da sua empresa</h2><br>
                <div id="fields">
                    <div>
                        <div id="nome_cadastro">
                            <p class="nomes_cadastros">Nome da empresa: </p> 
                        </div>
                        <div id="input_cadastro">
                            <input name="nome" class="text-input" type="text" id="nome_empresa" maxlength="255" value="{{ old('nome') }}" required autocomplete="off">
                             @error('nome') <div class="error">{{ '! '.$message }}</div> @enderror
                        </div>
                        <p class="nomes_cadastros">Razão social: </p>
                        <input name="razao_social" class="text-input" type="text" id="nome_social" placeholder="Exemplos: Flores Ltda, Companhia S.A." maxlength="255" value="{{ old('razao_social') }}" required autocomplete="off">
                        @error('razao_social') <div class="error">{{ '! '.$message }}</div> @enderror

                        <p class="nomes_cadastros">Número de funcionários:</p>
                        <input name="num_funcionarios" class="text-input" type="number" id="num_funcionarios" min="1" value="{{ old('num_funcionarios') }}" required autocomplete="off">
                        @error('num_funcionarios') <div class="error">{{ '! '.$message }}</div> @enderror

                        <p class="nomes_cadastros">CEP:</p>
                        <input name="cep" class="text-input" type="text" id="cep" placeholder="XXXXX-XXX" value="{{ old('cep') }}" required autocomplete="off"  onkeypress="$(this).mask('00000-000')">
                        @error('cep') <div class="error">{{ '! '.$message }}</div> @enderror
                    </div>
                    <div>
                        <p class="nomes_cadastros">Área de atuação:</p>
                        <input name="area_atuacao" class="text-input" type="text" id="area" maxlength="30" placeholder="Exemplos: Logística, Financeiro, Tecnologia, Educação" value="{{ old('area_atuacao') }}" required autocomplete="off">
                        @error('area_atuacao') <div class="error">{{ '! '.$message }}</div> @enderror

                        <p class="nomes_cadastros">CNPJ:</p>
                        <input name="cnpj" class="text-input" type="text" id="cnpj" onkeyup="validarCNPJ()" maxlength="20" placeholder="XX.XXX.XXX/0001-XX" value="{{ old('cnpj') }}" required autocomplete="off">
                        @error('cnpj') <div class="error">{{ '! '.$message }}</div> @enderror
                        
                        
 
                        <p class="nomes_cadastros">Email empresarial:</p>
                        <input name="email" class="text-input" type="email" id="email_empresa" maxlength="255" placeholder="mail@example.com" value="{{ old('email') }}" required autocomplete="off" >
                        @error('email') <div class="error">{{ '! '.$message }}</div> @enderror

                        <br><br><br><br><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;<input class="button entra" type="reset" value="Limpar">
                        <input class="button entra" type="submit" value="Cadastrar"><br><br><br><br>
                    </div>
                </div>
                <br><br>
            </form>
            <br>
            <h5>Já possui uma conta?</h5>
            <a href="{{route ('login.create')}}" class="cadastro_usuario">Login</a>
        </div>

        </div>
    <!----------------------------------------------------->


    <script>

        document.getElementById('cnpj').addEventListener('input', function (e) {
        var x = e.target.value.replace(/\D/g, '').match(/(\d{0,2})(\d{0,3})(\d{0,3})(\d{0,4})(\d{0,2})/);
        e.target.value = !x[2] ? x[1] : x[1] + '.' + x[2] + '.' + x[3] + '/' + x[4] + (x[5] ? '-' + x[5] : '');});

function validarCNPJ(cnpj) {
 
    cnpj = cnpj.replace(/[^\d]+/g,'');
 
    if(cnpj == '') return false;
     
    if (cnpj.length != 14)
        return false;
 
    // Elimina CNPJs invalidos conhecidos
    if (cnpj == "00000000000000" || 
        cnpj == "11111111111111" || 
        cnpj == "22222222222222" || 
        cnpj == "33333333333333" || 
        cnpj == "44444444444444" || 
        cnpj == "55555555555555" || 
        cnpj == "66666666666666" || 
        cnpj == "77777777777777" || 
        cnpj == "88888888888888" || 
        cnpj == "99999999999999")
        return redirect('/');
         
    // Valida DVs
    tamanho = cnpj.length - 2
    numeros = cnpj.substring(0,tamanho);
    digitos = cnpj.substring(tamanho);
    soma = 0;
    pos = tamanho - 7;
    for (i = tamanho; i >= 1; i--) {
      soma += numeros.charAt(tamanho - i) * pos--;
      if (pos < 2)
            pos = 9;
    }
    resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
    if (resultado != digitos.charAt(0))
        return false;
         
    tamanho = tamanho + 1;
    numeros = cnpj.substring(0,tamanho);
    soma = 0;
    pos = tamanho - 7;
    for (i = tamanho; i >= 1; i--) {
      soma += numeros.charAt(tamanho - i) * pos--;
      if (pos < 2)
            pos = 9;
    }
    resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
    if (resultado != digitos.charAt(1))
          return false;
           
    return true;
    
}


    </script>

    @endsection
