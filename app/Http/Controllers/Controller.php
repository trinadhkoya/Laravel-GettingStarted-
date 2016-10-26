<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    function hello($name){
    	//return "<center>Hello ! Welcome </center>";
    	//you can return view too as i did earlier
    	//you can't return two views at a time.it follows FIFO
    	return view('welcome',array('name'=>$name));
    }
}
