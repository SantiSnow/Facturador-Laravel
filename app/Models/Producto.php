<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    private $descripcion;
    private $precio_unitario;
    private $cantidad;
    private $precio_final;

    public function calcularPrecioFinal(){
        $this->precio_final = $this->cantidad * $this->precio_unitario;
        return $this->precio_final;
    }


    use HasFactory;
}
