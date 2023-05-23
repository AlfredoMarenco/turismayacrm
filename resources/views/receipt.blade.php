<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Receipt</title>
</head>

<body>
    <p>
        Fecha: {{ Carbon\Carbon::now() }}
    </p>
    <p>
        Referencia: COT-{{ $budget->id }}
    </p>
    <p>
        Servicio: Transporte
    </p>
    <p>
        Estimado(a) <b>{{ $budget->user->name }}</b>
        La tarifa de servicio(s) que amablemente nos solicitó es la siguiente:

    </p>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">Unidad</th>
                <th scope="col">Pax</th>
                <th scope="col">Description</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vehicles as $vehicle)
                <tr>
                    <th>
                        @switch($vehicle->type)
                            @case(1)
                                Autobus
                            @break

                            @case(2)
                                Camioneta
                            @break

                            @default
                        @endswitch
                    </th>
                    <td>{{ $vehicle->pax }}</td>
                    <td>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col">Precio</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($vehicle->concepts as $concept)
                                    <tr>
                                        <td><span style="font:bold;">{{ $concept->date }}</span><br>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>
                                                    {{ $concept->description }}
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            @if ($budget->enable_tax)
                                                ${{ number_format($concept->total, 2) }}
                                            @else
                                                ${{ number_format($concept->net_rate, 2) }}
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>
                    Total Global
                </th>
                <td>{{ $budget->totalPax() }}</td>
                <td>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span
                                        style="font:bold;">${{ number_format($budget->totalWithOutTax(), 2) }}</span><br>
                                </td>
                                <td>

                                    ${{ number_format($budget->totalTax(), 2) }}
                                </td>
                                <td>
                                    @if ($budget->enable_tax)
                                        ${{ number_format($budget->totalWithTax(), 2) }}
                                    @else
                                        ${{ number_format($budget->totalWithOutTax(), 2) }}
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
