<?php

use App\Problema;

use App\Http\Controllers\CadastroEmpresaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CadastroColaboradorController;
use App\Http\Controllers\CadastroAdministradorController;
use App\Http\Controllers\CincoWDoisHsController;
use App\Http\Controllers\PorquesController;
use App\Http\Controllers\SubProblemaController;
use App\Http\Controllers\ProblemasController;
use App\Http\Controllers\ProblemasColaboradorController;
use App\Http\Controllers\GutController;
use App\Http\Controllers\ConfigColaboradorController;

use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->middleware('guest');


Route::get('/quemsomos', function () {
    return view('quemsomos');
})->middleware('guest');

Route::get('/sobreomasp', function () {
    return view('sobreomasp');
});

Route::get('/form_cadastro_colaborador', function () {
    return view('form_cadastro_colaborador');
})->middleware('admin');

Route::get('/perfil', function() {
    return view('perfil', [ 'user' => Auth::user() ]);
})->middleware('auth');



Route::get('/problema_principal_colaborador', function() {
    return view('problema_principal_colaborador');
})->middleware('colab');

Route::get('/gut', [GutController::class, 'index'])->middleware('auth');

Route::get('/ishikawa', function() {
    return view('ishikawa');
})->middleware('auth');

Route::get('/cadastro_sub_problema', function() {
    return view('cadastro_sub_problema');

})->middleware('auth');




//rotas novas e adaptadas

Route::prefix('cadastro_empresa')->group(function(){
    Route::get('/', [CadastroEmpresaController::class, 'create'])->name('cadastro_empresa.create')->middleware('guest');
    Route::post('/', [CadastroEmpresaController::class, 'store'])->name('cadastro_empresa.store')->middleware('guest');
});

Route::prefix('cadastro_colaborador')->group(function () {
    Route::get('/', [CadastroColaboradorController::class, 'create'])->name('cadastro_colaborador.create')->middleware('admin');
    Route::post('/', [CadastroColaboradorController::class, 'store'])->name('cadastro_colaborador.store')->middleware('admin');
});

Route::prefix('cadastro_administrador')->group(function () {
    Route::get('/', [CadastroAdministradorController::class, 'create'])->name('cadastro_administrador.create')->middleware('guest');
    Route::post('/', [CadastroAdministradorController::class, 'store'])->name('cadastro_administrador.store')->middleware('guest');
});

Route::get('/logout', [LoginController::class, 'destroy'])->name('logout')->middleware('auth');
Route::prefix('login')->group(function () {
    Route::get('/', [LoginController::class, 'create'])->name('login.create')->middleware('guest');
    Route::post('/', [LoginController::class, 'store'])->name('login.store')->middleware('guest');
});

Route::prefix('CincoWDoisHs')->group(function () {
    Route::get('/', [CincoWDoisHsController::class, 'create'])->name('CincoWDoisHs.create')->middleware('auth');
    Route::post('/', [CincoWDoisHsController::class, 'store'])->name('CincoWDoisHs.store')->middleware('auth');
});

Route::get('/home_adm', [ProblemasController::class, 'index'])->name('home_adm')->middleware('admin');


Route::get('/home_colaborador', [ProblemasColaboradorController::class, 'index'])->name('home_colaborador')->middleware('colab');
Route::prefix('problemas')->group(function () {
    Route::get('/', [ProblemasController::class, 'falseIndex'])->name('problemas.index')->middleware('admin');

    Route::get('/cadastrar', [ProblemasController::class, 'create'])->name('problemas.create')->middleware('admin');
    Route::post('/cadastrar', [ProblemasController::class, 'store'])->name('problemas.store')->middleware('admin');

    Route::get('/{prob}/adicionar_colaborador', [ProblemasController::class, 'addColab']);
    Route::post('/{prob}/adicionar_colaborador', [ProblemasController::class, 'storeColab']);

    Route::get('/{prob}/primeiro_porque', [PorquesController::class, 'primeiro_create'])->name('porques.primeiro_create');
    Route::post('/{prob}/primeiro_porque', [PorquesController::class, 'primeiro_store'])->name('porques.primeiro_store');
    Route::get('/{prob}/segundo_porque', [PorquesController::class, 'segundo_create'])->name('porques.segundo_create');
    Route::post('/{prob}/segundo_porque', [PorquesController::class, 'segundo_store'])->name('porques.segundo_store');
    Route::get('/{prob}/terceiro_porque', [PorquesController::class, 'terceiro_create'])->name('porques.terceiro_create');
    Route::post('/{prob}/terceiro_porque', [PorquesController::class, 'terceiro_store'])->name('porques.terceiro_store');
    Route::get('/{prob}/quarto_porque', [PorquesController::class, 'quarto_create'])->name('porques.quarto_create');
    Route::post('/{prob}/quarto_porque', [PorquesController::class, 'quarto_store'])->name('porques.quarto_store');
    Route::get('/{prob}/quinto_porque', [PorquesController::class, 'quinto_create'])->name('porques.quinto_create');
    Route::post('/{prob}/quinto_porque', [PorquesController::class, 'quinto_store'])->name('porques.quinto_store');

    Route::get('/{prob}/sub_problema', [SubProblemaController::class, 'create'])->middleware('auth');

    Route::get('/{prob}/deletar', [ProblemasController::class, 'remove'])->name('problemas.remove');
    Route::get('/{prob}', [ProblemasController::class, 'show'])->name('problemas.show')->middleware('auth');
    Route::get('/{prob}/{col}/adicionar_colaborador', [ProblemasController::class, 'adicionar_colaborador'])->middleware('admin');


    Route::get('/{prob}/relatorio', [ProblemasController::class, 'relatorio'])->name('relatorio');
});
