mapboxgl.accessToken = 'pk.eyJ1IjoiZWxpc2Vla24iLCJhIjoiY2szdnlmdW85MHFndzNscGk5OGN6d2JvMiJ9.KOV4A39kBrM_4_JaZX-iSQ';

var map = new mapboxgl.Map({
    container: 'mapid',
    style: 'mapbox://styles/mapbox/streets-v11',
    center: [-6.45430, 6.88078],
    zoom: 19
});

map.addControl(new mapboxgl.NavigationControl());

map.on("load", function() {
    map.loadImage("https://i.imgur.com/MK4NUzI.png", function(error, image) {
        if (error) throw error;
        map.addImage("custom-marker", image);
        map.addLayer({
            id: "markers",
            type: "symbol",
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
