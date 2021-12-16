@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.js"></script>
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.css" type="text/css">

    <title>MapGooglePrac</title>
    <style>
        body {
            margin: 0;
        }
        
        #map {
            height: 100vh;
            width: 100%;
        }
    </style>
    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoicmF6enUxMjEiLCJhIjoiY2t3MHU3OG4yMGo0YjJwcHEweWo1Nml5ZiJ9.KkS0knK0AudrbByI1xE8Vg';

navigator.geolocation.getCurrentPosition(successLocation, errorLocation, {
    enableHighAccuracy: true,
})

function successLocation(position) {
    // console.log(position);
    setupMap([position.coords.longitude, position.coords.latitude]);
}

function errorLocation(error) {
    console.log(error);
}

function setupMap(center) {
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: center,
        zoom: 18
    })

    const nav = new mapboxgl.NavigationControl();
    map.addControl(nav);

    var directions = new MapboxDirections({
        accessToken: mapboxgl.accessToken,
    })

    map.addControl(directions, 'top-left');

    const marker = new mapboxgl.Marker()
        .setLngLat([30.5, 50.5])
        .addTo(map);
}
    </script>
</head>

<body>
    <div id='map'>
    </div>
</body>

</html>



@endsection