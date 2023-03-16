<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voucher</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> --}}
    {{-- <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;1,300;1,400&display=swap" rel="stylesheet"> --}}
    <style>

        /* html{
            font-family: 'Roboto', sans-serif;
        }
        p,h2,h3,h4,h5,th {
            font-family: 'Roboto', sans-serif;
            font-style: italic;
            font-weight: 800;
            color: #114589;
        } */
        /* .service-esp {
            line-height: 1em;
        }
        .service-order {
            font-size: 12px;
            color: gray;
        }
        hr {
            height: 2px;
            background-color: #A8BD3A;
        }
        span {
            font-size: 14px;
        } */
    </style>
</head>
<body>
    <div class="cabecera">
        <div class="container">
            <div class="row pt-5">
                <div class="col-7 m-auto">
                    <figure>
                        <img src="{{ asset('/img/turismaya-logo-2.svg') }}" width="250" alt="logo turismaya">
                    </figure>
                </div>
                <div class="col-5 text-center">
                    <p class="service-esp">Orden de servicio</p>
                    <p class="service-order">SERVICE ORDER</p>

                </div>
            </div>
        </div>
    </div>
    <div class="datos mt-4">
        <div class="container">
            <!-- PRIMERA FILA -->
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        <div class="col-1 m-auto">
                            <h5 class="pt-1">Empresa <span style="font-weight:300; color: #acacac; font-size: 12px;">CLIENT NAME</span></h5>
                        </div>
                        <div class="col-9" style="background-color: rgba(160, 205, 210, 0.175);">
                        <p class="pt-3"> {{-- {{nombre-empresa}} --}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="row">
                        <div class="col-3 m-auto">
                            <h5 class="pt-1">ORDEN # <span style="font-weight:300; color: #acacac;">Order</span></h5>
                        </div>
                        <div class="col-9" style="background-color: rgba(160, 205, 210, 0.175);">
                        <p class="m-auto pt-3"> {{-- {{folio voucher}} --}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SEGUNDA FILA -->
            <div class="row mt-3">
                <div class="col-7">
                    <div class="row">
                        <div class="col-3 m-auto">
                            <h5 class="pt-1" style="text-transform: uppercase;">OPERADOR <span style="font-weight:300; color: #acacac;">Name</span></h5>
                        </div>
                        <div class="col-9" style="background-color: rgba(160, 205, 210, 0.175);">
                        <p class="m-auto pt-3"> {{-- {{nombre-operador}} --}} {{-- {{telefono operador}} --}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="row">
                        <div class="col-3 m-auto">
                            <h5 class="pt-1" style="text-transform: uppercase;">Fecha <span style="font-weight:300; color: #acacac;">Date</span></h5>
                        </div>
                        <div class="col-9" style="background-color: rgba(160, 205, 210, 0.175);">
                        <p class="m-auto pt-3"> {{-- {{fecha}} --}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- TERCERA FILA -->
            <div class="row mt-3">
                <div class="col-7">
                    <div class="row">
                        <div class="col-3 m-auto">
                            <h5 class="pt-1" style="text-transform: uppercase;">contacto <span style="font-weight:300; color: #acacac;">Contact</span></h5>
                        </div>
                        <div class="col-9" style="background-color: rgba(160, 205, 210, 0.175);">
                        <p class="m-auto pt-3"> {{-- {{nombre-cliente}} --}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="row">
                        <div class="col-3 m-auto">
                            <h5 class="pt-1" style="text-transform: uppercase;">Teléfono <span style="font-weight:300; color: #acacac; font-size:10px;">Phone number</span></h5>
                        </div>
                        <div class="col-9" style="background-color: rgba(160, 205, 210, 0.175);">
                        <p class="m-auto pt-3"> {{-- {{telefono-contacto}} --}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CUARTA FILA -->
            <div class="row mt-3">
                <div class="col-12">
                    <div class="row">
                        <div class="col-3 m-auto">
                            <h5 class="pt-1" style="text-transform: uppercase;">Dirección de servicio <span style="font-weight:300; color: #acacac; font-size:10px;">SERVICE ADDRESS</span></h5>
                        </div>
                        <div class="col-9" style="background-color: rgba(160, 205, 210, 0.175);">
                        <p class="m-auto pt-3"> {{-- {{ruta}} --}}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="itinerario mt-5">
        <div class="container">
            <h2 style="text-transform: uppercase; line-height:3px;">itinerario <span style="font-size: 12px; color: gray;">Itinerariy</span></h2>
            <hr>
            <table class="table table-borderless table-striped">
                <thead>
                    <tr>
                        <th scope="col">FECHA</th>
                        <th scope="col">HORA</th>
                        <th scope="col">VEHÍCULO</th>
                        <th scope="col">SERVICIO</th>
                        <th scope="col">NOTAS</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">{{-- {{fecha}} --}}</th>
                        <td>{{-- {{hora}} --}}</td>
                        <td>{{-- {{unidad}} --}}</td>
                        <td>{{-- {{servicio-itinerario}} --}}</td>
                        <td>{{-- {{nota}} --}}</td>
                    </tr>
                    <tr>
                        <th scope="row">{{-- {{fecha}} --}}</th>
                        <td>{{-- {{hora}} --}}</td>
                        <td>{{-- {{unidad}} --}}</td>
                        <td>{{-- {{servicio-itinerario}} --}}</td>
                        <td>{{-- {{nota}} --}}</td>
                    </tr>
                    <tr>
                        <th scope="row">{{-- {{fecha}} --}}</th>
                        <td>{{-- {{hora}} --}}</td>
                        <td>{{-- {{unidad}} --}}</td>
                        <td>{{-- {{servicio-itinerario}} --}}</td>
                        <td>{{-- {{nota}} --}}</td>
                    </tr>
                    </tbody>
                </table>
            <h5 class="pt-4">Detalles: <span>{{-- {{comentarios}} --}}</span></h5>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>
