<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ugly Train</title>
</head>
<body>
    <h1>Ugly Train</h1>
    <p>Ugly Train is a train that is ugly.</p>

    <h2>Trains</h2>
    <table>
            <tr>
                <th>train_code</th>
                <th>company</th>
                <th>departure_station</th>
                <th>arrival_station</th>
                <th>departure_time</th>
                <th>arrival_time</th>
                <th>carriages</th>
                <th>on_time</th>
                <th>cancelled</th>
            </tr>

        @foreach ($trains as $train)

        <tr id="{{$train ->id}}">
                <td>{{$train->train_code}}</td>
                <td>{{$train->company}}</td>
                <td>{{$train->departure_station}}</td>
                <td>{{$train->arrival_station}}</td>
                <td>{{$train->departure_time}}</td>
                <td>{{$train->arrival_time}}</td>
                <td>{{$train->carriages}}</td>
                <td>{{$train->on_time}}</td>
                <td>{{$train->cancelled}}</td>



        </tr>
        @endforeach
    </table>
</body>
<style>
    body {
        background-color: #000000;
        color: #ffffff;
    }
    td {
        border: 1px solid #ffffff;
        margin: 3rem
    }
</style>
</html>

