<?php

namespace App\Controllers\AdminController\adminFolder;

use App\Controllers\BaseController;
use App\Libraries\Hash;
use App\Models\JobModel;
use App\Models\AdminModel;
use App\Models\UserModel;


class JobController extends BaseController
{
    public function index()
    {
        $fetchJob = new JobModel();
        $adminModel = new AdminModel();
        $loggedUser = session()->get('loggedAdmin');
        $adminInfo = $adminModel->find($loggedUser);

        $data = [
            'adminInfo' => $adminInfo,
            'jobData' => $fetchJob->where('Status', 'active')->findall(),
            'archi' => $fetchJob->where('Status', 'disabled')->findall()
        ];

        return view('admin/admin/joblist', $data);
    }

    public function createJob()
    {
        
        return view('jobposting/jobadd');
    }

    public function editJob($id)
    {
       $fetchJob= new JobModel();
        $data['jobs']=$fetchJob->where('id',$id)->first();

        return view('jobposting/jobedit',$data);
    }

    public function storeJob()
    {
        $insertJob = new JobModel();

        if($img = $this->request->getFile('job_cover')){
            if($img->isValid() && ! $img->hasMoved()){
                $ImageName = $img->getRandomName();
                $img->move('upload/jobs', $ImageName);      
                $data = array(
                    'job_title' => $this->request->getPost('jobTitle'),
                    'job_company' => $this->request->getPost('jobCompany'),
                    'job_description' => $this->request->getPost('jobDescription'),
                    'job_category' => $this->request->getPost('jobCategory'),
                    'job_address' => $this->request->getPost('jobAddress'),
                    'city' => $this->request->getPost('jobCity'),
                    'job_salary' => number_format($this->request->getPost('jobSalary'), 2, '.', ','),
                    'job_email' => $this->request->getPost('jobEmail'),
                    'job_contacts' => $this->request->getPost('jobContacts'),
                    'job_website' => $this->request->getPost('jobWebsite'),
                    'job_cover' => $ImageName,

                );
               
                $insertJob->insert($data);
            
                return redirect()->to('AdminController/AdminFolder/JobController/index')->with('success', 'Job Added Successfully!');
        } else{
            $data = array(
                'job_title' => $this->request->getPost('jobTitle'),
                'job_company' => $this->request->getPost('jobCompany'),
                'job_description' => $this->request->getPost('jobDescription'),
                'job_category' => $this->request->getPost('jobCategory'),
                'job_address' => $this->request->getPost('jobAddress'),
                'job_salary' => number_format($this->request->getPost('jobSalary'), 2, '.', ','),
                'job_email' => $this->request->getPost('jobEmail'),
                'job_contacts' => $this->request->getPost('jobContacts'),
                'job_website' => $this->request->getPost('jobWebsite'),


            );
           
            $insertJob->insert($data);
        
            return redirect()->to('AdminController/AdminFolder/JobController/index')->with('success', 'Job Added Successfully!');
        }
        
    }
    
        
    }
    public function updateJob($id)
    {
        $updateJob= new JobModel();
        $db = \db_connect();

        if($img=$this->request->getfile('jobCover')){
            if($img->isValid() &&! $img->hasMoved()){
                $imageName=$img->getRandomName();
                $img->move('upload/jobs',$imageName);
            }
        }

        if(!empty($_FILES['jobCover']['name'])){
            $db->query("UPDATE tbl_jobs SET job_cover = '$imageName' WHERE id = '$id'");
        }   
    
    
        $data = array(
            'job_title' => $this->request->getPost('jobTitle'),
            'job_company' => $this->request->getPost('jobCompany'),
            'job_description' => $this->request->getPost('jobDescription'),
            'job_category' => $this->request->getPost('jobCategory'),
            'job_address' => $this->request->getPost('jobAddress'),
            'job_salary' => $this->request->getPost('jobSalary'),
            'job_email' => $this->request->getPost('jobEmail'),
            'job_contacts' => $this->request->getPost('jobContacs'),
            'job_website' => $this->request->getPost('jobWebsite'),
            
            
            
            
        );
    
        $updateJob->update($id, $data);
    
        return redirect()->to('AdminController/JobController/index')->with('success', 'Job Details Updated Successfully!');
        }
       

    #public function deleteJob($id)
    #{
       # $deleteJob = new JobModel();
         #   $deleteJob->delete($id);
    
           # return redirect()->to('/jobposting/joblist')->with('success', 'Job Details Deleted Successfully!');
   # }

   public function deleteJob($id){
    $deleteModel = new JobModel(); //passing model to an object
    $data = [
        'Status' => 'disabled'     // changing the column "status" to "disabled"
    ];
    $deleteModel-> update($id,$data); // passing the data which contains the status==disabled to the update function of the model
   return redirect()->to('AdminController/JobController/index')->with('success','Job Deleted Successfully'); // redirecting to the given url
         
}

public function restore($id){
    $restoreModel = new JobModel();
    $data = [
        'Status' => 'active'  // same as the delete but changing the status to active
    ];
    $restoreModel-> update($id,$data);
    return redirect()->to('AdminController/JobController/index')->with('success','Job Restored Successfully');
         
}
}
