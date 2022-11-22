<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'idCategoria',
        'idImagen',
        'descripcion',
        'precio',
        'stock',
        'cant'
    ];
}
