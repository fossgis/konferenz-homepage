var colours = {
    "bus": "#2C3E50",
    "warehouse": "#96281B",
    "restaurant": "1E824C",
    "bar": "1E824C",
    "theatre": "#D35400",
    "basketball": "#D35400",
    "religious-christian": "#111c97",
    "town-hall": "#7c5397",
    "museum": "#7c5397",
    "parking": "#003bff",
    "rail": "#003bff",
    "bus": "#003bff",  
};

function init () {

    var hotelGroup = L.layerGroup();
    L.geoJson(hotels, {
        pointToLayer: function(feature, latlng) {
            var iconString = feature.properties.icon;
            var icon = L.MakiMarkers.icon({icon: iconString, size: "m", color: colours[iconString]});
            var layer = L.marker(latlng, {icon: icon});
	    hotelGroup.addLayer(layer);
	    return layer;
        },
        onEachFeature: function(feature, layer) {
            var html = '<b>' + feature.properties.title + '</b><br/>'+ feature.properties.description +'<br/><br/><a href="' + feature.properties.homepage +'">Zur Homepage</a>';
            layer.bindPopup(html);
        }
    });

    var verkehrGroup = L.layerGroup();
    L.geoJson(verkehr, {
        pointToLayer: function(feature, latlng) {
            var iconString = feature.properties.icon;
            var icon = L.MakiMarkers.icon({icon: iconString, size: "m", color: colours[iconString]});
            var layer = L.marker(latlng, {icon: icon});
	    verkehrGroup.addLayer(layer);
	    return layer;
        },
        onEachFeature: function(feature, layer) {
            var html = '<b>' + feature.properties.title + '</b><br/>'+ feature.properties.description +'<br/><br/><a href="' + feature.properties.homepage +'">Zur Homepage</a>';
            layer.bindPopup(html);
        }
    });    

    var restaurantsGroup = L.layerGroup();
    L.geoJson(restaurants, {
        pointToLayer: function(feature, latlng) {
            var iconString = feature.properties.icon;
            var icon = L.MakiMarkers.icon({icon: iconString, size: "m", color: colours[iconString]});
            var layer = L.marker(latlng, {icon: icon});
	    restaurantsGroup.addLayer(layer);
	    return layer;
        },
        onEachFeature: function(feature, layer) {
            var html = '<b>' + feature.properties.title + '</b></br>' + feature.properties.description + '<br/><br/><a href="' + feature.properties.homepage +'">Zur Homepage</a>';
            layer.bindPopup(html);
        }
    })

    var ausflugGroup = L.layerGroup();
    L.geoJson(ausflug, {
        pointToLayer: function(feature, latlng) {
            var iconString = feature.properties.icon;
            var icon = L.MakiMarkers.icon({icon: iconString, size: "m", color: colours[iconString]});
            var layer = L.marker(latlng, {icon: icon});
	    ausflugGroup.addLayer(layer);
	    return layer;
        },
        onEachFeature: function(feature, layer) {
            var html = '<b>' + feature.properties.title + '</b><br>' + feature.properties.description + '<br/><br/><a href="' + feature.properties.homepage +'">Weitere Informationen</a>';
            layer.bindPopup(html);
        }
    })

    var fossgisGroup = L.layerGroup();
    L.geoJson(fossgis, {
        onEachFeature: function(feature, layer) {
            var html = '<b>' + feature.properties.title + '</b><br>' + feature.properties.description + '<br/><br/><a href="' + feature.properties.homepage +'">Weitere Informationen</a>';
            layer.bindPopup(html);
	    fossgisGroup.addLayer(layer);
	}
    })

    
    var mapLayer = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
	maxZoom: 20,
	maxNativeZoom: 19
    })

    var map = L.map('map', {
	center: [48.56705, 13.45208],
	zoom: 15,
	layers: [mapLayer, hotelGroup, verkehrGroup, restaurantsGroup, ausflugGroup, fossgisGroup]
    });
    
    var baseMaps = {
	"OpenStreetMap" : mapLayer
    };

    var overlay = {
	"Unterkunft": hotelGroup,
	"Verkehr": verkehrGroup,	
	"Verpflegung": restaurantsGroup,
	"Sehenswürdigkeiten": ausflugGroup,
	"Veranstaltungsort": fossgisGroup
    };

    L.control.layers(baseMaps, overlay).addTo(map);
}
