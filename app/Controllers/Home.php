<?php
namespace App\Controllers;
use App\Models\ContactModel;

class Home extends BaseController
{

    private $contactModel;

    public function __construct()
    {
        $this->session      = session();
        $this->contactModel = new ContactModel();
    }
    
    public function index()
    {
        $data = [
            'msg'   => $this->session->getFlashdata('msg'),
            'title' => 'Lupe Cloud',
            'description' => 'A SUA PLATAFORMA DE MONITORAMENTO DE ATIVOS E SEGURANÇA'
        ];
        
        return view('pages/home', $data);
    }
    
    public function office()
    {
        $data = [
            'msg'   => $this->session->getFlashdata('msg'),
            'title' => 'Lupe offfice 365',
            'description' => ''
        ];
        
        return view('pages/office', $data);
    }
    
    public function azure()
    {
        $data = [
            'msg'   => $this->session->getFlashdata('msg'),
            'title' => 'Lupe Azure',
            'description' => ''
        ];
        
        return view('pages/azure', $data);
    }
    
    public function aws()
    {
        $data = [
            'msg'   => $this->session->getFlashdata('msg'),
            'title' => 'Lupe Nuvem Aws',
            'description' => ''
        ];
        
        return view('pages/aws', $data);
    }
    
    public function store()
    {
        
        if($this->request->getMethod() === 'post'){
        
            $data = [
                'msg'       => $this->session->getFlashdata('msg'),
                'url'       => $this->request->getPost('url'),
                'name'      => $this->request->getPost('name'),
                'last_name' => $this->request->getPost('last_name'),
                'email'     => $this->request->getPost('email'),
                'company'   => $this->request->getPost('company'),
                'whatsapp'  => $this->request->getPost('whatsapp'),
                'message'   => $this->request->getPost('message')
            ];
            
           //dd($data);
            
            if($this->contactModel->save($data)){ 
                $this->session->setFlashdata('msg',"<div class='alert alert-success'> Mensagem enviada com sucesso</div>");
                return redirect()->to(base_url('obrigado'));
            }else{
                return redirect()->to(base_url('/#lead'))
                     ->with('errors_validation_model',$this->contactModel->errors())->withInput();
            }
         
        }else{
            return redirect()->to(base_url('/'));
        }
    }
}