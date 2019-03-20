<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'unidade_id', 'categoria_id', 'name', 'email', 'password', 'cpf','telefone','frase','foto'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function categoria(){
        return $this->belongsTo('App\Categoria');
    }

    public function unidade(){
        return $this->belongsTo('App\Unidade');
    }
}
