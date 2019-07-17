<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boleta extends Model
{
    protected $fillable =['idImpresora', 'texto', 'rutaArchivo'];
}
