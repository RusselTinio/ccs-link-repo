<?php

namespace App\Controllers\Dash;

use App\Controllers\BaseController;
use App\Models\userModel;
use App\Models\Profile\Contact;
use App\Models\Profile\Education;
use App\Models\Profile\Exp;
use App\Models\Profile\Profile;
use App\Models\Profile\Skills;
use App\Models\Profile\Mentoring;
use App\Libraries\Hash;

class MentoringController extends BaseController
{   
    public function __construct(){
        helper(['url', 'form']);
    }
    public function index()
    {   
        $contactModel = new Contact();  
        $profileModel = new Profile();
        $userModel = new userModel();
        $mentorModel = new Mentoring();
        
        $loggedUser = session()->get('loggedUser');
        $userData = $userModel->find($loggedUser);
        $contactData = $contactModel->where('userId',$loggedUser)->first();
        $profileData = $profileModel->where('userId',$loggedUser)->first();
        $mentorData = $mentorModel->where('status','active')->findAll();
        $data = [
            'userData' => $userData,
            'contactData' => $contactData,
            'profileData' => $profileData,
            'mentorData' => $mentorData,
        ];

        
        return view('Pages/mentoring',$data);
    }
    public function addMentor(){
        $userModel = new userModel();
        $mentorModel = new Mentoring();
        $loggedUser = session()->get('loggedUser');
        $userData = $userModel->find($loggedUser);

        $firstname = $this->request->getPost('firstname');
        $lastname  = $this->request->getPost('lastname');
        $title = $this->request->getPost('title');
        $contactNum = $this->request->getPost('contact');
        $facebook = $this->request->getPost('facebook');
        $linkin = $this->request->getPost('linkin');
        $gmail = $this->request->getPost('gmail');
        $description = $this->request->getPost('description');
        $degree = $this->request->getPost('degree');

        $data = [
            'userId' => $loggedUser,
            'firstname' => $firstname,
            'lastname' => $lastname,
            'title' => $title,
            'contactNumber' => $contactNum,
            'facebook' => $facebook,
            'linkin' => $linkin,
            'gmail'=> $gmail,
            'description' => $description,
            'degree' => $degree
        ];
        
        $query = $mentorModel->insert($data);
        
        if(!$query){
        return redirect()->back()->with('fail','Something went wrong');
    } else {
        return redirect()->to('Dash/MentoringController')->with('success','Mentorship registered successfully');
        
    }



        
    }
}
