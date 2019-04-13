<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temporada extends Model
{
	

    protected $fillable = [
        'tem_dataInicio', 'tem_dataFim', 'status'
    ];
}