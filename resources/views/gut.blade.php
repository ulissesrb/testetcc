<?php
if (!isset($_SESSION["cor"]))
{
    $_SESSION["cor"] = 1;
}

$cor = "campo_gut";
$sem_cor = "campo_gut_cor";

$aux = 0;
for($i=0; $i<=7; $i++)
{
    $inf[] = "gravidade".$i;
    $inf[] = "urgencia".$i;
    $inf[] = "tendencia".$i;
    // $aux++;
    //echo $i;
}

$array_conta;

// echo "Aux = ".$aux;
// var_dump($inf);

$aux_i = 0;

for ($i=0; $i<=20; $i++)
{
    if(!isset($_GET[$inf[$i]])){
        if(!isset($_SESSION[$inf[$i]])){
            $_SESSION[$inf[$i]] = '';
        }
    }else{
        $_SESSION[$inf[$i]] = $_GET[$inf[$i]];
    }
    // echo '1';
}

?>
@extends('layouts.template')

@section('content')

<div id="mae">
    <center>
        <div id="titulos_subproblema">
            <h2>Empresa x</h2>
            <h1 class="subproblema_titulo">Problema y</h1>
       </div>
       <form action="gut" method="GET">
            <div class="tabela">
                <table class="tabela">
                    <thead class="campo_gut_cor">
                        <tr>
                            <th>Subproblema</th>
                            <th>Gravidade</th>
                            <th>Urgência</th>
                            <th>Tendência</th>
                            <th>GUT</th>
                            <th>Classificação</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        for($i=0; $i<=6; $i++)
                        {
                            if($_SESSION["cor"] % 2 ?  $_SESSION["gut_cor"] = $cor :  $_SESSION["gut_cor"] = $sem_cor)
                            {
                                // $class = ($_SESSION["gut_cor"] % 2 == 0) ? 'campo_gut' : 'campo_gut_cor ';
                                $gravidade = intval($_SESSION["gravidade$i"]);
                                $urgencia = intval($_SESSION["urgencia$i"]);
                                $tendencia = intval($_SESSION["tendencia$i"]);
                                $conta = $gravidade*$urgencia*$tendencia;
                                $array_conta[$i] = $conta;
                                arsort($array_conta);
                                // var_dump($_SESSION["gut_class"]);
                                echo"<tr class='".$_SESSION["gut_cor"]."'>
                                    <td>001</td>
                                    <td> <input class='form_campo_gut' type='number' name='gravidade".$i."' id='gravidade' value='".$_SESSION["gravidade$i"]."' max='5' min='1'></td>
                                    <td><input class='form_campo_gut' type='number' name='urgencia".$i."' id='urgencia' value='".$_SESSION["urgencia$i"]."' max='5' min='1'></td>
                                    <td><input class='form_campo_gut' type='number' name='tendencia".$i."' id='tendencia' value='".$_SESSION["tendencia$i"]."' max='5' min='1'></td>
                                    <td> ". $array_conta[$i]. " </td>
                                    <td> </td>
                                    </tr>";
                                $_SESSION["gut_cor"] += 1;
                                $aux_i++;

                                // echo var_dump($_SESSION);
                            }
                            else{
                                $gravidade = intval($_SESSION["gravidade$i"]);
                                $urgencia = intval($_SESSION["urgencia$i"]);
                                $tendencia = intval($_SESSION["tendencia$i"]);
                                $conta = $gravidade*$urgencia*$tendencia;
                                $array_conta[$i] = $conta;
                                arsort($array_conta);
                                // var_dump($_SESSION["gut_class"]);
                                echo" <tr class='campo_gut_cor'>
                                    <td>lslslslslslslllllllllllllllllllllllllllllllllllll</td>
                                    <td> <input class='form_campo_gut' type='number' name='gravidade".$i."' id='gravidade' value='".$_SESSION["gravidade$i"]."' max='5' min='1'></td>
                                    <td><input class='form_campo_gut' type='number' name='urgencia".$i."' id='urgencia' value='".$_SESSION["urgencia$i"]."' max='5' min='1'></td>
                                    <td><input class='form_campo_gut' type='number' name='tendencia".$i."' id='tendencia' value='".$_SESSION["tendencia$i"]."' max='5' min='1'></td>
                                    <td> ". $array_conta[$i]. " </td>
                                    <td> - </td>
                                    </tr>";
                                 $_SESSION["gut_cor"] += 1;
                                 $aux_i++;

                           }
                        }

                            ?>
                    </tbody>
                </table>
            </div>
            <div id="botao_gut">
                <input class="botao_form_gut" type="submit" value="Calcular">
                <input class="botao_form_gut" type="reset" value="Limpar">
            </div>
        </form>
        <?php
           arsort($array_conta);
           var_dump($array_conta);
           echo "<br>";
           foreach ($array_conta as $array => $valor) {
            // $arr[3] será atualizado com cada valor de $arr...
            echo "{$array} => {$valor} ";
            echo "<br>";
            }

        ?>
</div>

@endsection
