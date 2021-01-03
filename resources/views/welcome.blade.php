<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio - Bienvenido al facturador móvil, aquí puede crear sus facturas facilmente</title>
</head>
<body>
@extends("layout.template")
@section("contenido")
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h1>Facturador Móvil</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h4>Desde aquí puede crear sus facturas, llenando los datos solicitados a continuación:</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8">
            <div class="form-group">

                <form method="post" action="{{ url('/factura') }}">
                    @csrf
                    <label for="nombre">Nombre del comprador</label>
                    <input type="text" name="nombre" class="form-control" placeholder="Ingrese nombre del comprador" />
                    <br />

                    <label for="telefono">Teléfono del comprador</label>
                    <input type="number" name="telefono" class="form-control" placeholder="Ingrese telefono del comprador" />
                    <br />

                    <label for="email">Email del comprador</label>
                    <input type="email" name="email" class="form-control" placeholder="Ingrese email del comprador" />
                    <br />

                    <label for="coutas">Cantidad de cuotas</label>
                    <input type="number" name="coutas" class="form-control" placeholder="Ingrese la cantidad de cuotas" />
                    <br />

                    <label for="pagoRecepcion">Pagó a la recepción:</label>
                    <select class="form-control" name="pago">
                        <option value="si">Si</option>
                        <option value="no">No</option>
                    </select>

                    <br />
                    <br />

                    <!-- Articulos -->
                    <h4>Artículos de la factura:</h4>
                    <label for="articulo1">Descripción del artículo</label>
                    <input type="text" name="articulo1" class="form-control" placeholder="Ingrese la descripción" />
                    <br />
                    <label for="precioArticulo1">Precio del artículo</label>
                    <input type="number" name="precioArticulo1" class="form-control" placeholder="Ingrese el precio" />
                    <br />
                    <label for="cantidad1">Cantidad</label>
                    <input type="number" name="cantidad1" class="form-control" placeholder="Ingrese cantidad">
                    <br />
                    <br />

                    <button type="submit" class="btn btn-outline-primary">Crear Factura</button>
                    <button type="reset" class="btn btn-outline-danger">Limpiar Campos</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
</body>
</html>
