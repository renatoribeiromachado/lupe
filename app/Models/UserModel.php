<?php

namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['name','email','password','img','status','created_at'];

    /*Validação*/
    protected $validationRules = [
        'name'     => 'required',
        'email'    => 'required|valid_email|is_unique[leads_acorp.email,id,{id}]',
        'password' => 'required'
    ];
    
    /*Mensagem da validação*/
    protected $validationMessages = [
        'email' => [
            'required'  => 'O campo E-mail é obrigatório',
            'is_unique' => 'Desculpa, e-mail existente.',
        ],
        'password' => [
            'required'  => 'O campo Senha é obrigatório'
        ],
    ];
    
    public function getUser($email, $password)
    {
        return $this->asArray()
                ->where(['email' => $email, 'password' => $password])
                ->first();    
    } 
}
