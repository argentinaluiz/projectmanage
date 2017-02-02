<?php

namespace projectmanager;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $fillable = [
    	'name',
    	'responsavel',
    	'email',
    	'phone',
    	'endereco',
    	'obs'
    ];
}
