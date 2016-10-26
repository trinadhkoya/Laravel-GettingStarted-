<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
use View;

class LoginController extends BaseController
{


     public function logmein(Request $request){
/*field id /name should be given to fetch the data*/

        $username=$request->input('username');
        $password=$request->input('password');
        /*you can test whether credentials are corect or not by uncommenting below line
        echo $username,"---",$password;*/

        $checkLogin = DB::table('users')->where(['username'=>$username,'password'=>$password])->get();    

            $this->data['yourname'] = $username;

            return View::make('success',array("data"=>$this->data));

        if(count($checkCredentials)>0){
            
        }else{

            return view('index') ;  
        }

     }
}

?>