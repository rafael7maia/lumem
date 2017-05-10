<?php

namespace App\Http\Controllers;

class HelloController extends Controller
{
   public function helloDefault(){

   		//return view("hello", ['name'=> "Bob"]);
   		return $this->hello("Alice");
   }

   public function hello($name){

   		return view("hello", ['name'=> $name]);

   }
}