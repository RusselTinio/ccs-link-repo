<?php

namespace App\Controllers;
use App\Models\UserModel;

class Home extends BaseController
{
    public function __construct(){
        helper(['url', 'form']);
    }
    public function index()
    {
        $data = ['title' => 'CCS-LINK Log In'];
        return view('loginView/login',$data);
        
    }
}
