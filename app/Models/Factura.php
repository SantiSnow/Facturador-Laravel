<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    private $nombre_comprador;
    private $telefono_comprador;
    private $email;
    private $cantidad_cuotas;
    private $pago;

    private $proximo_pago;

    use HasFactory;
}
