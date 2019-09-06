<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // aqui campos que podem ser gravados via formulario usuario
    protected $fillable = [
                    "name", "number", "active", "category", "description"
                ];
    //protected $guardad = [];
}
