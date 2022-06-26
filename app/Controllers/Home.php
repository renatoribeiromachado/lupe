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
    
    /** pagina Home**/
    public function index()
    {
        $data = [
            'msg'         => $this->session->getFlashdata('msg'),
            'title'       => 'Lupe Cloud',
            'description' => 'A SUA PLATAFORMA DE MONITORAMENTO DE ATIVOS E SEGURANÇA'
        ];
        
        return view('pages/home', $data);
    }
    
    /** pagina Office**/
    public function office()
    {
        $data = [
            'msg'         => $this->session->getFlashdata('msg'),
            'title'       => 'Lupe offfice 365',
            'description' => ''
        ];
        
        return view('pages/office', $data);
    }
    
    /** pagina Azure**/
    public function azure()
    {
        $data = [
            'msg'         => $this->session->getFlashdata('msg'),
            'title'       => 'Lupe Azure',
            'description' => ''
        ];
        
        return view('pages/azure', $data);
    }
    
    /** pagina AWS**/
    public function aws()
    {
        $data = [
            'msg'         => $this->session->getFlashdata('msg'),
            'title'       => 'Lupe Nuvem Aws',
            'description' => ''
        ];
        
        return view('pages/aws', $data);
    }
    
    /** Salva BD**/
    public function store()
    {
        if($this->request->getMethod() === 'post'){
        
            $data = [
                'url'       => $this->request->getPost('url'),
                'name'      => $this->request->getPost('name'),
                'telephone' => $this->request->getPost('telephone'),
                'email'     => $this->request->getPost('email'),
                'company'   => $this->request->getPost('company'),
                'adress'    => $this->request->getPost('adress'),
                'message'   => $this->request->getPost('message')
            ];

            if($this->contactModel->save($data)){ 
                /**Se conseguiu salvar envia os dados por email tb**/
                $this->sendEmail();
                $this->session->setFlashdata('msg',"<div class='alert alert-success'> :) Mensagem enviada com sucesso!</div>");
                return redirect()->to(base_url('/#lead'));
            }else{
                return redirect()->to(base_url('/#lead'))
                     ->with('errors_validation_model',$this->contactModel->errors())->withInput();
            }
         
        }else{
            return redirect()->to(base_url('/'));
        }
    }
    
    /** Enviar email**/
    public function sendEmail()
    {
        if ($this->request->getMethod() === 'post')
        {
            
            $subject   = "Mensagem via Site";
            $name      = $this->request->getVar('name');
            $emailFrom = $this->request->getVar('email');
            $company   = $this->request->getVar('company');
            $telephone = $this->request->getVar('telephone');
            $message   = $this->request->getVar('message');
            $adress    = $this->request->getVar('adress');

            $email = \Config\Services::email();
            $email->setFrom($emailFrom, $name);
            $email->setTo('renato@markp.com.br');
            //$email->setCC('renato@acessohost.com.br');
            //$email->setBCC('them@their-example.com');

            $email->setSubject($subject);
            $email->setMessage(
                        "Assunto:    " . $subject . 
                        "\nNome:     " . $name . 
                        "\nE-mail:   " . $emailFrom . 
                        "\nTelefone: " . $telephone . 
                        "\nMensagem: " . $message .
                        "\nEndereço: " . $adress 
                    );

            $email->send();

        }else{
            return redirect()->to(base_url('/'));
        }
    }
}