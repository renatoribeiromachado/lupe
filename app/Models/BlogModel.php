<?php

namespace App\Models;
use CodeIgniter\Model;

class BlogModel extends Model
{
    protected $table         = 'blog';
    protected $primaryKey    = 'id';            
    protected $allowedFields = [
                                'photo',
                                'title',
                                'slug',
                                'call_blog',
                                'author',
                                'text',
                                'description',
                                'keyword',
                                'status',
                                'created_at',
                                'user_id'
                            ];
    
    /**Join**/ 
    public function getBlogUser()
    {
        $this
            ->select('b.id,b.photo,b.title,b.slug,b.author,b.call_blog,b.created_at,u.name')
            ->from('blog b', true)
            ->join('users u','u.id = b.user_id', 'inner')
            ->where('b.status', '1');
            //->get() //so se precisar executar lastQuery;
            // dd($this->getLastQuery());
            return $this;
    }
    
    /*details*/
    public function getBlogDetails($slug) {

        $this
            ->select('b.id,b.photo,b.title,b.text,b.slug,b.author,b.call_blog,b.created_at,u.name')
            ->from('blog b', true)
            ->join('users u','u.id = b.user_id', 'inner')
            ->where('b.slug', $slug);
            
            return $this;
    }
    
    /*search*/
    public function getBlogSearch($search) {

        $this
            ->select('b.id,b.photo,b.title,b.text,b.slug,b.author,b.call_blog,b.created_at,u.name')
            ->from('blog b', true)
            ->join('users u','u.id = b.user_id', 'inner')
            ->like('b.title', $search);
            
            return $this;
    }
}
