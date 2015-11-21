var colours = {
    "bus": "#2C3E50",
    "warehouse": "#96281B",
    "restaurant": "1E824C",
    "theatre": "#D35400"
};

function init () {
    var map = L.map('map').setView([47.797951, 13.049574], 13);
    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.geoJson(hotels, {
        pointToLayer: function(feature, latlng) {
            var iconString = feature.properties.icon;
            var icon = L.MakiMarkers.icon({icon: iconString, size: "m", color: colours[iconString]});
            return L.marker(latlng, {icon: icon}).addTo(map);
        },
        onEachFeature: function(feature, layer) {
            var html = '<b>' + feature.properties.title + '</b><br>'+ feature.properties.description +'<br><a href="' + feature.properties.homepage +'">Zur Homepage</a>';
            layer.bindPopup(html);
        }
    }).addTo(map);


    L.geoJson(restaurants, {
        pointToLayer: function(feature, latlng) {
            var iconString = feature.properties.icon;
            var icon = L.MakiMarkers.icon({icon: iconString, size: "m", color: colours[iconString]});
            return L.marker(latlng, {icon: icon}).addTo(map);
        },
        onEachFeature: function(feature, layer) {
            var html = '<b>' + feature.properties.title + '</br><a href="' + feature.properties.homepage +'">Zur Homepage</a>';
            layer.bindPopup(html);
        }
    }).addTo(map);

    L.geoJson(ausflug, {
        pointToLayer: function(feature, latlng) {
            var iconString = feature.properties.icon;
            var icon = L.MakiMarkers.icon({icon: iconString, size: "m", color: colours[iconString]});
            return L.marker(latlng, {icon: icon}).addTo(map);
        },
        onEachFeature: function(feature, layer) {
            var html = '<b>' + feature.properties.title + '</b><br><a href="' + feature.properties.homepage +'">Zur Homepage</a>';
            layer.bindPopup(html);
        }
    }).addTo(map);


}
