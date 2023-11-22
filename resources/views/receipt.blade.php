<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Presupuesto</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 13px;
        }

        .logo {
            padding-bottom: 1.2em;
        }

        tr li {
            list-style-type: none;
        }

        .flex-container {
            float: right;
            padding-bottom: 3em;
        }

        .info-cabecera {
            display: flex;
            padding-bottom: 5px;
        }

        .detalle {
            width: 130px;
            font-weight: 700;
        }

        .nombre-cliente {
            padding-top: 4em;
            color: #114589;
        }

        .green {
            color: #a8bd3a;
        }

        thead {
            color: #fff;
            font-weight: 600;
            height: 30px;
        }

        td {
            padding: 1em;
        }

        h3 {
            font-size: 2em;
        }

        .pos-container li {
            list-style-type: none;
        }
    </style>
</head>

<body>
    <header>
        <div class="logo">
            <img src="{{ asset('/img/turismaya-logo-2.png') }}" width="200px" alt="Logotipo turismaya" />
        </div>
        <div class="flex-container">
            <div class="pos-container">
                <div class="info-cabecera">
                    <li class="detalle">Fecha:</li>
                    <li>{{ $budget->date }}</li>
                </div>
                <div class="info-cabecera green">
                    <li class="detalle">Referencia:</li>
                    <li>COT-<span>{{ $budget->id }}</span></li>
                </div>
                <div class="info-cabecera">
                    <li class="detalle">Servicio:</li>
                    <li>Transporte</li>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="nombre-cliente">
            <h4>
                Estimado(a) <span>{{ $budget->user->nameComplete() }}</span><br />
                <span>{{ $budget->user->company }}</span>
            </h4>
            <p>La tarifa de servicio(s) que nos solicitó es la siguiente:</p>
        </div>

        <section class="info-presupuesto">
            <table style="width: 100%">
                <thead style="background-color: #114589">
                    <tr>
                        <!-- table Row -->
                        <th>Unidad</th>
                        <!-- table head -->
                        <th>Pax</th>
                        <!-- table head -->
                        <th>Descripción</th>
                        <!-- table head -->
                        <th>Precio</th>
                        <!-- table head -->
                    </tr>
                </thead>
                <tbody>
                    <!-- Concepto -->
                    @foreach ($vehicles as $vehicle)
                        <tr>
                            <td style="width: 170px">
                                @if ($vehicle->type == 1)
                                    Autobus
                                @else
                                    Camioneta
                                @endif
                            </td>
                            <td style="width: 100px">
                                {{ $vehicle->pax }} pax</td>
                            <td>
                                @foreach ($vehicle->concepts as $concept)
                                    <span><b>{{ \Carbon\Carbon::parse($concept->date)->toFormattedDayDateString() }}</b></span>
                                    <ul>
                                        <li>
                                            {{ $concept->description }}
                                        </li>
                                    </ul>
                                @endforeach
                            </td>
                            <td style="width: 170px; text-align: center">
                                @foreach ($vehicle->concepts as $concept)
                                    <ul>
                                        <li>
                                            <span>$</span>{{ number_format($concept->total, 2) }} <span>MXN</span>
                                        </li>
                                    </ul>
                                @endforeach
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
        <section>
            <!-- Totales -->
            <div class="flex-container" style="padding-top: 1.3em">
                <div class="pos-container">
                    <div class="info-cabecera">
                        <li class="detalle green">Subtotal:</li>
                        <li style="width: 140px; text-align: right">
                            <b> $<span>{{ number_format($vehicle->totalWithOutTax(), 2) }}</span> MXN </b>
                        </li>
                    </div>
                    <div class="info-cabecera">
                        <li class="detalle green">Impuestos:</li>
                        <li style="width: 140px; text-align: right">
                            <b> $<span>{{ number_format($vehicle->totalTax(), 2) }}</span> MXN </b>
                        </li>
                    </div>
                    <div class="info-cabecera">
                        <li class="detalle green">Total:</li>
                        <li style="width: 140px; text-align: right">
                            <b>$<span>
                            @if ($budget->enable_tax)
                                {{ number_format($vehicle->totalWithTax(), 2) }}
                            @else
                                {{ number_format($vehicle->totalWithOutTax(), 2) }}
                            @endif</span> MXN </b>
                        </li>
                    </div>
                </div>
            </div>
        </section>
        <section style="margin-top: 9em;">
            <h5>Información importante</h5>
            <ul>
                <li>
                    <b>Para confirmar disponibilidad</b> es necesario enviar previamente
                    su itinerario con destinos y horarios estipulados del servicio.
                </li>
                <li>
                    <b>El precio total incluye IVA,</b> en caso de requerir factura.
                </li>
                <li>
                    <b>Nuestro servicio incluye: </b>Vehículo con aire acondicionado,
                    asientos acojinados, equipo audiovisual* y baño*, operador(es)
                    capacitado, combustible, tarifas de casetas y seguro de viajero. *
                    Aplica en autobuses con esa modalidad
                </li>
                <li>
                    Contamos con
                    <b>Certificado de Buenas Prácticas Sanitarias</b> expendido por la
                    Secretaría de Fomento Turístico de Yucatán.
                </li>
                <li>
                    <b>La cotización es válida</b> por los servicios solicitados con
                    vigencia de 3 días, a partir de recibirla. De no pagarse un
                    anticipo, NO se garantiza disponibilidad ni precios.
                </li>
                <li>
                    <b>De solicitarse alguna modificación,</b> se cotizará nuevamente el
                    servicio(s).
                </li>
            </ul>
            <h5>Esperamos poder servirle</h5>
            <div style="text-align: center">
                <h3 style="font-weight: 500; color: #000">
                    Gustavo Martinez
                    <br />
                    <span style="font-size: 0.8em; color: #114589">
                        Reservaciones
                    </span>
                </h3>
            </div>
        </section>
        <!-- Políticas -->
        <section id="politicas" style="line-height:18px;">
            <div class="reservacion">
                <!-- de reservación -->
                <ol>
                    <span style="list-style: none; color: #114589"><b>Politicas de reservación</b></span>
                    <li>
                        Las reservaciones se solicitan vía correo electrónico o
                        <span style="color: #114589">gustavo@turismaya.com </span> o al
                        teléfono <b>9994425050</b> (WhatsApp).
                    </li>
                    <li>
                        Es necesario reservar con anticipación para bloquear las fechas y
                        apartar las unidades,así como servicios complementarios.
                    </li>
                    <li>
                        Para reservar es necesario pagar el 25% del total del servicio, si
                        falta más de un mes para efectuarse; si falta menos de un mes, el
                        50%.
                    </li>
                    <li>
                        Por ningún motivo se considera confirmada una fecha sin pago de
                        anticipo de por medio.
                    </li>
                    <li>
                        El pago total debe ser liquidado mínimo 48 horas antes del
                        servicio.
                    </li>
                </ol>
            </div>
            <div class="pago">
                <!-- de pago -->
                <ol>
                    <span style="list-style: none; color: #114589"><b>Politicas de pago</b></span>
                    <li>
                        Si requiere factura, favor de proporcionar su datos fiscales, uso
                        de CFDI y método de pago.
                    </li>
                    <li>
                        Los pagos pueden ser por depósito/ transferencia bancaria o en
                        efectivo (en nuestras oficinas).
                    </li>
                    <li>
                        Envíe su comprobante(s) de pago para verificación por correo
                        electrónico o WhatsApp. Favor de mencionar en sus mensajes su
                        nombre, servicio solicitado y si es pago completo o un anticipo,
                        para identificar la transacción.
                    </li>
                </ol>
            </div>
            <div class="pago">
                <!-- de pago -->
                <ol>
                    <span style="list-style: none; color: #114589"><b>Politicas de cambio</b></span>
                    <li>
                        Los cambios de fecha no tendrán costo alguno, siempre y cuando
                        sean informados con al menos 10 días de anticipación.
                    </li>
                    <li>
                        Los cambios de fecha realizados dentro de los 09 días a la fecha
                        del servicio, tendrán un cargo del 20 % adicional al total del
                        servicio.
                    </li>
                    <li>
                        <span style="text-decoration: underline">Los cambios de fechas están sujetos a
                            disponibilidad</span>
                    </li>
                </ol>
            </div>
            <div class="cancelacion">
                <!-- de cancelacion -->
                <ol>
                    <span style="list-style: none; color: #114589"><b>Politicas de cancelación</b></span>
                    <li>Toda cancelación debe ser informada vía correo o WhatsApp.</li>
                    <li>
                        Toda cancelación hecha con hasta 30 días de anticipación, no
                        tendrá cargo alguno.
                    </li>
                    <li>
                        Toda cancelación hecha de 29 a 15 días antes del servicio está
                        sujeta a un cargo del 20% del total de la reservación.
                    </li>
                    <li>Toda cancelación hecha de 14 a 03 días antes del servicio está
                        sujeta a un cargo del 50% del total de la reservación.</li>
                    <li>Las reservaciones canceladas desde 02 días antes del servicio, o
                        en caso de no llegar, no seránreembolsables.</li>
                </ol>
            </div>
        </section>
    </main>
</body>

</html>
