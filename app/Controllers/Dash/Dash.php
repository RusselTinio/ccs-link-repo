<?php

namespace App\Controllers\Dash;

use App\Controllers\BaseController;
use App\Models\userModel;

class Dash extends BaseController
{
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
        $userModel = new userModel();
        $loggedUser = session()->get('loggedUser');
        $userInfo = $userModel->find($loggedUser);

        $data = [
            'title' => 'Profile',
            'userInfo' => $userInfo
        ];

        return view('Pages/profile',$data);

    }
}
