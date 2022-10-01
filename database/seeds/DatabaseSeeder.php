<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Empresa;
use App\Colaborador;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $emp = new Empresa();
        $emp->nome = "Empresinha";
        $emp->razao_social = "Empresinha Ltda";
        $emp->area_atuacao = "AreaExemplo";
        $emp->cnpj = "CnpjExemplo";
        $emp->num_funcionarios = 20;
        $emp->cep = "CepExemplo";
        $emp->email = "empresinha@contato.com";
        $emp->excluido = false;
        $emp->save();

        $col = new Colaborador();
        $col->nome = "Joelso";
        $col->cargo = "Contador";
        $col->email = "joelso@gmail.com";
        $col->password = Hash::make('password');
        $col->administrador = true;
        $col->excluido = false;
        $col->empresa_id = 1;
        $col->save();
    }
}
