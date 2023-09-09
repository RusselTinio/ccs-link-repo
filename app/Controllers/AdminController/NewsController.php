<?php

namespace App\Controllers\AdminController;

use App\Controllers\BaseController;
use App\Libraries\Hash;
use App\Models\NewsModel;
use App\Models\EventsModel;

class NewsController extends BaseController
{
    public function index()
    {

        $fetchNews = new NewsModel();
        $fetchEvents = new EventsModel();
        #$data['news'] = $fetchNews->findall();
        $data['news'] = $fetchNews->where('Status', 'active')->findall();
        $data['archi'] = $fetchNews->where('Status', 'disabled')->findall();

        $data['events'] = $fetchEvents->where('events_status', 'active')->findall();
        $data['events_archi'] = $fetchEvents->where('events_status', 'disabled')->findall();
        
        
        return view('newsevent/MainPage', $data);
    }

    public function createNews()
    {
        
        return view('newsevent/NewsAdd');
    }

    public function createEvents()
    {
        
        return view('newsevent/EventsAdd');
    }

    public function editNews($id)
    {
        $fetchNews= new NewsModel();
        $data['news']=$fetchNews->where('id',$id)->first();

        return view('newsevent/NewsEdit',$data);
    }

    public function editEvents($id)
    {
        $fetchEvents= new EventsModel();
        $data['events']=$fetchEvents->where('id',$id)->first();

        return view('newsevent/EventsEdit',$data);
    }

    public function storeNews()
    {
        $insertNews = new NewsModel();
        if(!empty($_FILES['newsCover']['name'])){
        if($img = $this->request->getFile('newsCover')){
            if($img->isValid() && ! $img->hasMoved()){
                $ImageName = $img->getRandomName();
                $img->move('uploads/', $ImageName);

        }
    }
    
        $data = array(
            'news_title' => $this->request->getPost('newsTitle'),
            'news_desc' => $this->request->getPost('newsDescription'),
            
            'news_image' => $ImageName,
        );

        $insertNews->insert($data);

        return redirect()->to('AdminController/NewsController/index')->with('success', 'News Added Successfully!');
    }else{
        $data = array(
            'news_title' => $this->request->getPost('newsTitle'),
            'news_desc' => $this->request->getPost('newsDescription'),
            
            'news_image' => $ImageName,
        );

        $insertNews->insert($data);

        return redirect()->to('AdminController/NewsController/index')->with('success', 'News Added Successfully!');
    }
    }

    public function storeEvents()
    {
        $insertEvents = new EventsModel();
        if(!empty($_FILES['eventsCover']['name'])){
        if($img = $this->request->getFile('eventsCover')){
            if($img->isValid() && ! $img->hasMoved()){
                $ImageName = $img->getRandomName();
                $img->move('uploads/', $ImageName);

        }
    }
    
        $data = array(
            'events_title' => $this->request->getPost('eventsTitle'),
            'events_desc' => $this->request->getPost('eventsDescription'),
            'events_date' => $this->request->getPost('eventsDate'),
            'events_time' => $this->request->getPost('eventsTime'),
            'events_image' => $ImageName,
        );

        $insertEvents->insert($data);

        return redirect()->to('AdminController/NewsController/index')->with('success', 'Event Added Successfully!');
    }else{
        $data = array(
            'events_title' => $this->request->getPost('eventsTitle'),
            'events_desc' => $this->request->getPost('eventsDescription'),
            'events_date' => $this->request->getPost('eventsDate'),
            'events_time' => $this->request->getPost('eventsTime'),
            'events_image' => $ImageName,
        );

        $insertEvents->insert($data);

        return redirect()->to('AdminController/NewsController/index')->with('success', 'Event Added Successfully!');
    }
    }


    public function updateNews($id)
    {
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
    
        return redirect()->to('AdminController/NewsController/index')->with('success', 'News Updated Successfully!');
       
    
    }


    } 


    public function updateEvents($id)
    {
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
       

    #public function deleteNews($id)
    #{
       # $deleteNews = new NewsModel();
         #  $deleteNews->delete($id);
    
         #  return redirect()->to('/newsevents/MainPage')->with('success', 'News Deleted Successfully!');
   # }
    

   public function deleteNews($id){
       $deleteModel = new NewsModel(); //passing model to an object
       $data = [
           'Status' => 'disabled'     // changing the column "status" to "disabled"
       ];
       $deleteModel-> update($id,$data); // passing the data which contains the status==disabled to the update function of the model
      return redirect()->to('AdminController/NewsController/index')->with('success','News Deleted Successfully'); // redirecting to the given url
            
   }
   public function deleteEvents($id){
    $deleteModel = new EventsModel(); //passing model to an object
    $data = [
        'events_status' => 'disabled'     // changing the column "status" to "disabled"
    ];
    $deleteModel-> update($id,$data); // passing the data which contains the status==disabled to the update function of the model
   return redirect()->to('AdminController/NewsController/index')->with('success','Event Deleted Successfully'); // redirecting to the given url
         
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
