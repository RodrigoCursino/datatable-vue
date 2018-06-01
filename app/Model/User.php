<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens,Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 
        'remember_token',
    ];

    public $rules = [
        'name'   => 'required|min:3|max:25',
        'email'  => 'required|email'
    ];

    public $messages = [
        'name.required'   => "O Campo nome é obrigatório",
        'name.min'        => "Nome deve ter pelo menos 3 caracteres",
        'name.max'        => "Nome deve ter no max 100 caracteres",
        'email.required'  => "O campo E-mail é obrigatório",
        'email.email'     => "Este E-mail não é valido",
    ];

}
