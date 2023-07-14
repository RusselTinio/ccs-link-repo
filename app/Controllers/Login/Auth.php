<?php

namespace App\Controllers\Login;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Libraries\Hash;

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
                    'password' => Hash::encrypt($password),
                    
                ];

                $query = $userModel->insert($data);
                if(!$query){
                    return redirect()->back()->with('fail','Something went wrong');
                } else {
                        //return redirect()->to('viewRegister')->with('success','User registered successfully');
                    $lastId = $userModel->insertID();
                    session()->set('loggedUser', $lastId);
                    return redirect()->to('Dash/Dash');
                }
                
                

               
            }
        
    }

    public function check(){
        $validation = $this->validate([
            'username' => [
                'rules' => 'required|is_not_unique[users.username]',
                'errors' => ['required' => 'Username required',
                            'is_not_unique' => 'No Account exists'
            
                ],
            ],
            'password' => [
                'rules' => 'required|min_length[5]',
                'errors' => ['required' => 'Password required',
                            'min_length' => 'minimum of 5 characters',
                ],
            ],
           
        ]);

        if(!$validation){
            return view('loginView/login', ['validation'=>$this->validator]);
        } else{
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $userModel = new userModel();

            $userInfo = $userModel->where('username', $username)->first();
            $checkpassword = Hash::verify($password, $userInfo['password']);

            if(!$checkpassword){
                session()->setFlashdata('fail','Incorrect password');
                return redirect()->to('Login/Auth/index');
                
            }   else{
                $userId = $userInfo['id'];
                session()->set('loggedUser', $userId);
                return redirect()->to('Dash/Dash');
            }
        }
    }

    public function logout(){
        if(session()->has('loggedUser')){
            session()->remove('loggedUser');
            return redirect()->to('Login/Auth/index?access=out')->with('fail','You are logged out');
        }
    }
}
