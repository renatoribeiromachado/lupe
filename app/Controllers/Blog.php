<?php
namespace App\Controllers;
use App\Models\BlogModel;

class Blog extends BaseController
{

    private $blogModel;
    
    public function __construct()
    {
        $this->session   = session();
        $this->blogModel = new BlogModel();
    }

    public function index()
    {
        return view('pages/blog',[
            'title'       => 'Blog Lupe Cloud',
            'description' => 'A SUA PLATAFORMA DE MONITORAMENTO DE ATIVOS E SEGURANÇA',
            'blogs'       => $this->blogModel->getBlogUser('created_at', 'desc')->paginate(20),                         
            'pager'       => $this->blogModel->pager
        ]);
    }
    
    public function blogDetalhe($slug = null)
    {
        return view('pages/detalhe-blog',[
            'title'       => 'Blog Lupe Cloud',
            'description' => 'A SUA PLATAFORMA DE MONITORAMENTO DE ATIVOS E SEGURANÇA',
            'blogs'       => $this->blogModel->getBlogDetails($slug)->findAll()
        ]);
    }
    
    public function search()
    {
        $search = $this->request->getVar('search');

        return view('pages/blog',[
            'title'       => 'Blog Lupe Cloud',
            'description' => 'A SUA PLATAFORMA DE MONITORAMENTO DE ATIVOS E SEGURANÇA',
            'blogs'       => $this->blogModel->getBlogSearch($search)->paginate(20),
            'pager'       => $this->blogModel->pager,
        ]);
    }
}