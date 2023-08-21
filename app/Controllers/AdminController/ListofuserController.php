<?php

namespace App\Controllers\AdminController;

use App\Controllers\BaseController;
use App\Libraries\Hash;
use App\Models\FundModel;
use App\Models\AdminModel;
use App\Models\UserModel;

class ListofuserController extends BaseController
{
    public function index()
    {
        $fetchUser = new UserModel();
        $fetchAdmin = new AdminModel();
        
        $data['admins'] = $fetchAdmin->where('status', 'active')->findall();
        $data['archiA'] = $fetchAdmin->where('status', 'disabled')->findall();
        
        $data['users'] = $fetchUser->where('status', 'active')->findall();
        $data['archi'] = $fetchUser->where('status', 'disabled')->findall();
        return view('listofuser/listofuser', $data);
    }
}
