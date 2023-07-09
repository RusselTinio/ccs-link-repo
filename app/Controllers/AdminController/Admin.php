<?php

namespace App\Controllers\AdminController;

use App\Controllers\BaseController;
use App\Models\AdminModel;

class Admin extends BaseController
{
    public function __construct(){
        helper(['url', 'form']);
    }
    public function index()
    {   
        return view('adminView/adminLogin');
    }

    public function check(){
        $validation = $this->validate([
            'username' => [
                'rules' => 'required|is_not_unique[admin.username]',
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
            return view('AdminView/Adminlogin', ['validation'=>$this->validator]);
        } else{
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $adminModel = new AdminModel();

            $adminInfo = $adminModel->where('username', $username)->first();
           // $checkpassword = Hash::verify($password, $userInfo['password']);
            
            // if(!$checkpassword){
            //     session()->setFlashdata('fail','Incorrect password');
            //     return redirect()->to('Login/Auth/index');
                
            // }   else{
            //     $userId = $userInfo['user_id'];
            //     session()->set('loggedUser', $userId);
            //     return redirect()->to('Dash/Dash');
            // }
            if($password!=$adminInfo['password']){
                session()->setFlashdata('fail','Incorrect password');
                return redirect()->to('AdminController/Admin');
                
            }   else{
                $adminId = $adminInfo['acc_num'];
                $role = $adminInfo['role'];
                session()->set('loggedAdmin', $adminId);
                if($role=='superadmin'){
                    return redirect()->to('adminController/Admin/superAdminView');
                } else return redirect()->to('adminController/Admin/adminView');
                
              
            }
        }
    }

    public function adminView(){
        $adminModel = new AdminModel();
        $loggedUser = session()->get('loggedAdmin');
        $adminInfo = $adminModel->find($loggedUser);
        $data = [
            'title' => 'Admin',
            'adminInfo' => $adminInfo
        ];

        return view('adminView/adminPage',$data);
    }

    public function superAdminView(){
        $adminModel = new AdminModel();
        $loggedUser = session()->get('loggedAdmin');
        $adminInfo = $adminModel->find($loggedUser);
        $data = [
            'title' => ' Super Admin',
            'adminInfo' => $adminInfo
        ];

        return view('adminView/superAdminPage',$data);
    }

    public function logout(){
        if(session()->has('loggedAdmin')){
            session()->remove('loggedAdmin');
            return redirect()->to('AdminController/Admin/index?access=out')->with('fail','You are logged out');
        }
    }
}
