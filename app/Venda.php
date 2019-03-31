<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    //
    public function usuario()
    {
        return $this->belongsTo('App\User', 'ven_vendedor_id');
    }
}
