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
       
        return view('home');
        
    }
    public function aboutUs(){
        return view('about-us');
    }
}
