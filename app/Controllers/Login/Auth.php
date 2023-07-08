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

                'firstname' => [
                    'rules' => 'required',
                    'errors' => ['required' => 'First name required',],

                ],
                'lastname' => [
                    'rules' => 'required',
                    'errors' => ['required' => 'Last name required',],

                ],
                'username' => [
                    'rules' => 'required|is_unique[users.username]',
                    'errors' => ['required' => 'Username required',
                                'is_unique' => 'Username already taken'
                
                    ],
                ],
                'password' => [
                    'rules' => 'required|min_length[5]',
                    'errors' => ['required' => 'Password required',
                                'min_length' => 'minimum of 5 characters',
                    ],
                ],
                'cpassword' => [
                    'rules' => 'required|min_length[5]|matches[password]',
                    'errors' => ['required' => 'Password need confirmation',
                                'min_length' => 'minimum of 5 characters',
                                'matches' => 'must be match to the password',
                    ],
                ],

            ]);
            // var_dump($validation);

               
            if(!$validation){
                return view('loginView/register', ['validation'=>$this->validator]);
            } else  {
                $firstname = $this->request->getPost('firstname');
                $lastname = $this->request->getPost('lastname');
                $firstname = $this->request->getPost('firstname');
                $username = $this->request->getPost('username');
                $password = $this->request->getPost('password');

                $data = [
                    'firstname' => $firstname,
                    'lastname' => $lastname,
                    'username' => $username,
                    
                ];

               
            }
        
    }
}
