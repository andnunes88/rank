<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    //
    protected $fillable = [
        'ven_unidade_id', 'ven_categoria_id', 'ven_categoria_id', 'ven_aluno', 'ven_telefone', 'ven_email','ven_valor','ven_data','ven_status'
    ];

    public function usuario()
    {
        return $this->belongsTo('App\User', 'ven_vendedor_id');
    }
}