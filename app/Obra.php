<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class Obra extends Model
{
    protected $table = "obras";
    use Resizable;
}
