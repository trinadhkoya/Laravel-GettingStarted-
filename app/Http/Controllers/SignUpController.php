<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
use View;

class SignUpController extends BaseController
{

    use AuthorizesRequests,DispatchesJobs,ValidatesRequests;

     public function letMeSignUp(Request $signupRequest)
    {
        //quite difficut part is like

        //first_name---variable
        //input('firstname')-- input value id 


        $firstName=$signupRequest->input('firstname');
        $lastNname=$signupRequest->input('lastname');
        $userName=$signupRequest->input('username');
        $passWord=$signupRequest->input('password');

        $signup_data=array('first_name'=>$firstName,'last_name'=>$lastNname,'username'=>$userName,'password'=>$passWord);
        DB::table('users')->insert($signup_data);

        $this->data['yourname'] = $userName;

            return View::make('success',array("data"=>$this->data));

    }


}

?>