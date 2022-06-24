<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\UserModel;

class Usuarios extends BaseController
{
    private $userModel;
    
    public function __construct()
    {
        $this->session = session();
        $this->userModel = new UserModel();  
    }
    
    public function index()
    {
 
        echo view('admin/pages/users/usuarios',[
                    'msg'         => $this->session->getFlashdata('msg'),
                    'title'       => 'Lista de usuários',
                    'description' => 'Visualização e Exclusão',
                    'users'       => $this->userModel->paginate(50),
                    'pager'       => $this->userModel->pager,
                    'count'       => $this->userModel->countAll(),
                ]);
    }
    
    //sore no form
    public function store()
    {
        $img = $this->request->getFile('img');

        //caso a imagem não seja inseida salva só os dados
        if(!$img->isValid()){
            $data = [
                'id'         => $this->request->getVar('id'),
                'name'       => $this->request->getVar('name'),
                'email'      => $this->request->getVar('email'),
                'password'   => md5($this->request->getVar('password')),
                'created_at' => date('Y-m-d H:i:s'),
                'status'     => $this->request->getVar('status')
            ];
        
            if($this->userModel->save($data)){
               $this->session->setFlashdata('msg',"<div class='alert alert-success'> Cadastrado com sucesso</div>");
                return redirect()->to(base_url('admin/usuarios'));
            }else{
                echo "erro";
            }
        }else{
            //faz a validação da imagem para salvar no BD
            $validateIMG = $this->validate([
                'img' =>[
                    'uploaded[img]',
                    'mime_in[img,image/jpg,image/jpeg,image/gif,image/png]',
                    'max_size[img,4096]',
                ],
            ]);

            if($validateIMG){
                $newName = $img->getRandomName();
                $img->move('public/img/users', $newName);
                $data = [
                    'id'         => $this->request->getVar('id'),
                    'name'       => $this->request->getPost('name'),
                    'email'      => $this->request->getPost('email'),
                    'password'   => md5($this->request->getVar('password')),
                    'img'        => $newName,
                    'created_at' => date('Y-m-d H:i:s'),
                    'status'     => $this->request->getVar('status')
                ];

                if($this->userModel->save($data)){
                   $this->session->setFlashdata('msg',"<div class='alert alert-success'> Cadastrado com sucesso</div>");
                    return redirect()->to(base_url('admin/usuarios'));
                }else{
                    echo "erro";
                }
            }
        }  
    }
    
    public function delete($id = null)
    {
        if($id == 1){
            $this->session->setFlashdata('msg',"<div class='alert alert-info'> <i class='fa fa-exclamation-triangle'></i> Usuário Administador, não pode ser excluido!</div>");
            return redirect()->to(base_url('admin/usuarios'));
        }
        if($this->userModel->delete($id)){
            $this->session->setFlashdata('msg',"<div class='alert alert-danger'> Deletado com sucesso</div>");
            return redirect()->to(base_url('admin/usuarios'));
        }
    }
}