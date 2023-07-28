<?php

namespace App\Controllers\Dash;

use App\Controllers\BaseController;
use App\Models\userModel;
use App\Models\Profile\Contact;
use App\Models\Profile\Education;
use App\Models\Profile\Exp;
use App\Models\Profile\Profile;
use App\Models\Profile\Skills;

class Dash extends BaseController
{
    public function __construct(){
        helper(['url', 'form']);
    }
    public function index()
    {   $userModel = new userModel();
        $loggedUser = session()->get('loggedUser');
        $userInfo = $userModel->find($loggedUser);

        $data = [
            'title' => 'Dashboard',
            'userInfo' => $userInfo
        ];
        return view('Pages/dashboad',$data);
    }

    public function profile(){
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

                return view('Pages/newProfile',$data);
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
                  
                return view('Pages/profile',$data);
            }
            
            }


    }

    public function createProfile(){
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

             

               $data = [
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
                return redirect()->back()->with('fail','Something went wrong');
            } else {
                return redirect()->to('Dash/Dash/profile')->with('success','User registered successfully');
                
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
        $profileModel = new Profile();
        $contactModel = new Contact();
        $userModel = new userModel();

        
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

               

            ]);

            if(!$validation){
                $data = [
                    'title' => 'Profile',
                    'userInfo' => $userInfo,
                    'profileInfo' => $profileInfo,
                    'validation'=> $this->validator
                    ];
                    return view('Pages/editProfile',$data);
            } else{
                $firstname = $this->request->getPost('firstname');
                $lastname = $this->request->getPost('lastname');
                $middlename = $this->request->getPost('middlename');
                $ext = $this->request->getPost('extension');
                $gender = $this->request->getPost('gender');
                $civilStatus = $this->request->getPost('civilStatus');
                $address = $this->request->getPost('address');
                $province = $this->request->getPost('province');
                $municipality = $this->request->getPost('municipality');
                $barangay = $this->request->getPost('barangay');
                $zip = $this->request->getPost('zip');

                $data = [
                    'firstname' => $firstname,
                    'lastname' => $lastname,
                    'middlename' => $middlename,
                    'extension' => $ext,
                    'gender' => $gender,
                    'civilStatus' => $civilStatus,
                    'address' => $address,
                    'province' => $province,
                    'municipality' => $municipality,
                    'barangay' => $barangay,
                    'zip' => $zip,
                ];
                
                $profileModel -> update($id, $data);
                $userModel -> update($loggedUser, $data);
                return redirect()->to(base_url('Dash/Dash/profile'))->with('status','User Updated Successfully'); 

            }
    }

    public function contact(){
        $profileModel = new Profile();
        $contactModel = new Contact();
        $userModel = new userModel();

        
        $loggedUser = session()->get('loggedUser');
        $userInfo = $userModel->find($loggedUser);
        $contactInfo = $contactModel->where('userId',$loggedUser)->first();
        
        if(!$contactInfo){
            $data = [
                'title' => 'Profile',
                'userInfo' => $userInfo,
               
                ];
               
            return view('Pages/newContact',$data);
        } else{
            $data = [
                'title' => 'Profile',
                'userInfo' => $userInfo,
                'contact' => $contactInfo
               
                ];
            return view('Pages/updateContact',$data);
        }       
    }
    public function createContact(){
        $userModel = new userModel();
        $contactModel = new Contact();

        $loggedUser = session()->get('loggedUser');
        $userInfo = $userModel->find($loggedUser);

        $website = $this->request->getPost('website');
        $email = $this->request->getPost('email');
        $linkin = $this->request->getPost('linkin');
        $facebook = $this->request->getPost('facebook');
        $number = $this->request->getPost('number');

        $data = [
            'userId' => $loggedUser,
            'website' => $website,
            'email' => $email,
            'linkin' => $linkin,
            'facebook' => $facebook,
            'number' => $number
        ];
        

        $query = $contactModel->insert($data);
        if(!$query){
         return redirect()->back()->with('fail','Something went wrong');
     } else {
         return redirect()->to('Dash/Dash/profile')->with('success','Contact registered successfully');
         
     }
                
        

    }

    public function updateContact($id){
        $userModel = new userModel();
        $contactModel = new Contact();

        $loggedUser = session()->get('loggedUser');
        $userInfo = $userModel->find($loggedUser);

        

        $website = $this->request->getPost('website');
        $email = $this->request->getPost('email');
        $linkin = $this->request->getPost('linkin');
        $facebook = $this->request->getPost('facebook');
        $number = $this->request->getPost('number');

        $data = [
            'userId' => $loggedUser,
            'website' => $website,
            'email' => $email,
            'linkin' => $linkin,
            'facebook' => $facebook,
            'number' => $number
        ];
        $contactModel->update($id, $data);
        return redirect()->to(base_url('Dash/Dash/profile'))->with('status','User Updated Successfully'); 



    }

    public function addExp(){
        $userModel = new userModel();
        $loggedUser = session()->get('loggedUser');
        $userInfo = $userModel->find($loggedUser);

        $expModel = new Exp();  
        $position = $this->request->getPost('position');
        $org = $this->request->getPost('org');
        $startYear = $this->request->getPost('startYear');
        $endYear = $this->request->getPost('endYear');

        if(!$endYear){
            $endYear='Currently Working';
        }
     

        $data = [
            'userId' => $loggedUser,
            'position' => $position,
            'org' => $org,
            'startYear' => $startYear,
            'endYear' => $endYear
        ];

        $query = $expModel->insert($data);
        if(!$query){
         return redirect()->back()->with('fail','Something went wrong');
     } else {
         return redirect()->to('Dash/Dash/profile')->with('success','Experience registered successfully');
         
     }

    }

    public function addEd(){
        $userModel = new userModel();
        $loggedUser = session()->get('loggedUser');
        $userInfo = $userModel->find($loggedUser);

        $educationModel = new Education();
        $education = $this->request->getPost('education');
        $school = $this->request->getPost('school');
        $startYear = $this->request->getPost('startYear');
        $endYear = $this->request->getPost('endYear');

        if(!$endYear){
            $endYear='Currently Working';
        }
     

        $data = [
            'userId' => $loggedUser,
            'education' => $education,
            'school' => $school,
            'startYear' => $startYear,
            'endYear' => $endYear
        ];

        $query = $educationModel->insert($data);
        
            if(!$query){
            return redirect()->back()->with('fail','Something went wrong');
        } else {
            return redirect()->to('Dash/Dash/profile')->with('success','Education registered successfully');
            
        }

    }
    public function deleteExp($id){
        $expModel = new Exp();

        $data = [
            'status' => 'disabled',
        ];

        $expModel->update($id, $data);
        return redirect()->to(base_url('Dash/Dash/profile'))->with('status','User Updated Successfully'); 
    }
    
}
