<?php

namespace App\Controllers\Dash;

use App\Controllers\BaseController;
use App\Controllers\AuditTrailController;
use App\Models\userModel;
use App\Models\Profile\Contact;
use App\Models\Profile\Education;
use App\Models\Profile\Exp;
use App\Models\Profile\Profile;
use App\Models\Profile\Skills;
use App\Models\Profile\Mentoring;   

class ProfileController extends BaseController
{   
    public function __construct(){
        helper(['url', 'form']);
    }

    public function index(){
        $contactModel = new Contact();               //************************************ */
        $educationModel = new Education();
        $expModel = new Exp();                         //for profile
        $profileModel = new Profile();
        $skillsModel = new Skills();                //************************************ */
        $userModel = new userModel();

        $loggedUser = session()->get('loggedUser');
        $userInfo = $userModel->find($loggedUser);

        $contact = $contactModel->where('userId',$loggedUser)->first();
        $education = $educationModel->where(array('userId'=> $loggedUser,'status' => 'active'))->findAll();
        $exp = $expModel->where(array('userId'=> $loggedUser,'status' => 'active'))->findAll();
        $profile = $profileModel->where('userId',$loggedUser)->first();
        $skills = $skillsModel->find($loggedUser);
        
        
        if(!$profile){
            $data = [
                'title' => 'Profile',
                'userInfo' => $userInfo,
                ];

                return view('Pages/Newprofile',$data);
            }

        else{
            if(!$contact){
                $data = [
                    'title' => 'Profile',
                    'userInfo' => $userInfo,
                    ];

                    return view('Pages/newContact',$data);
            }else{
                $data = [
                    'title' => 'Profile',
                    'userInfo' => $userInfo,
                    'profile' => $profile,
                    'contact' => $contact,
                    'experience' => $exp,
                    'education' => $education
                    ];
                  
               return view('user/profile',$data);
               
            }
            
            }


    }

    public function createProfile(){
        $audit = new AuditTrailController();
        $profileModel = new Profile();
        $userModel = new userModel();
        $loggedUser = session()->get('loggedUser');
        $userInfo = $userModel->find($loggedUser);

        $validation =  $this->validate(
            [

                'gender' => [
                    'rules' => 'required',
                    'errors' => ['required' => 'Field cannot be empty',],
                ],

                'civilStatus' => [
                    'rules' => 'required',
                    'errors' => ['required' => 'Field cannot be empty',],
                ],

                'address' => [
                    'rules' => 'required',
                    'errors' => ['required' => 'Field cannot be empty',],
                ],

                'province' => [
                    'rules' => 'required',
                    'errors' => ['required' => 'Field cannot be empty',],
                ],

                'municipality' => [
                    'rules' => 'required',
                    'errors' => ['required' => 'Field cannot be empty',],
                ],

                'barangay' => [
                    'rules' => 'required',
                    'errors' => ['required' => 'Field cannot be empty',],
                ],

                'zip' => [
                    'rules' => 'required',
                    'errors' => ['required' => 'Field cannot be empty',],
                ],

                'description' => [
                    'rules' => 'required',
                    'errors' => ['required' => 'Field cannot be empty',],
                ],

               

            ]);

            

            $data = [
                'title' => 'Profile',
                'userInfo' => $userInfo,
                'validation'=> $this->validator
                ];

            if(!$validation){
                return view('Pages/newProfile',$data);
            } else{
               $middleName = $this->request->getPost('middlename'); 
               $ext = $this->request->getPost('extension');
               $gender = $this->request->getPost('gender');
               $civilStatus = $this->request->getPost('civilStatus');
               $address = $this->request->getPost('address');
               $province = $this->request->getPost('province');
               $municipality = $this->request->getPost('municipality');
               $barangay = $this->request->getPost('barangay');
               $zip = $this->request->getPost('zip');
               $description = $this->request->getPost('description');
               $title = $this->request->getPost('title');

               $image = $this->request->getFile('image');
                if($image->isValid()&& !$image->hasMoved()){
                $imageName = $image->getRandomName();
                $image->move('upload/profile', $imageName);

                $data = [
                    'title' => $title,
                    'userId' => $loggedUser,
                    'image' => $imageName,
                    'middlename' => $middleName,
                    'extension' => $ext,
                    'gender' => $gender,
                    'civilStatus' => $civilStatus,
                    'address' => $address,
                    'province' => $province,
                    'municipality' => $municipality,
                    'barangay' => $barangay,
                    'zip' => $zip,
                    'description' => $description,
                   ];
    
                   $query = $profileModel->insert($data);
                   if(!$query){
                    $audit->index($loggedUser,$userInfo['username'],'profile creation failed');
                    return redirect()->back()->with('fail','Something went wrong');
                } else {
                    $audit->index($loggedUser,$userInfo['username'],'profile created successfully');
                    return redirect()->to('Dash/Dash/profile')->with('success','User registered successfully');
                    
                }
            }else{
                $data = [
                    'title' => $title,
                    'userId' => $loggedUser,
                    'middlename' => $middleName,
                    'extension' => $ext,
                    'gender' => $gender,
                    'civilStatus' => $civilStatus,
                    'address' => $address,
                    'province' => $province,
                    'municipality' => $municipality,
                    'barangay' => $barangay,
                    'zip' => $zip,
                    'description' => $description,
                   ];
    
                   $query = $profileModel->insert($data);
                   if(!$query){
                    $audit->index($loggedUser,$userInfo['username'],'profile creation failed');
                    return redirect()->back()->with('fail','Something went wrong');
                } else {
                    $audit->index($loggedUser,$userInfo['username'],'profile created successfully');
                    return redirect()->to('Dash/Dash/profile')->with('success','User registered successfully');
                    
                }
            }
         
            }


    }

