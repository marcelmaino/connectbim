<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $table = 'site_messages';

    protected $fillable = [
        'nome',
        'email',
        'empresa',
        'telefone',
        'assunto',
        'mensagem'
    ];
}
