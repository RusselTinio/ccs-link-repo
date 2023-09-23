<?php

namespace App\Controllers\AdminController\SuperAdminFolder;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use App\Models\UserModel;
use App\Models\JobModel;

use App\Libraries\Hash;

class SuperAdminController extends BaseController

{
    public function __construct(){
        helper(['url', 'form']);
    }
    public function index()
    {
        
        $adminModel = new AdminModel();
        $userModel = new UserModel(); 
        $loggedAdminId = session()->get('loggedAdmin');
        $loggedAdmin = $adminModel->find($loggedAdminId);
        $activeUser = $userModel->where('status','active')->findAll();
        $disabledUser = $userModel->where('status','disabled')->findAll();
        $adminCondition = array('role' => 'admin','status' => 'active');
        $data = [
            'title' => ' Super Admin',
            'loggedUser' => $loggedAdmin,
            'admin' => $adminModel->where($adminCondition)->findAll(),
            'userInfo' => $activeUser,
            'disabled' =>  $disabledUser];

            return view('admin/superadmin/superadmin',$data);

    }
    public function logout(){
        if(session()->has('loggedAdmin')){
            session()->remove('loggedAdmin');
            return redirect()->to('AdminController/Admin?access=out')->with('fail','You are logged out');
        }
    }
    

    public function addAdmin(){
        $adminModel = new AdminModel();
        $userModel = new UserModel(); 
        $loggedAdminId = session()->get('loggedAdmin');
        $loggedAdmin = $adminModel->find($loggedAdminId);
        $activeUser = $userModel->where('status','active')->findAll();
        $disabledUser = $userModel->where('status','disabled')->findAll();
        $adminCondition = array('role' => 'admin','status' => 'active');
        
      

        $validation =  $this->validate(
            [
                'firstname' => [
                    'rules' => 'required',
                    'errors' => ['required' => 'First name required',
                    ],
                ], 

                'lastname' => [
                    'rules' => 'required',
                    'errors' => ['required' => 'Last name required',
                    ],
                ],

                'username' => [
                    'rules' => 'required|is_unique[admin.username]',
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
                'loggedUser' => $loggedAdmin,
                'admin' => $adminModel->where($adminCondition)->findAll(),
                'userInfo' => $activeUser,
                'disabled' =>  $disabledUser,
                'validation'=> $this->validator
            ];
               
            if(!$validation){
                return view('adminView/superAdminPage',$data);
               
              
            } else  {
                $role = $this->request->getPost('role');
                $username = $this->request->getPost('username');
                $password = $this->request->getPost('password');
                $firstname = $this->request->getPost('firstname');
                $lastname = $this->request->getPost('lastname');


                $data = [
                    'username' => $username,
                    'password' => Hash::encrypt($password),
                    'firstname' => $firstname,
                    'lastname' => $lastname,
                    'role' => $role,
                    
                ];

                $query = $adminModel->insert($data);
                if(!$query){
                    return redirect()->back()->with('fail','Something went wrong');
                } else {
                    return redirect()->to('AdminController/SuperAdminController')->with('success','User registered successfully');
                    
                }
                
                

               
            }
    }

    public function userList(){
        $userModel = new UserModel(); 
        $adminModel = new AdminModel();
        $activeUser = $userModel->where('status','active')->findAll();
        $disabledUser = $userModel->where('status','disabled')->findAll();
        $loggedAdminId = session()->get('loggedAdmin');
        $loggedAdmin = $adminModel->find($loggedAdminId);
        $adminCondition = array('role' => 'admin','status' => 'active');

        $data = [
            "activeUser" => $activeUser,
            "disabledUser" => $disabledUser,
            'loggedUser' => $loggedAdmin,
        ];

        return view('admin/superadmin/listofusers', $data);


    }

    public function adminList(){
        $adminModel = new AdminModel();
        $userModel = new UserModel(); 
        $loggedAdminId = session()->get('loggedAdmin');
        $loggedAdmin = $adminModel->find($loggedAdminId);
        $adminCondition = array('role' => 'admin','status' => 'active');

        $data = [
            'loggedUser' => $loggedAdmin,
            'admin' => $adminModel->where($adminCondition)->findAll()
        ];
        
        return view('admin/superadmin/listofadmin', $data);
    }

 

    

}
