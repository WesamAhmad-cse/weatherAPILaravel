<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weather condition</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>







    {{-- @if (session()->has('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            @if (session()->has('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif --}}


    <div class="form-container">





        @csrf
        <form action="{{ route('weather') }}" method="post" enctype="multipart/form-data">

            <div class="weather"> <b> {{ $temp }}</b>&#176;C</div>
            <div class="weather"> <b>weather condition: </b> {{ $des }}</div>
            <div class="weather"> <b>Atmosperic pressure: </b> {{ $pres }}hpa</div>
            <div class="weather"> <b>wind speed: </b> {{ $speed }}meter/sec</div>
            <div class="weather"> <b>Cloudness: </b> {{ $clouds }}%</div>
            <div class="weather"> <b>Sunrise: </b> {{ $sun }}</div>



        </form>
    </div>
</body>

</html>
