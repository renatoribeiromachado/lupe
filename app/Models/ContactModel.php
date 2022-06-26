<?php

namespace App\Models;
use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table         = 'contacts';
    protected $primaryKey    = 'id';
    protected $allowedFields = ['url','name','email','company','telephone','message','adress'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    
    /*Validação*/
    protected $validationRules = [
        'name'      => 'required',
        'email'     => 'required|valid_email|is_unique[contacts.email,id,{id}]',
        'company'   => 'required',
        'telephone' => 'required',
        'message'   => 'required',
        'adress'    => 'required'   
    ];
    
    /*Mensagem da validação*/
    protected $validationMessages = [
        'name' => [
            'required'  => 'O campo Nome é obrigatório'
        ],
        'email' => [
            'required'  => 'O campo E-mail é obrigatório',
            'is_unique' => 'Desculpa, e-mail existente.',
        ],
        'company' => [
            'required' => 'O campo Empresa é obrigatório',
        ],
        'telephone' => [
            'required' => 'O campo Telefone é obrigatório'
        ],
        'adress' => [
            'company'  => 'O campo Endereço é obrigatório'
        ],
        'message' => [
            'company'  => 'O campo Mensagem é obrigatório'
        ],
    ];
}