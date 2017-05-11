<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;




class PessoaController extends Controller
{
   public function cadastrar(Request $request){

   		return view("verPessoa", [
   			'nome' => $request->input('nome'),
   			'email' => $request->input('email'),
   			'cpf' => $request-> input('cpf'),
   			]);
   }
   public function cadastro(){

   		return view("cadastroPessoa", []);

   }   
}

?>