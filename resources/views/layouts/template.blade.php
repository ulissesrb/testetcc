<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Solve</title> <!--titulo da pagina-->
    <link rel="stylesheet" href="/css/style.css" type="text/css">
    {{-- <script src="{{ mix('/js/js_completo.js') }}"></script> --}}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="icon" type="imagens/svg" href="/img/desenho.svg">
    <script src="/js/app.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
</head>

<body>

<center>


    <div id="topo" display="flex">
        <div id="texto_topo">
            <div style="margin-top: 25px;">
                <a href="
                    @guest / @endguest
                    @colab /home_colaborador @endcolab
                    @admin /home_adm @endadmin
                " class="home">
                    <img src="/img/logodefinitiva.svg" alt="logo" width="220" height="170" align="left">
                </a> <br>
            </div>
            <div style="margin-top: 25px;">
                <br><br><div style="display: flex;"><div class="title">Solucione</div><div class="title">seus</div></div>
                <div style="display: flex"><div class="title">próprios</div><div class="title">problemas</div></div>
            </div>
            @colab &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; @endcolab
            @colab &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; @endcolab
            @colab &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; @endcolab
            @colab &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; @endcolab
            @colab &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; @endcolab
            @colab &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; @endcolab

            @admin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; @endadmin
            @admin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; @endadmin
            @admin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; @endadmin


            <div id="perfil" width="50px">
                    <a class="button general" href="
                        @guest / @endguest
                        @colab /home_colaborador @endcolab
                        @admin /home_adm @endadmin
                    ">Home</a>
                    @colab
                    @else
                        <a class="button general" href="
                            @guest {{ route('cadastro_empresa.create') }} @endguest
                            @admin {{ route('cadastro_colaborador.create') }} @endadmin
                        ">
                            @guest Cadastrar Minha Empresa @endguest
                            @admin Cadastrar Colaborador @endadmin
                        </a>
                    @endcolab
                    @guest
                        <a class="button general" href="/quemsomos">Quem Somos</a>
                    @endguest
                    <a class="button general" href="/sobreomasp">Sobre o MASP</a>

                <div class="person">
                    <a href="
                    @guest {{ route ('login.create') }}
                    @else {{ '/perfil' }}
                    @endguest

                    " class="login"><img src="/img/pessoaicon.png" width="30" height="30"></a>
                </div>
            </div>

        </div>

    </div>
    <!------------------------------>

    @yield('content')

    <!----------------------------------------------------->

    <!----------------------------------------------------->

    <div id="rodape">
        <div id="contato_rodape">
            <br><br>
            <p>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              Contato:

            </p>


            <a href="https://www.instagram.com/solveeco/" class="ajuda"><img src="/img/instagram.png" width="30" height="30"></a>
            &nbsp;<a href="meu deussss" class="ajuda"><img src="/img/mail.png" width="30" height="30"></a>

        </div>


        <div id="links_rodape">
            <a href="#topo" ><img src="/img/seta.png" width="25px" height="25px"></a>
        </div>
    </div>
    <!----------------------------------------------------->

</div>

</center>


</body>

</html>
