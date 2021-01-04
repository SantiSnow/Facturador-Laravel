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
            $factura->proximo_pago = [date('d-m-Y', strtotime($fecha_emision . '+ 1 month'))];
        }
        elseif($factura->cantidad_cuotas == 3){
            $factura->proximo_pago = [date('d-m-Y', strtotime($fecha_emision . '+ 1 month')), date('d-m-Y', strtotime($fecha_emision . '+ 2 month'))];
        }
        else{
            $factura->proximo_pago = ["-"];
        }

        //datos del producto
        $factura->articulo = $request->get('articulo');
        $factura->precio_unitario = $request->get('precio');
        $factura->cantidad = $request->get('cantidad');
        $factura->precio_total = $factura->precio_unitario * $factura->cantidad;

        return view('factura', compact('factura'));
    }
}
