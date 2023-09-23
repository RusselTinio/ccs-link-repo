<?php

namespace App\Controllers\AdminController\adminFolder;

use App\Controllers\BaseController;
use App\Libraries\Hash;
use App\Models\FundModel;
use App\Models\AdminModel;
use App\Models\UserModel;

class ListofuserController extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();
        $adminModel = new AdminModel();
        $loggedUser = session()->get('loggedAdmin');
        $adminInfo = $adminModel->find($loggedUser);
        
        $userData = $userModel->where('status', 'active')->findall();
        $useDataArchive = $userModel->where('status', 'disabled')->findAll();

        $data = [
            'adminInfo' => $adminInfo,
            'userData' => $userData,
            'useDataArchive' => $useDataArchive
        ];
        return view('admin/admin/listofusers-admin', $data);
    }
}
