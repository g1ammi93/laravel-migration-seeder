<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trains</title>

    @vite('resources/js/app.js')
</head>


<body>
    <h1 class="text-center my-5">Treni in Partenza</h1>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Compagnia</th>
                <th scope="col">Stazione Partenza</th>
                <th scope="col">Stazione Arrivo</th>
                <th scope="col">Orario Partenza</th>
                <th scope="col">Orario Arrivo</th>
                <th scope="col">Data Partenza</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
                <tr scope="row">
                    <td>{{ $train->company }}</td>
                    <td>{{ $train->departure_station }}</td>
                    <td>{{ $train->arrival_station }}</td>
                    <td>{{ $train->departure_time }}</td>
                    <td>{{ $train->arrival_time }}</td>
                    <td>{{ $train->departure_date }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>


</body>

</html>
