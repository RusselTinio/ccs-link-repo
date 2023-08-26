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

class Mentorship extends BaseController
{   
    public function __construct(){
        helper(['url', 'form']);
    }
    public function index()
    {   $userModel = new UserModel();
        $loggedUser = session()->get('loggedUser');
        $userData = $userModel->find($loggedUser);

       $mentorModel = new Mentoring();
       $mentorData = $mentorModel->getMentorsWithInfo();
       $mentorProfile = $mentorModel->where('userId',$loggedUser)->first();
       $data = [
        'mentorData' => $mentorData,
        'mentorProfile' => $mentorProfile
       ];

       
        //var_dump($data['mentorData']);
        return view('user/mentorship',$data);
    }
    public function addMentor(){
        $contactModel = new Contact();  
        $profileModel = new Profile();
        $userModel = new userModel();
        $mentorModel = new Mentoring();

        $loggedUser = session()->get('loggedUser');
        $userData = $userModel->find($loggedUser);
        $contactData = $contactModel->where('userId',$loggedUser)->first();
        $profileData = $profileModel->where('userId',$loggedUser)->first();

        $data = [
            'userId' => $loggedUser,
            'profileId' => $profileData['id'],
            'contactId' => $contactData['id'],
        ];

        $query = $mentorModel->insert($data);
        if(!$query){
            return redirect()->back()->with('fail','Something went wrong');
        } else {
            return redirect()->to('Dash/MentoringController')->with('success','Education registered successfully');
            
        }

        
    }

    public function displayMentor($id){
        $mentorModel = new Mentoring();
        $mentorData = $mentorModel->where('mentoring.id',$id)->getMentorsWithInfo();

        $data = [
            'mentorData' => $mentorData,
        ];

        return view('Pages/mentorDisplay',$data);
    }    
}
