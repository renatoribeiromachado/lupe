<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\ContactModel;

class Home extends BaseController
{
    private $userModel;
    private $contactModel;

    
    public function __construct()
    {
        $this->userModel    = new UserModel();    
        $this->contactModel = new ContactModel(); 
    }
    
    public function index()
    {
        $data = [
            'title'         => 'Painel de controle',
            'countContacts' => $this->contactModel->countAll(),
            'contacts'      => $this->contactModel->orderBy('created_at','desc')->limit(5)->find()
        ];
        
        echo view('admin/pages/home', $data);
       
    }

}