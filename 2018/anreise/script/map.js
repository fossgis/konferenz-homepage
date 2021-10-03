//var colours = {
//    "bus": "#2C3E50",
//    "warehouse": "#96281B",
//    "restaurant": "1E824C",
//    "bar": "1E824C",
//    "theatre": "#D35400",
//    "basketball": "#D35400",
//    "religious-christian": "#111c97",
//    "town-hall": "#7c5397",
//    "museum": "#7c5397",
//    "parking": "#003bff",
//    "rail": "#003bff",
//    "bus": "#003bff",  
//};

function init () {
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
	layers: [mapLayer, fossgisGroup]
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
