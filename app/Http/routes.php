<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->welcome();
});

$app->get('/hello/', 'HelloController@helloDefault');
$app->get('/hello/{name}', 'HelloController@hello');

//$app->post('/pessoas/', 'PessoaController@cadastrar');
$app->post('/pessoas/', 'PessoaController@cadastrar');
$app->get('/pessoas/cadastro', 'PessoaController@cadastro');

?>
