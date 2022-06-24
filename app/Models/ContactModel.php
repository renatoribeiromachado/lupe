<?php

namespace App\Models;
use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table         = 'contacts';
    protected $primaryKey    = 'id';
    protected $allowedFields = ['name','last_name','email','company','url','whatsapp','message'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    
    /*Validação*/
    protected $validationRules = [
        'name'      => 'required',
        'last_name' => 'required',
        'email'     => 'required|valid_email|is_unique[leads_acorp.email,id,{id}]',
        'company'   => 'required',
        'whatsapp'  => 'required'
        
    ];
    
    /*Mensagem da validação*/
    protected $validationMessages = [
        'name' => [
            'required'  => 'O campo Nome é obrigatório'
        ],
        'last_name' => [
            'required'  => 'O campo Sobrenome é obrigatório'
        ],
        'email' => [
            'required'  => 'O campo E-mail é obrigatório',
            'is_unique' => 'Desculpa, e-mail existente.',
        ],
        'company' => [
            'required' => 'O campo Empresa é obrigatório',
        ],
        'whatsapp' => [
            'required' => 'O campo Whatsapp é obrigatório'
        ],
    ];
}