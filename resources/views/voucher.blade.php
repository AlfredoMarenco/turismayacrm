<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Voucher Turismaya</title>
    <style>
        h1,
        h2,
        h3,
        h4,
        h5,
        span,
        th,
        p {
            font-family: Arial, Helvetica, sans-serif;
        }

        .container {
            padding-left: .1em;
            padding-right: .1em;
        }

        .cabecera {
            display: grid;
            grid-template-columns: 1fr 300px;
            align-items: center;
        }

        .logo {
            width: 200px;
        }

        .cabecera h1 {
            font-size: 2em;
            width: 300px;
            text-align: right;
            font-style: italic;
        }

        .info-cliente {
            margin-top: .6em;
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 20px;
        }

        .info-cliente__datos {
            display: flex;
            align-items: center;

        }

        .info-cliente__datos div {
            background-color: rgb(228, 228, 228);
            color: #114589;
            width: 100%;
            min-height: 20px;
        }

        .info-cliente__datos span {
            font-size: 15px;
            font-style: italic;
            font-weight: 400;
            color: #114589;
            width: 100px;
            box-sizing: content-box;
        }

        .info-cliente__datos div p {
            font-size: 15px;
            margin: auto;
            padding-left: 10px;
            color: #000;
        }

        .itinerario {
            margin-top: 1em;
        }

        .itinerario-datos {
            display: flex;
            align-items: center;
        }

        .itinerario-datos span {
            width: 200px;
            font-size: 15px;
            font-style: italic;
            color: #114589;
            font-weight: 500;
        }

        .itinerario-datos div {
            background-color: rgb(222, 222, 222);
            width: 100%;
            min-height: 25px;

        }

        .itinerario-datos div p {
            padding-left: 10px;
            font-size: 15px;
            margin: auto;
        }

        .itinerario-titulo {
            display: flex;
            align-items: center;
            justify-content: left;
        }

        .itinerario-titulo h1 {
            color: #114589;
            font-style: italic;
        }

        .itinerario-titulo hr {
            border: solid 2px #a8bd3a;
            width: 600px;
            height: 0;
        }

        /* TABLE */

        table {
            width: 100%;
        }

        thead th {
            color: #114589;
            font-size: 1em;
            font-style: italic;
            font-weight: 500;
        }

        tbody th {
            background-color: rgb(222, 222, 222);
            align-items: center;
            width: auto;
            font-weight: 300;
            font-size: 10px;
        }

        th li {
            list-style: none;
            padding: 10px;
            min-height: 30px;
        }
    </style>
</head>

<body>
    <section>
        <div class="container">
            <div class="cabecera">
                <img src="logo.svg" class="logo" alt="" />
                <h1 style="color: #114589">Orden de servicio</h1>
            </div>
            <div class="info-cliente">
                <!-- Columna -->
                <div class="info-cliente__datos">
                    <span>Cliente</span>
                    <div>
                        <p>{{ $vehicle->budget->user->nameComplete() }}</p>
                        <!-- Dato -->
                    </div>
                </div>
                <div class="info-cliente__datos">
                    <span>Orden</span>
                    <div>
                        <p>{{ $voucher->id }}</p>
                        <!-- Dato -->
                    </div>
                </div>
            </div>
            <div class="info-cliente">
                <!-- Columna -->
                <div class="info-cliente__datos">
                    <span>Contacto</span>
                    <div>
                        <p>{{ $vehicle->driver_phone }}</p>
                        <!-- Dato -->
                    </div>
                </div>
                <div class="info-cliente__datos">
                    <span>Cot. #</span>
                    <div>
                        <p>{{ $vehicle->budget->id }}</p>
                        <!-- Dato -->
                    </div>
                </div>
            </div>
            <div class="info-cliente">
                <!-- Columna -->
                <div class="info-cliente__datos">
                    <span>Operador</span>
                    <div>
                        @if ($vehicle->voucher->type)
                            <p>{{ $vehicle->voucher->driver->name }}</p>
                        @else
                            <p>{{ $vehicle->voucher->driver_name }}</p>
                        @endif

                        <!-- Dato -->
                    </div>
                </div>
                <div class="info-cliente__datos">
                    <span>Fecha</span>
                    <div>
                        <p>{{ \Carbon\Carbon::parse($vehicle->budget->date)->isoFormat('LL') }}</p>
                        <!-- Dato -->
                    </div>
                </div>
            </div>
            <div class="info-cliente">
                <!-- Columna -->
                <div class="info-cliente__datos">
                    <span>Tel. operador</span>
                    <div>
                        @if ($vehicle->voucher->type)
                            <p>{{ $vehicle->voucher->driver->phone }}</p>
                        @else
                            <p>{{ $vehicle->voucher->driver_phone }}</p>
                        @endif
                        <!-- Dato -->
                    </div>
                </div>
                <div class="info-cliente__datos">
                    <span>Tel. Vendedor</span>
                    <div>
                        <p></p>
                        <!-- Dato -->
                    </div>
                </div>
            </div>
            <div class="itinerario">
                <div class="itinerario-datos">
                    <span>Dirección de servicio</span>
                    <div>
                        <p>{{ $vehicle->budget->name }}</p>
                        <!-- Dato -->
                    </div>
                </div>
            </div>
            <div class="itinerario-titulo">
                <h1>Itinerario</h1>
                <hr />
            </div>
        </div>
    </section>
    <section class="tabla">
        <div class="container">
            <table>
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Vehículo</th>
                        <th>Hora</th>
                        <th>Servicio</th>
                        <th>Nota</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($vehicle->concepts as $concept)
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>
                                <strong>{{ $concept->description }}</strong>
                            </th>
                            <th></th>
                        </tr>
                        <tr>
                            <th style="width: 100px;">
                                <li>{{ $concept->date }}</li>
                            </th>
                            <th style="font-size: 12px;">
                                @if ($concept->vehicle->type == 1)
                                    Autobus
                                @else
                                    Camioneta
                                @endif
                            </th>
                            <th style="width: 100px;">
                                @foreach ($concept->itineraries as $itinerary)
                                    <li>{{ $itinerary->time }}</li>
                                @endforeach
                            </th>
                            <th style="font-size: 12px;">
                                @foreach ($concept->itineraries as $itinerary)
                                    <li style="text-align: left; padding-left: 1em">
                                        {{ $itinerary->description }}
                                    </li>
                                @endforeach
                            </th>
                            <th style="font-size: 12px;">
                                @foreach ($concept->itineraries as $itinerary)
                                    <li>
                                        {{ $itinerary->comments }}
                                    </li>
                                @endforeach
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</body>

</html>
