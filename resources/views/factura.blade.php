<!doctype html>
<html lang="es">
<head>
    <title>Factura lista para su impresión</title>
    <style>
        .container{
            margin: 15px;

            border-style: solid;
            border-width: 1px;
            border-color: #1a202c;
            border-radius: 9px;

            background-color: #ffddcc; /* Para navegadores antiguos */
            background-image: linear-gradient(#ffddcc, white);
        }

        #tabla-venta{
            margin-top: 15px;
            margin-bottom: 15px;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 15px;
        }
        .precios{
            text-align: right;
        }

    </style>
</head>
<body>
@extends("layout.template")
@section("contenido")

    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8">
                <h1>Comprobante</h1>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <h1>[LOGO EMPRESA]</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h2 id="subtitulo">Locas por los Zapatos - Factura de cobro</h2><div id="fecha" class="text-right">Fecha: 02/01/2021</div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <h4>Datos del comprador:</h4>
                <p>Nombre: <strong>{{ $factura->nombre_comprador }}</strong></p>
                <p>Teléfono: <strong>{{ $factura->telefono_comprador }}</strong></p>
                <p>Correo electronico: <strong>{{ $factura->email }}</strong></p>
                <p>Cantidad de cuotas: <strong>{{ $factura->cantidad_cuotas }}</strong></p>
                <p>Pago a la recepción: <strong>{{ $factura->pago }}</strong></p>
                <p>Fecha del próximo pago: <strong>02/02/2021</strong></p>
            </div>
            <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
                <table id="tabla-venta">
                    <tr>
                        <th>Cantidad</th>
                        <th>Descripción</th>
                        <th>Precio unitario</th>
                        <th>Precio total</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Lorem ipsum is dummy text</td>
                        <td class="precios">$500</td>
                        <td class="precios">$500</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Lorem ipsum is dummy text</td>
                        <td class="precios">$500</td>
                        <td class="precios">$1500</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Lorem ipsum is dummy text</td>
                        <td class="precios">$500</td>
                        <td class="precios">$1000</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Lorem ipsum is dummy text</td>
                        <td class="precios">$500</td>
                        <td class="precios">$500</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Lorem ipsum is dummy text</td>
                        <td class="precios">$500</td>
                        <td class="precios">$500</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Lorem ipsum is dummy text</td>
                        <td class="precios">$500</td>
                        <td class="precios">$500</td>
                    </tr>

                    <tr>
                        <td></td>
                        <td><strong>Precio final:</strong></td>
                        <td></td>
                        <td class="precios"><strong>$4500</strong></td>
                    </tr>
                </table>
            </div>
        </div>
        <hr />
        <br />
        <div class="row">
            <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
            <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8">
                <h4 class="text-center">Datos del emisor:</h4>
                <div>
                    <p>Nombre: <strong>John Doe</strong></p>
                    <p>Teléfono: <strong>11 2233 - 4455</strong></p>
                    <p>Correo electronico: <strong>dummy_email@gmail.com</strong></p>
                </div>
            </div>
            <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
        </div>
        <br />
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="text-center">
                    <h3>¡Muchas gracias por su compra!</h3>
                </div>
            </div>
        </div>
        <br />
    </div>



@endsection

</body>
</html>

