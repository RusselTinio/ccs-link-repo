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
use App\Models\Profile\Mentoring;
use App\Models\JobModel;
use App\Models\NewsModel;

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
        $newsModel = new NewsModel();
        $mentorModel = new Mentoring();
        $jobModel = new JobModel();

        $mentorData = $mentorModel->getMentorsWithInfo();
        $newsData = $newsModel->findAll();
        $jobData = $jobModel->findAll();

        if($userInfo['status']=='disabled'){
            $data = [
                'title' => 'Dashboard',
                'userInfo' => $userInfo
                ];
            return view('Pages/disabled',$data);
        } else{
            
            $data = [
                'title' => 'Dashboard',
                'userInfo' => $userInfo,
                'newsData' => $newsData,
                'mentorData' => $mentorData,
                'jobData' => $jobData
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
        $newsModel = new newsModel();

        $newsData = $newsModel->findAll();

        $data = [
            'newsData' => $newsData
        ];

        return view('user/news', $data);
    }

    public function job(){
        $jobModel = new jobModel();

        $jobData = $jobModel->findAll();
        $jobAddress = $jobModel->jobAddressCount();

        $data = [
            'jobdata' => $jobData,
            'jobAddress' => $jobAddress
        ];
        
        return view('user/job', $data);
    }

    public function jobFilter(){
        $jobModel = new jobModel();

        $keyword = $this->request->getPost('keyword');
        $jobAddress = $jobModel->jobAddressCount();
        if($this->request->getPost('area')){
            $area = $this->request->getPost('area');
        } elseif($this->request->getGet('area')){
            $area = $this->request->getGet('area');
        }

        if($this->request->getPost('category')){
            $category = $this->request->getPost('category');
        } elseif($this->request->getGet('category')){
            $category = $this->request->getGet('category');
        }
        
        

      
        
        if(!empty($keyword)&&!empty($area)&&!empty($category)){
            $jobCondition = array('job_title'=>$keyword, 'job_address'=>$area, 'job_category'=>$category);
            $jobData = $jobModel->like($jobCondition)->findAll();
            $data = [
                'jobdata' => $jobData,
                'jobAddress' => $jobAddress
            ];
            return view('user/job', $data);

        } else if(!empty($keyword)&&!empty($area)&&empty($category)){
            $jobCondition = array('job_title'=>$keyword, 'job_address'=>$area,);
            $jobData = $jobModel->like($jobCondition)->findAll();
            $data = [
                'jobdata' => $jobData,
                'jobAddress' => $jobAddress
            ];
            return view('user/job', $data);

        } else if(!empty($keyword)&&empty($area)&&!empty($category)){
            $jobCondition = array('job_title'=>$keyword, 'job_category'=>$category);
            $jobData = $jobModel->like($jobCondition)->findAll();
            $data = [
                'jobdata' => $jobData,
                'jobAddress' => $jobAddress
            ];
            return view('user/job', $data);
        } else if(empty($keyword)&&!empty($area)&&!empty($category)){
            $jobCondition = array('job_address'=>$area, 'job_category'=>$category);
            $jobData = $jobModel->like($jobCondition)->findAll();
            $data = [
                'jobdata' => $jobData,
                'jobAddress' => $jobAddress
            ];
            return view('user/job', $data);
        } else if(!empty($keyword)&&empty($area)&&empty($category)){
            $jobData = $jobModel->like('job_title',$keyword)->findAll();
            $data = [
                'jobdata' => $jobData,
                'jobAddress' => $jobAddress
            ];
            return view('user/job', $data);
        } else if(empty($keyword)&&!empty($area)&&empty($category)){
            $jobData = $jobModel->like('job_address',$area)->findAll();
            $data = [
                'jobdata' => $jobData,
                'jobAddress' => $jobAddress
            ];
            return view('user/job', $data);
        } else if(empty($keyword)&&empty($area)&&!empty($category)){
            $jobData = $jobModel->like('job_category',$category)->findAll();
            $data = [
                'jobdata' => $jobData,
                'jobAddress' => $jobAddress
            ];
            return view('user/job', $data);
        } else if(empty($keyword)&&empty($area)&&empty($category)){
            $jobData = $jobModel->findAll();
            $data = [
                'jobdata' => $jobData,
                'jobAddress' => $jobAddress
            ];
            return view('user/job', $data);
        }

    }
    
}


