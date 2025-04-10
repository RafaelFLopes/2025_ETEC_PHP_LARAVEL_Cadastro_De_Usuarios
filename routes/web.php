<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>


<?php

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

use App\Models\Produto;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/cadastrar-produto', function (Request $request) {
    
    Produto::create([
        'nome' => $request->nome,
        'telefone' => $request->telefone,
        'origem' => $request->origem,
        'data' => $request->data,
        'observacao' => $request->observacao
    ]);

    echo "    
    <div class= 'container text aling'>
        <div class='card'>
        <div class='card-header bg-success bg-subtle'>
            Mensagem do sistema
        </div>
        <div class='card-body'>
            <h5 class='card-title'>Cadastrado</h5>
            <p class='card-text'>Usuário cadastrado com sucesso!</p>
            <a href='/' class='btn btn-success'>Voltar</a>
        </div>
        </div>
    </div>
    ";
});

Route::get('/listar-clientes', function () {
    $produtos = Produto::all();
    return view('listar-todos', ['produtos' => $produtos]);
});

Route::get('/listar-produto/{id}', function ($id) {
    $produto = Produto::find($id);
    return view('listar', ['produto' => $produto]);
});

Route::get('/editar-produto/{id}', function($id){ 
    $produto = Produto::find($id); 
    return view('editar', ['produto' => $produto]); 
}); 

Route::post('/editar-produto/{id}',function (Request $request, $id) { 
    $produto = Produto::find($id); 

    $produto->update([ 
    'nome' => $request->nome,
    'telefone' => $request->telefone,
    'origem' => $request->origem,
    'data' => $request->data,
    'observacao' => $request->observacao
    ]); 

    echo "    
    <div class= 'container text aling'>
        <div class='card'>
        <div class='card-header bg-success bg-subtle'>
            Mensagem do sistema
        </div>
        <div class='card-body'>
            <h5 class='card-title'>Editado</h5>
            <p class='card-text'>Usuário editado com sucesso!</p>
            <a href='/listar-clientes' class='btn btn-success'>Voltar</a>
        </div>
        </div>
    </div>
    ";
});

Route::delete('/excluir-produto/{id}',function($id) { 
    //dd($request->all()); 
    $produto = Produto::find($id); 
    $produto->delete(); 

    echo "    
    <div class= 'container text aling'>
        <div class='card'>
        <div class='card-header bg-success bg-subtle'>
            Mensagem do sistema
        </div>
        <div class='card-body'>
            <h5 class='card-title'>Excluído</h5>
            <p class='card-text'>Usuário excluído com sucesso!</p>
            <a href='/' class='btn btn-success'>Voltar</a>
        </div>
        </div>
    </div>
    ";
});
