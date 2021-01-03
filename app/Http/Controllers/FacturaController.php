<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use Illuminate\Http\Request;

class FacturaController extends Controller
{

    public function crearFactura(Request $request){

        $factura = new Factura();

        $factura->nombre_comprador = $request->get("nombre");
        $factura->telefono_comprador = $request->get("telefono");
        $factura->email = $request->get("email");
        $factura->cantidad_cuotas = $request->get("coutas");
        $factura->pago = $request->get("pago");

        return view('factura', compact('factura'));
    }
}
