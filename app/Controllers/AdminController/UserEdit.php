<?php

namespace App\Controllers\AdminController;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\AdminModel;
use App\Libraries\Hash;

class UserEdit extends BaseController
{
    public function index()
    {
        //
    }

    public function edit($id){
        $userModel = new UserModel();
        $user = $userModel->find($id);
        $data = [
            'title' => 'Edit Account',
            'user' => $user
        ];
        return view('Pages/edit', $data);

    }
    public function update($id){
        $userModel = new UserModel();
        $accInfo = $userModel->find($id);

        $firstname = $this->request->getPost('firstname');
        $lastname = $this->request->getPost('lastname');
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $data = [
            'firstname' => $firstname,
            'lastname' => $lastname,
            'username' => $username,
            'password' => Hash::encrypt($password),
        ];
        $userModel-> update($id, $data);
        return redirect()->to(base_url('AdminController/Admin/superAdminView'))->with('status','User Updated Successfully'); 
        
    }

    public function delete($id){
        $userModel = new UserModel();
       // $userInfo = $userModel->find($id);
        $data = [
            'status' => 'disabled'
        ];
        $userModel-> update($id,$data);
        return redirect()->to(base_url('AdminController/Admin/superAdminView'))->with('status','Admin Deleted Successfully');
            
    }

    public function restore($id){
        $userModel = new UserModel();
       // $userInfo = $userModel->find($id);
        $data = [
            'status' => 'active'
        ];
        $userModel-> update($id,$data);
        return redirect()->to(base_url('AdminController/Admin/superAdminView'))->with('status','Admin Deleted Successfully');
            
    }

}
