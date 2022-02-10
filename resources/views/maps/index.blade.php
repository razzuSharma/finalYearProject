@extends('layouts.app')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>
        <script src="https://api.tiles.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js"></script>
        <link href='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css' rel='stylesheet' />
        <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.js"></script>
        <link rel="stylesheet"
            href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.css"
            type="text/css" />
        <title>Maps for FYP</title>

    <body>
        <div id='map'></div>
        <style>
            body {
                margin: 0;
            }

            #map {
                height: 100vh;
                width: 100vw;
            }

            .marker {
                background-image: url("https://www.nicepng.com/png/detail/37-373764_javascript-adding-a-custom-map-marker-icon-to.png");
                background-size: cover;
                width: 50px;
                height: 50px;
                border-radius: 50%;
                cursor: pointer;
            }

        </style>
        <script>
            mapboxgl.accessToken =
                "pk.eyJ1IjoicmF6enUxMjEiLCJhIjoiY2t3MHU3OG4yMGo0YjJwcHEweWo1Nml5ZiJ9.KkS0knK0AudrbByI1xE8Vg"

            navigator.geolocation.getCurrentPosition(successLocation, errorLocation, {
                enableHighAccuracy: true
            })


            function successLocation(position) {
                setupMap([position.coords.longitude, position.coords.latitude])
            }

            function errorLocation() {
                setupMap([-2.24, 53.48])
            }

            var map;
            function setupMap(center) {
                const map = new mapboxgl.Map({
                    container: "map",
                    style: "mapbox://styles/mapbox/streets-v11",
                    center: center,
                    zoom: 13
                })

                const nav = new mapboxgl.NavigationControl()
                map.addControl(nav)

                const directions = new MapboxDirections({
                    accessToken: mapboxgl.accessToken
                })

                const geojson = {
                    type: 'FeatureCollection',
                    features: [{
                            type: 'Feature',
                            geometry: {
                                type: 'Point',
                                coordinates: [-87.7222, 26.5606]
                            },
                            properties: {
                                title: 'Mapbox',
                                description: 'Gauradaha, Jhapa'
                            }
                        },
                        {
                            type: 'Feature',
                            geometry: {
                                type: 'Point',
                                coordinates: [-87.6680, 26.6717]
                            },
                            properties: {
                                title: 'Mapbox',
                                description: 'Damak, Jhapa'
                            }
                        }
                    ]
                };

                map.addControl(directions, "top-left")
                map.addControl(
                    new mapboxgl.GeolocateControl({
                        positionOptions: {
                            enableHighAccuracy: true
                        },
                        // When active the map will receive updates to the device's location as it changes.
                        trackUserLocation: true,
                        // Draw an arrow next to the location dot to indicate which direction the device is heading.
                        showUserHeading: true
                    })
                );
                for (const feature of geojson.features) {
                    // create a HTML element for each feature
                    const el = document.createElement('div');
                    el.className = 'marker';

                    // make a marker for each feature and add to the map
                    new mapboxgl.Marker(el).setLngLat(feature.geometry.coordinates).addTo(map);
                }
            }
        </script>
        </head>
    </body>

    </html>
@endsection
