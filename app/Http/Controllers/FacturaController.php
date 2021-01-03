<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use App\Models\Producto;
use Illuminate\Http\Request;

class FacturaController extends Controller
{

    public function crearFactura(Request $request){

        $factura = new Factura();
        //datos del cliente
        $factura->nombre_comprador = $request->get("nombre");
        $factura->telefono_comprador = $request->get("telefono");
        $factura->email = $request->get("email");
        $factura->cantidad_cuotas = $request->get("coutas");
        $factura->pago = $request->get("pago");

        //datos de la fecha
        $fecha_emision = date('d-m-Y');
        if($factura->cantidad_cuotas == 2){
            $proximo_pago = date('d-m-Y', strtotime($fecha_emision . '+ 1 month'));
        }
        else{
            $proximo_pago = "-";
        }


        //datos del producto
        $producto1 = new Producto();
        $producto1->descripcion = $request->get('articulo1');
        $producto1->precio_unitario = $request->get('precioArticulo1');
        $producto1->cantidad = $request->get('cantidad1');
        $producto1->calcularPrecioFinal();

        return view('factura', compact('factura'), compact('proximo_pago'), compact('producto1'));
    }
}
