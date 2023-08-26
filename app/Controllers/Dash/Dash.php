<?php
//this is my branch
namespace App\Controllers\Dash;

use App\Controllers\BaseController;
use App\Models\userModel;
use App\Models\Profile\Contact;
use App\Models\Profile\Education;
use App\Models\Profile\Exp;
use App\Models\Profile\Profile;
use App\Models\Profile\Skills;
use App\Libraries\Hash;

class Dash extends BaseController
{
    public function __construct(){
        helper(['url', 'form']);
    }
    public function index()
    {   $userModel = new userModel();
        $loggedUser = session()->get('loggedUser');
        $userInfo = $userModel->find($loggedUser);

        if($userInfo['status']=='disabled'){
            $data = [
                'title' => 'Dashboard',
                'userInfo' => $userInfo
                ];
            return view('Pages/disabled',$data);
        } else{
            
            $data = [
                'title' => 'Dashboard',
                'userInfo' => $userInfo
                ];
                return view('user/home',$data);
        }

    }
    public function userEdit(){
        $userModel = new userModel();
        $loggedUser = session()->get('loggedUser');
        $userInfo = $userModel->find($loggedUser);

        $data = [
            'userInfo' => $userInfo
        ];

        return view('Pages/userEdit',$data);
    }

    public function userUpdate(){
        $userModel = new userModel();
        $loggedUser = session()->get('loggedUser');
        $userInfo = $userModel->find($loggedUser);

        $validation =  $this->validate(
            [

                'oldpassword' => [
                    'rules' => 'required',
                    'errors' => ['required' => 'Field cannot be empty',],
                ],
                'password' => [
                    'rules' => 'required|min_length[8]',
                    'errors' => ['required' => 'Field cannot be empty',
                    'min_length' => 'Password must be atleast 8 characters long'],
                ],
                'cpassword' => [
                    'rules' => 'required|min_length[8]|matches[password]',
                    'errors' => ['required' => 'Field cannot be empty',
                    'min_length' => 'Password must be atleast 8 characters long',
                    'matches' => 'Password does not match'],
                ],
                
            ]);

            $data = [
                'userInfo' => $userInfo,
                'validation'=> $this->validator
                ];
            if(!$validation){
                return view('Pages/userEdit',$data);
            } else{
                $oldpassword = $this->request->getPost('oldpassword');
                $password = $this->request->getPost('password');
                $cpassword = $this->request->getPost('cpassword');
                $checkpassword = Hash::verify($oldpassword, $userInfo['password']);
                $checknewpassword = Hash::verify($password, $userInfo['password']);

                if(!$checkpassword){
                    session()->setFlashdata('fail','Old password do not match');
                    return redirect()->to('Dash/Dash/userEdit');
                }
                else {
                    if($checknewpassword){
                        session()->setFlashdata('fail','New Password should not be the same as old password');
                    return redirect()->to('Dash/Dash/userEdit');
                    } else{
                        $data = [
                            'password' => Hash::encrypt($password),
                            
                        ];

                        $userModel -> update($loggedUser, $data);
                        return redirect()->to(base_url('Dash/ProfileController'))->with('status','User Updated Successfully'); 
                    }
                }

                
            }

    }

    public function userDeactivate(){
        $userModel = new userModel();

        $loggedUser = session()->get('loggedUser');
        $userInfo = $userModel->find($loggedUser);

        $data = [
            'status' => 'disabled',
        ];
        $userModel -> update($loggedUser, $data);
        return redirect()->to(base_url('Login/Auth/logout')); 
    }

    public function news(){

        return view('user/news');
    }

    public function job(){
        return view('user/job');
    }
    
}


