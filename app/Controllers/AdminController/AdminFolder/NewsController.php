<?php

namespace App\Controllers\AdminController\adminFolder;

use App\Controllers\BaseController;
use App\Libraries\Hash;
use App\Models\NewsModel;
use App\Models\EventsModel;
use App\Models\AdminModel;

class NewsController extends BaseController
{
    public function index()
    {
        $adminModel = new AdminModel();
        $loggedUser = session()->get('loggedAdmin');
        $adminInfo = $adminModel->find($loggedUser);

        $newsModel = new NewsModel();
        $eventsModel = new EventsModel();
        $newsData = $newsModel->where('Status', 'active')->findall();
        $newsDataArchive = $newsModel->where('Status', 'disabled')->findall();

        $eventsData = $eventsModel->where('status', 'active')->findall(); 
        $eventsDataArchive = $eventsModel->where('status', 'disabled')->findall();

        $data = [
            'adminInfo' => $adminInfo,
            'newsData' => $newsData,
            'eventsData' => $eventsData,

            'newsDataArchive' => $newsDataArchive,
            'eventsDataArchive' => $eventsDataArchive
        ];
        
        
        return view('admin/admin/listofevents-admin', $data);
    }

    public function createNews()
    {
        
        return view('newsevent/NewsAdd');
    }

    public function createEvents()
    {
        
        return view('newsevent/EventsAdd');
    }

    public function editNews()
    {
        $id = $this->request->getPost('editId');
        $fetchNews= new NewsModel();
        $data['news']=$fetchNews->where('id',$id)->first();

        return view('newsevent/NewsEdit',$data);
        return view('newsevent/MainPage', $data);
    }

    public function editEvents($id)
    {
        $fetchEvents= new EventsModel();
        $data['events']=$fetchEvents->where('id',$id)->first();

        return view('newsevent/EventsEdit',$data);
    }

    public function storeNews()
    {
        $newsModel = new NewsModel();
        $currentDate = date('F j, Y');
       

        if($img = $this->request->getFile('news-cover')){
           
            if($img->isValid() && ! $img->hasMoved()){
                $ImageName = $img->getRandomName();
                $img->move('upload/news', $ImageName);
                $data = array(
                    'news_title' => $this->request->getPost('title'),
                    'news_desc' => $this->request->getPost('description'),
                    'date_posted' =>$currentDate,
                    'news_image' => $ImageName,

                );
               
                $newsModel->insert($data);
            
                return redirect()->to('AdminController/AdminFolder/NewsController')->with('success', 'Job Added Successfully!');
        } else{
            $data = array(
                    'news_title' => $this->request->getPost('title'),
                    'news_desc' => $this->request->getPost('description'),
                    'date_posted' =>$currentDate,


            );
           
            $newsModel->insert($data);
        
            return redirect()->to('AdminController/AdminFolder/NewsController')->with('success', 'Job Added Successfully!');
        }
        
    } 
    
        
    }

    public function storeEvents()
    {
        $eventsModel = new EventsModel();

        if($img = $this->request->getFile('eventsCover')){
           
            if($img->isValid() && ! $img->hasMoved()){
                $ImageName = $img->getRandomName();

                $img->move('upload/events', $ImageName);
                $data = array(
                    'events_title' => $this->request->getPost('eventsTitle'),
                    'events_desc' => $this->request->getPost('eventsDescription'),
                    'events_date' => $this->request->getPost('eventsDate'),
                    'events_time' => $this->request->getPost('eventsTime'),
                    'events_image' => $ImageName,

                );

                $eventsModel->insert($data);
            
                return redirect()->to('AdminController/AdminFolder/NewsController')->with('success', 'Job Added Successfully!');
        } else{
            $data = array(
                'events_title' => $this->request->getPost('eventsTitle'),
                'events_desc' => $this->request->getPost('eventsDescription'),
                'events_date' => $this->request->getPost('eventsDate'),
                'events_time' => $this->request->getPost('eventsTime'),
              
 


            );
           
            $eventsModel->insert($data);
            return redirect()->to('AdminController/AdminFolder/NewsController')->with('success', 'Job Added Successfully!');
        }
        
    } 
    }


    public function updateNews()
    {
        $id = $this->request->getPost('editId');
        $updateNews= new NewsModel();
        $db = \db_connect();
        
   
        if($img = $this->request->getFile('newsCover')) {
            if( $img->isValid() && ! $img->hasMoved()) {
                $imageName = $img->getRandomName();
                $img->move('uploads/', $imageName);
        }
    
    if(!empty($_FILES['newsCover']['name'])){
        $db->query("UPDATE tbl_news SET news_image = '$imageName' WHERE id = '$id'");
    }  
        $data = array(
            'news_title' => $this->request->getPost('newsTitle'),
            'news_desc' => $this->request->getPost('newsDescription'),
            
           // 'news_image' => $ImageName,
        );
    
        $updateNews->update($id, $data);
    
        return redirect()->to('AdminController/NewsController/index');
       
    
    }


    } 


    public function updateEvents()
    {
        $id = $this->request->getPost('editEveId');
        $updateEvents= new EventsModel();
        $db = \db_connect();
        
   
        if($img = $this->request->getFile('eventsCover')) {
            if( $img->isValid() && ! $img->hasMoved()) {
                $imageName = $img->getRandomName();
                $img->move('uploads/', $imageName);
        }
    
    if(!empty($_FILES['eventsCover']['name'])){
        $db->query("UPDATE tbl_events SET events_image = '$imageName' WHERE id = '$id'");
    }  
        $data = array(
            'events_title' => $this->request->getPost('eventsTitle'),
            'events_desc' => $this->request->getPost('eventsDescription'),
            'events_date' => $this->request->getPost('eventsDate'),
            'events_time' => $this->request->getPost('eventsTime'),
           
        );
    
        $updateEvents->update($id, $data);
    
        return redirect()->to('AdminController/NewsController/index')->with('success', 'Event Updated Successfully!');
       
    
    }


    } 
       

    

   public function deleteNews(){
        $id = $this->request->getPost('id');
   
       $newsModel = new NewsModel(); //passing model to an object
       $data = [
           'status' => 'disabled'     // changing the column "status" to "disabled"
       ];
       $newsModel-> update($id,$data); // passing the data which contains the status==disabled to the update function of the model
      return redirect()->to('AdminController/AdminFolder/NewsController/'); // redirecting to the given url
            
   }
   public function deleteEvents(){
    $id = $this->request->getPost('id');
    
    $eventsModel = new EventsModel(); //passing model to an object
    $data = [
        'status' => 'disabled'     // changing the column "status" to "disabled"
    ];
    $eventsModel-> update($id,$data); // passing the data which contains the status==disabled to the update function of the model
    return redirect()->to('AdminController/AdminFolder/NewsController/index')->with('success','Event Deleted Successfully'); // redirecting to the given url
         
}

   public function restore($id){
       $restoreModel = new NewsModel();
       $data = [
           'Status' => 'active'  // same as the delete but changing the status to active
       ];
       $restoreModel-> update($id,$data);
       return redirect()->to('AdminController/NewsController/index')->with('success','News Restored Successfully');
            
   }
   public function restoreEvents($id){
    $restoreModel = new EventsModel();
    $data = [
        'events_status' => 'active'  // same as the delete but changing the status to active
    ];
    $restoreModel-> update($id,$data);
    return redirect()->to('AdminController/NewsController/index')->with('success','Event Restored Successfully');
         
}


}
