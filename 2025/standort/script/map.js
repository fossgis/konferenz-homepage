var poi = {
    'type': 'featureCollection',
    'features': [
        {
            'type': 'Feature',
            'properties': {
                'title': 'FOSSGIS 2015',
                'description': 'Vorträge der FOSSGIS im Schloss der <a href="http://www.uni-muenster.de" target="_blank">WWU</a>',
                'icon': 'college'
            },
            'geometry': {
                'type': 'Point',
                'coordinates': [
                7.6132745, 51.9635904
                ]
            }
        },
        {
            'type': 'Feature',
            'properties': {
                'title': 'FOSSGIS 2015',
                'description': 'Workshops der FOSSGIS im <a href="http://ifgi.uni-muenster.de" target="_blank">ifgi</a>',
                'icon': 'college'
            },
            'geometry': {
                'type': 'Point',
                'coordinates': [
                7.595834, 51.9695914
                ]
            }
        },
        {
            'type': 'Feature',
            'properties': {
                'title': 'Dinner',
                'description': 'Dinner der FOSSGIS im <a href="http://www.schlossgarten.com/" target="_blank">Schlossgarten Cafe</a>',
                'icon': 'restaurant'
            },
            'geometry': {
                'type': 'Point',
                'coordinates': [
                7.6102238, 51.9645558
                ]
            }
        },
        {
            'type': 'Feature',
            'properties': {
                'title': 'Start',
                'description': 'Inoffizieller Start der FOSSGIS am Di Abend in <a href="http://pinkus.de/gaststaette/altbierkueche/" target="_blank">Pinkus Altbierk&uuml;che</a>',
                'icon': 'restaurant'
            },
            'geometry': {
                'type': 'Point',
                'coordinates': [
                7.6216172, 51.9655737
                ]
            }
        },
        {
            'type': 'Feature',
            'properties': {
                'title': 'Landgericht',
                'description': 'Bushaltestelle <a href="http://www.stadtwerke-muenster.de/fis/1361" target="_blank">Landgericht</a> Abfahrt vom Schloss mit der Linie 13',
                'icon': 'bus'
            },
            'geometry': {
                'type': 'Point',
                'coordinates': [
                7.615419, 51.9620022
                ]
            }
        },
        {
            'type': 'Feature',
            'properties': {
                'title': 'Landgericht',
                'description': 'Bushaltestelle <a href="http://www.stadtwerke-muenster.de/fis/1362" target="_blank">Landgericht</a> Ankunft am Schloss mit der Linie 13',
                'icon': 'bus'
            },
            'geometry': {
                'type': 'Point',
                'coordinates': [
                7.6150623, 51.9618821
                ]
            }
        },
        {
            'type': 'Feature',
            'properties': {
                'title': 'H&uuml;fferstiftung',
                'description': 'Bushaltestelle <a href="http://www.stadtwerke-muenster.de/fis/5081" target="_blank">H&uuml;fferstiftung</a> Alternative Abfahrt vom Schloss mit der Linie 13',
                'icon': 'bus'
            },
            'geometry': {
                'type': 'Point',
                'coordinates': [
                7.6080219, 51.961249
                ]
            }
        },
        {
            'type': 'Feature',
            'properties': {
                'title': 'H&uuml;fferstiftung',
                'description': 'Bushaltestelle <a href="http://www.stadtwerke-muenster.de/fis/5082" target="_blank">H&uuml;fferstiftung</a> Alternative Ankunft am Schloss mit der Linie 13',
                'icon': 'bus'
            },
            'geometry': {
                'type': 'Point',
                'coordinates': [
                7.6079763, 51.9611149
                ]
            }
        },
        {
            'type': 'Feature',
            'properties': {
                'title': 'Mendelstrasse',
                'description': 'Bushaltestelle <a href="http://www.stadtwerke-muenster.de/fis/5992" target="_blank">Mendelstrasse</a> Abfahrt vom ifgi mit der Linie 13',
                'icon': 'bus'
            },
            'geometry': {
                'type': 'Point',
                'coordinates': [
                7.5964394, 51.9693358
                ]
            }
        },
        {
            'type': 'Feature',
            'properties': {
                'title': 'Mendelstrasse',
                'description': 'Bushaltestelle <a href="http://www.stadtwerke-muenster.de/fis/5991" target="_blank">Mendelstrasse</a> Ankunft am ifgi mit der Linie 13',
                'icon': 'bus'
            },
            'geometry': {
                'type': 'Point',
                'coordinates': [
                7.5965647, 51.9691026
                ]
            }
        },
        {
            'type': 'Feature',
            'properties': {
                'title': 'JGA',
                'description': '<a href="http://www.djh-wl.de/de/jugendherbergen/muenster" target="_blank">Jugendgästehaus Aasee</a>',
                'icon': 'warehouse'
            },
            'geometry': {
                'type': 'Point',
                'coordinates': [
                7.6137489, 51.9541535
                ]
            }
        },
        {
            'type': 'Feature',
            'properties': {
                'title': 'Agora',
                'description': '<a href="http://www.agora-muenster.de/index.php" target="_blank">Agora</a> - das Hotel am Aasee',
                'icon': 'warehouse'
            },
            'geometry': {
                'type': 'Point',
                'coordinates': [
                7.617804, 51.9558212
                ]
            }
        },
        {
            'type': 'Feature',
            'properties': {
                'title': 'Hotel am Schlosspark',
                'description': '<a href="http://www.hotel-am-schlosspark-muenster.de/" target="_blank">Hotel am Schlosspark</a>	uebernachten.png',
                'icon': 'warehouse'
            },
            'geometry': {
                'type': 'Point',
                'coordinates': [
                7.6103389, 51.9679995
                ]
            }
        }
    ]
};

var colours = {
    "bus": "#2C3E50",
    "warehouse": "#96281B",
    "restaurant": "#1E824C",
    "college": "#D35400"
};

function init () {
    var map = L.map('map').setView([51.962, 7.625], 13);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
    L.geoJson(poi, {
        pointToLayer: function(feature, latlng) {
            iconString = feature.properties.icon;
            var icon = L.MakiMarkers.icon({icon: iconString, size: "m", color: colours[iconString]});
            return L.marker(latlng, {icon: icon}).addTo(map);
        },
        onEachFeature: function(feature, layer) {
            var html = '<b>' + feature.properties.title + '</b><br>' + feature.properties.description;
            layer.bindPopup(html);
        }
    }).addTo(map);
}
