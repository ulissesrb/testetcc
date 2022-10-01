<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GutController extends Controller
{
    public function create() {
        return view('gut');
    }

    public function funcionalidade_gut() {
        $aux = 0;
        for($i=0; $i<=7; $i++)
        {
            $inf[] = "gravidade".$i;
            $inf[] = "urgencia".$i;
            $inf[] = "tendencia".$i;
            $aux++;
            //echo $i;
        }

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

        $gravidade = intval($_SESSION["gravidade$i"]);
        $urgencia = intval($_SESSION["urgencia$i"]);
        $tendencia = intval($_SESSION["tendencia$i"]);
        $conta = $gravidade*$urgencia*$tendencia;
        $array_conta[$i] = $conta;

        arsort($array_conta);
       
    }

    public function index()
    {
        return view('gut', [
            'gut' => 'Valor de gut',
        ]);
    }

}
    

