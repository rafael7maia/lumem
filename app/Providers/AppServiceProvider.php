<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Validator;

class AppServiceProvider extends ServiceProvider
{
	    /**
     * Register any application services.
     *
     * @return void
     */

	public function boot(){
		 
	    Validator::extend('cpf', function($attribute, $value, $params, $validator){
		    $cpf = $value;
		    $cpf = preg_replace('/[^0-9]/', '', $cpf);
		    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
		    if (strlen($cpf) != 11)
		        return false;
		    $cpfsCheck = [
		        '00000000000', 
		        '11111111111', 
		        '22222222222', 
		        '33333333333', 
		        '44444444444', 
		        '55555555555', 
		        '66666666666', 
		        '77777777777', 
		        '88888888888', 
		        '99999999999'
		    ];
		    if(in_array($value, $cpfsCheck))
		        return false;
		    for ($t = 9; $t < 11; $t++) 
		    	{
		        for ($d = 0, $c = 0; $c < $t; $c++) 
		        {
		            $d += $cpf{$c} * (($t + 1) - $c);
		        }
		        $d = ((10 * $d) % 11) % 10;
		        if ($cpf{$c} != $d) {
		            return false;
		        }
		    }
		    return true;
		});
	}
    public function register()
    {
        //
    }
}
