<?php

namespace App\Controllers\Dash;

use App\Controllers\BaseController;
use App\Models\userModel;
use App\Models\Profile\Contact;
use App\Models\Profile\Education;
use App\Models\Profile\Exp;
use App\Models\Profile\Profile;
use App\Models\Profile\Skills;
use App\Libraries\Hash;

class MentoringController extends BaseController
{   
    public function __construct(){
        helper(['url', 'form']);
    }
    public function index()
    {
        echo "Mentoring";
    }
}
