var mymap = L.map('mapid').setView([6.8809868, -6.4538422], 500);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    // maxZoom: 200,
    id: 'mapbox/streets-v11',
    accessToken: 'pk.eyJ1IjoiZWxpc2Vla24iLCJhIjoiY2szdnlmdW85MHFndzNscGk5OGN6d2JvMiJ9.KOV4A39kBrM_4_JaZX-iSQ'
}).addTo(mymap);

L.marker([6.8809868, -6.4538422]).addTo(mymap)
    .bindPopup('Cabinet GESMA')
    .openPopup();
