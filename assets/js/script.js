mapboxgl.accessToken = 'pk.eyJ1IjoiZWxpc2Vla24iLCJhIjoiY2szdnlmdW85MHFndzNscGk5OGN6d2JvMiJ9.KOV4A39kBrM_4_JaZX-iSQ';

var map = new mapboxgl.Map({
    container: 'mapid',
    style: 'mapbox://styles/mapbox/streets-v11',
    center: [-6.45430, 6.88078],
    zoom: 19
});

map.addControl(new mapboxgl.NavigationControl());

map.on("load", function() {
    /* Image: An image is loaded and added to the map. */
    map.loadImage("https://i.imgur.com/MK4NUzI.png", function(error, image) {
        if (error) throw error;
        map.addImage("custom-marker", image);
        /* Style layer: A style layer ties together the source and image and specifies how they are displayed on the map. */
        map.addLayer({
            id: "markers",
            type: "symbol",
            /* Source: A data source specifies the geographic coordinate where the image marker gets placed. */
            source: {
                type: "geojson",
                data: {
                    type: 'FeatureCollection',
                    features: [{
                        type: 'Feature',
                        properties: {},
                        geometry: {
                            type: "Point",
                            coordinates: [-6.4543, 6.8808]
                        }
                    }]
                }
            },
            layout: {
                "icon-image": "custom-marker",
            }
        });
    });
});
