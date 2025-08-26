<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrabalheConosco extends Model
{
    protected $table = "trabalhe_conosco";

    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'curriculo'
    ];
}
