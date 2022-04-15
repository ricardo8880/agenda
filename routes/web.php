<?php

use App\Http\Controllers\tarefas;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [tarefas::class, 'index']);

Route::get('/adicionar_tarefa', [tarefas::class, 'adicionarTarefa']);
Route::get('/cadastrar_tarefa', [tarefas::class, 'cadastrarTarefa']);
Route::get('/concluido/{status}/{id}', [tarefas::class, 'concluidoStatus1']);
Route::get('/concluido', [tarefas::class, 'concluido']);
Route::get('/deletar/{id}', [tarefas::class, 'deletar']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
