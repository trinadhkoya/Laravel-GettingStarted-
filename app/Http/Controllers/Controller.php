<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    function hello(){
    	//return "<center>Hello ! Welcome </center>";
    	//you can return view too as i did earlier
    	//you can't return two views at a time.it follows FIFO
    	return view('welcome');
    }


    //index with parameter:localhost:8080/index/trinadh
    //trinadh=name here .we are passing that name to index view
    function index($name){
    	return view('index',array('name'=>$name));
    }
}