    public function editProfile(){
        $profileModel = new Profile();
        $userModel = new userModel();
        
        $loggedUser = session()->get('loggedUser');
        $userInfo = $userModel->find($loggedUser);
        $profileInfo = $profileModel->where('userId',$loggedUser)->first();

        $data = [
            'title' => 'Profile',
            'userInfo' => $userInfo,
            'profileInfo' => $profileInfo,
            ];
            return view('Pages/editProfile',$data);
        
    }

    public function updateProfile($id){
        $audit = new AuditTrailController();
        $profileModel = new Profile();
        $contactModel = new Contact();
        $userModel = new userModel();
        $mentorModel = new Mentoring();
        

        
        $loggedUser = session()->get('loggedUser');
        $userInfo = $userModel->find($loggedUser);
        $profileInfo = $profileModel->where('id',$id)->first();

        
        $validation =  $this->validate(
            [   
                'firstname' => [
                    'rules' => 'required',
                    'errors' => ['required' => 'Field cannot be empty',],
                ],

                'lastname' => [
                    'rules' => 'required',
                    'errors' => ['required' => 'Field cannot be empty',],
                ],


                'address' => [
                    'rules' => 'required',
                    'errors' => ['required' => 'Field cannot be empty',],
                ],


            ]);

            if(!$validation){
                $data = [
                    'title' => 'Profile',
                    'userInfo' => $userInfo,
                    'profileInfo' => $profileInfo,
                    'validation'=> $this->validator
                    ];
                    return view('user/profile',$data);
            } else{
                $firstname = $this->request->getPost('firstname');
                $lastname = $this->request->getPost('lastname');
                $title = $this->request->getPost('title');
                $ext = $this->request->getPost('suffix');
                $address = $this->request->getPost('address');
                $description = $this->request->getPost('description');

                if(!$profileInfo['image']){
                    $old_image = 'none';
                } else $old_image = $profileInfo['image'];
        
                $image = $this->request->getFile('image');
                
        
                if($image->isValid()&& !$image->hasMoved()){
                        
                    if(file_exists('upload/profile'.$old_image)){
                        unlink('upload/profile'.$old_image);
                    }
        
                    $imageName = $image->getRandomName();
                    $image ->move('upload/profile',$imageName);
        
                    $data = [
                    'firstname' => $firstname,
                    'lastname' => $lastname,
                    'title' => $title,
                    'suffix ' => $ext,
                    'address' => $address,
                    'description' => $description,
                    'image' => $imageName
                    ];
                    
                    $profileModel-> update($id,$data);
                    $userModel -> update($loggedUser, $data);
                    $audit->index($loggedUser,$userInfo['username'],'profile update successfully');
                    return redirect()->to(base_url('Dash/ProfileController'))->with('status','User Updated Successfully'); 
                }else{
                    $data = [
                        'firstname' => $firstname,
                        'lastname' => $lastname,
                        'title' => $title,
                        'suffix' => $ext,
                        'address' => $address,
                        'description' => $description
                    ];
        
                    $profileModel -> update($id, $data);
                    $userModel -> update($loggedUser, $data);
                    $audit->index($loggedUser,$userInfo['username'],'profile update successfully');
                    return redirect()->to(base_url('Dash/ProfileController'))->with('status','User Updated Successfully'); 
                  
                }  
            }
    }
}
