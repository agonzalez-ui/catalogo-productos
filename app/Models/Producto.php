<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    // $fillable = lista blanca de campos que se pueden llenar de un solo
    // (ej. Producto::create($request->all())). Protege contra que alguien
    // mande campos extra no autorizados (mass assignment).
    protected $fillable = [ // $fillable: campos permitidos para asignación masiva (seguridad)
        'nombre',
        'precio',
        'stock',
        'descripcion',
    ];
}
