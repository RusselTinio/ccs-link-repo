<?php

namespace App\Controllers\AdminController;

use App\Controllers\BaseController;
use App\Libraries\Hash;
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
           $checkpassword = Hash::verify($password, $adminInfo['password']);
            
            // if(!$checkpassword){
            //     session()->setFlashdata('fail','Incorrect password');
            //     return redirect()->to('Login/Auth/index');
                
            // }   else{
            //     $userId = $userInfo['user_id'];
            //     session()->set('loggedUser', $userId);
            //     return redirect()->to('Dash/Dash');
            // }
            if(!$checkpassword){
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
            'adminInfo' => $adminInfo,
            'admin' => $adminModel->where('role','admin')->findAll(),
        ];

        return view('adminView/superAdminPage',$data);
    }

    public function addAdmin(){
        $adminModel = new AdminModel();
        $loggedUser = session()->get('loggedAdmin');
        $adminInfo = $adminModel->find($loggedUser);
      

        $validation =  $this->validate(
            [

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
                'role' => [
                    'rules' => 'required',
                    'errors' => ['required' => 'Role required',
                                
                    ],
                ],

            ]);
           
            $data = [
                'title' => ' Super Admin',
                'adminInfo' => $adminInfo,
                'validation'=>$this->validator,
                'admin' => $adminModel->where('role','admin')->findAll(),
            ];
               
            if(!$validation){
               return view('adminView/superAdminPage',$data);
              
            } else  {
                $role = $this->request->getPost('role');
                $username = $this->request->getPost('username');
                $password = $this->request->getPost('password');

                $data = [
                    'username' => $username,
                    'password' => Hash::encrypt($password),
                    'role' => $role,
                    
                ];

                $query = $adminModel->insert($data);
                if(!$query){
                    return redirect()->back()->with('fail','Something went wrong');
                } else {
                    return redirect()->to('AdminController/Admin/superAdminView')->with('success','User registered successfully');
                    
                }
                
                

               
            }
    }

   

    public function logout(){
        if(session()->has('loggedAdmin')){
            session()->remove('loggedAdmin');
            return redirect()->to('AdminController/Admin/index?access=out')->with('fail','You are logged out');
        }
    }

    public function delete($acc_num){
        $user = new AdminModel();
        $user->delete($acc_num);
        return redirect()->to(base_url('AdminController/Admin/superAdminView'))->with('status','User Deleted Successfully'); 

    }
    public function editView($acc_num){
        $adminModel = new AdminModel();
        $accInfo = $adminModel->find($acc_num);
        $data = [
            'title' => 'Update Admin',
            'admin' => $accInfo
        ];
        
        return view('adminView/adminUpdate',$data);
    }
    public function update($acc_num){
        $adminModel = new AdminModel();
       
        $accInfo = $adminModel->find($acc_num);
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $role = $this->request->getPost('role');
        $data = [
            'username' => $username,
            'password' => Hash::encrypt($password),
            'role' => $role,
         
        ];
        $adminModel-> update($acc_num,$data);
        return redirect()->to(base_url('AdminController/Admin/superAdminView'))->with('status','User Updated Successfully'); 
    }

    public function announcement(){
        $adminModel = new AdminModel();
        $loggedUser = session()->get('loggedAdmin');
        $adminInfo = $adminModel->find($loggedUser);

        $data = [
            'title' => 'Announcement'
        ];
        return view('adminView/announcement',$data);
    
    }
}
