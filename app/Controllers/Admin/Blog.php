<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\BlogModel;

class Blog extends BaseController
{
    public function __construct()
    {
        $this->session = session();
        $this->blogModel = new BlogModel();  
    }
    
    public function index()
    {

        return view('admin/pages/blog/blog',[
            'msg'         => $this->session->getFlashdata('msg'),
            'title'       => 'Lista de Blogs',
            'description' => 'Cadastro Edição e Exclusão',
            'blogs'       => $this->blogModel->orderBy('created_at', 'desc')->paginate(20),                         
            'pager'       => $this->blogModel->pager,
            'count'       => $this->blogModel->countAll(),
        ]);

    }
    
    //create
    public function create($id = NULL){
        
        $data = [
            
            'msg'         => $this->session->getFlashdata('msg'),
            'title'       => 'Lista de Blogs',
            'description' => 'Cadastro de Blog',
            'blogs'       => $this->blogModel->find($id)
        ];
        
        return view('admin/pages/blog/form', $data);

    }
    
    //store no form
    public function store()
    {
        $img = $this->request->getFile('photo');
        
        //caso a imagem não seja inseida salva só os dados
        if(!$img->isValid()){
            $data = [
                
                    'id'          => $this->request->getVar('id'),
                    'title'       => $this->request->getVar('title'),
                    'slug'        => url_title($this->request->getVar('title'), '-', true),
                    'call_blog'   => $this->request->getVar('call_blog'),
                    'author'      => session()->get('id'),
                    'text'        => $this->request->getVar('text'),
                    'description' => $this->request->getVar('description'),
                    'keyword'     => $this->request->getVar('keyword'),
                    'status'      => $this->request->getVar('status'),
                    'created_at'  => date('Y-m-d', strtotime($this->request->getVar('created_at'))),
                    'user_id'     => session()->get('id')
            ];
        
            if($this->blogModel->save($data)){
               $this->session->setFlashdata('msg',"<div class='alert alert-success'> Cadastrado com sucesso</div>");
                return redirect()->to(base_url('admin/blog'));
            }else{
                echo "erro";
            }
        }else{
            //faz a validação da imagem para salvar no BD
            $validateIMG = $this->validate([
                'photo' =>[
                    'uploaded[photo]',
                    'mime_in[photo,image/jpg,image/jpeg,image/gif,image/png]',
                    'max_size[photo,4096]',
                ],
            ]);

            if($validateIMG){
                $newName = $img->getRandomName();
                $img->move('public/img/blog', $newName);
                $data = [                                
                    'id'          => $this->request->getVar('id'),
                    'title'       => $this->request->getVar('title'),
                    'slug'        => url_title($this->request->getVar('title'), '-', true),
                    'call_blog'   => $this->request->getVar('call_blog'),
                    'photo'       => $newName,
                    'author'      => session()->get('id'),
                    'text'        => $this->request->getVar('text'),
                    'description' => $this->request->getVar('description'),
                    'keyword'     => $this->request->getVar('keyword'),
                    'status'      => $this->request->getVar('status'),
                    'created_at'  => date('Y-m-d', strtotime($this->request->getVar('created_at'))),
                    'user_id'     => session()->get('id')
                ];

                if($this->blogModel->save($data)){
                   $this->session->setFlashdata('msg',"<div class='alert alert-success'> Cadastrado com sucesso</div>");
                    return redirect()->to(base_url('admin/blog'));
                }else{
                    echo "erro";
                }
            }
        }  
    }
    
    public function delete($id = null)
    {
        //dd($id);
        if($this->blogModel->delete($id)){
            $this->session->setFlashdata('msg',"<div class='alert alert-danger'> Deletado com sucesso</div>");
            return redirect()->to(base_url('admin/blog'));
        }
    }
}