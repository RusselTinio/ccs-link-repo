<?php

namespace App\Controllers\Login;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Auth extends BaseController
{
    public function __construct(){
        helper(['url', 'form']);
    }
    public function index()
    {
        return view('loginView/login');
    }

    public function viewRegister(){
        return view('loginView/register');
    }

    public function saveUser(){
        $userModel = new UserModel();

        $validation =  $this->validate(
            [
                'fistname' => 'required',
                'lastname' => 'required',
                'username' => 'required|is_unique[users.username]',
                'password' => 'required|min_length[5]',
                'cpassword' => 'required|min_length[5]|matches[password]',
            ]);

               
            if(!$validation){
                return view('loginView/register', ['validation'=>$this->validator]);
            } else  echo 'validated';
        
    }
}
