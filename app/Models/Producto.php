<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'descripcion_larga',
        'descripcion_corta',
        'precio_normal',
        'precio_con_descuento',
        'cantidad',
        'tipo_producto_id',
        'marca_id'
    ];

    public function marca(){
        return $this->belongsTo(Marca::class);
    }

    public function tipoProdcuto(){
        return $this->belongsTo(TipoProducto::class);
    }

    public function image(){
        return $this->morphOne(Imagen::class, 'imagenable');
    }
}
