@extends('layouts.template')
 
@section('content')
 
    <div id="mae">
        <center>
 
    <!-- nome empresa-->
    <div id="nome_problema">
     
        <p class="nome_empresa_principal">
            <b>Empresa Fantasia</b>
        </p>
   
    </div>
    <!-- nome problema-->
    <div id="nome_problema">
     
        <p class="nome_problema_principal">
            Problema Baixas Vendas
        </p>
   
    </div>
    <br>
    {{-- <!-- nave bar-->
    <div id="nave_bar">
 
       local da barra de progresso
 
    </div> --}}
 
    <div id="funcionalidades_colaborador">
    <!-- lista de colaboradores -->
 
        <div id="lista_colaboradores">
            <div id="titulo_colab_prob">
                <h4>
                Colaboradores
            </h4>
            </div>
            <div id="colab_prob">
                <br>
                    <p class="colab_prob">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Maria José Souza
                        <a href="email"><img src="img/mail.png" alt="logo"
                        width="25" height="25" align="right"></a>
                    </p>
                    <p class="colab_prob">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Antonio Gomes Pereira
                        <a href="email"><img src="img/mail.png" alt="logo"
                        width="25" height="25" align="right"></a>
                    </p>
                    <p class="colab_prob">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Isabela Moraes Silva
                        <a href="email"><img src="img/mail.png" alt="logo"
                        width="25" height="25" align="right"></a>
                    </p>
                    <p class="colab_prob">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Marcos Antônio Rodrigues
                        <a href="email"><img src="img/mail.png" alt="logo"
                        width="25" height="25" align="right"></a>
                    </p>
                    <p class="colab_prob">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lorena de Carvalho Ribeiro
                        <a href="email"><img src="img/mail.png" alt="logo"
                        width="25" height="25" align="right"></a>
                    </p>
            </div>
         
 
           
        </div>        
 
        <div id="botoes_prob_prin">
            <h4>
                Funcionalidades
            </h4>
            <a class="botao_colab" href="primeiro_porque">Continuar problema</a><br><br><br><br>
            <a class="botao_colab" href="primeiro_porque">Relatórios</a><br><br><br><br>
            <a class="botao_colab" href="primeiro_porque">Concluir problema</a><br><br>
        </div>
    </div>
 
 
 
        </center>
    </div>
 
 
 
@endsection
