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
        'urlImagen',
        'descripcion',
        'precio',
        'stock',
        'cant',
        'estado'
    ];

    protected $attributes = [
        'estado' => true,
    ];
}
