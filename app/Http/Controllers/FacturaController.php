<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use Illuminate\Http\Request;

class FacturaController extends Controller
{

    public function crearFactura(Request $request){

        $factura = new Factura();

        $factura->nombre_comprador = $request->get("nombre");

        return $factura->nombre_comprador;
        //return view('factura');
    }
}
