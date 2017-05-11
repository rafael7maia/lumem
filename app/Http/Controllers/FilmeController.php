<?php

namespace App\Http\Controllers;

use DB;

class FilmeController extends Controller
{
   public function listar(){

         $results = DB::select("SELECT * FROM filmes");

         return view('listarFilmes', ['filmes' => $results]);

   		
   }
}

?>