(function () {
    "use strict";

    var center = [51.036165569571345, 13.736257553100588];
    var thuPos = [51.0496545, 13.7390823];
    var wedPos = [51.0524493, 13.7451854];
    var zoom = 16;
    var htwOrange = "#ff9d15";
    var views = {
        "<b>Campus<b>": [51.0361, 13.7371],
        "Di: Altmarktkeller": thuPos,
        "Mi: B&auml;renzwinger": wedPos,
        "Altstadt": [51.0520, 13.7401],
        "Neustadt": [51.0666, 13.7552]
    };
    var tooltipTemplate =
        "<b>{shortName}</b> ({name})<br>" +
        "{purpose}<br>" +
        "<img src='{src}' alt='{title}' class='tooltip-img' width='240' height='157'>";
    var featureOptions = {
        stroke: false,
        color: htwOrange,
        fillOpacity: 1,
        radius: 12,
        className: "svg-feature"
    };
    var baseLayer = L.tileLayer('https://{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    });
    var campusLabels = L.layerGroup({});
    var campusLayer = L.geoJSON(window.buildings, {
        style: featureOptions,
        onEachFeature: onEachFeature
    });
    var hotelsLayer = L.geoJSON(window.hotels, {
        pointToLayer: function (feature, latlng) {
            var props = feature.properties;
            return L.circleMarker(latlng, {
                stroke: false,
                fillColor: "#3388ff",
                fillOpacity: .8,
                radius: 8
            }).bindTooltip(props.name);
        }
    });
    var transportLayer = L.geoJSON(window.transport, {
        pointToLayer: function (feature, latlng) {
            var props = feature.properties;
            return L.circleMarker(latlng, {
                stroke: false,
                fillColor: "yellow",
                fillOpacity: .8,
                radius: 5
            }).bindTooltip(createTransportTooltipContent(props));
        }
    });
    var wedLayer = L.circleMarker(wedPos, featureOptions).bindTooltip("Mittwoch Abend<br>Abendveranstaltung im Bärenzwinger");
    var thuLayer = L.circleMarker(thuPos, featureOptions).bindTooltip("Dienstag Abend<br>Inoffizieller Start im Altmarktkeller");
    var wedLabel = createLabel(wedPos, "BZ", 2);
    var thuLabel = createLabel(thuPos, "AK", 2);
    var parking1Center = [51.03639378141363, 13.734347820281984];
    var parking2Center = [51.03751118883509, 13.736257553100588];
    var parking1Label = createLabel(parking1Center, "P<sub>€</sub>", 2);
    var parking2Label = createLabel(parking2Center, "P", 2);
    var mapOptions = {
        layers: [
            baseLayer,
            campusLayer,
            campusLabels,
            hotelsLayer,
            thuLayer,
            thuLabel,
            wedLayer,
            wedLabel,
            parking1Label,
            parking2Label
        ],
        center: center,
        zoom: zoom,
        minZoom: 14,
        maxZoom: 18,
        maxBounds: [[51.0734, 13.7798], [51.0124, 13.7043]]
    };
    var div, map;

    document.addEventListener("DOMContentLoaded", init);

    function init() {
        var baseLayers = {"OSM": baseLayer};
        var overlays = {
            "Unterkunft": hotelsLayer,
            "Nahverkehr": transportLayer
        };
        var options = {collapsed: false, hideSingleBase: true};
        var mapContainerQuery = ".dynamic-map-container";
        var mapId = "map";

        // setup
        div = document.getElementById(mapId);
        map = L.map(div, mapOptions);

        window.map = map;
        map.on("click", function(e) { console.log(e.latlng);});

        // controls
        L.control.layers(baseLayers, overlays, options).addTo(map);
        L.control.grow({mapContainerQuery: mapContainerQuery}).addTo(map);
        L.control.panTo({views: views}).addTo(map);
    }

    function createLabel(center, label, priority) {
        var icon = L.divIcon({
            className: 'label label-priority-' + priority,
            iconAnchor: [8, 8],
            html: label
        });
        return L.marker(center, {
            icon: icon
        });
    }

    function createTransportTooltipContent(props) {
        var isBusStop = props.highway === 'bus_stop';
        var label = (isBusStop ? "Bus-Station:<br>" : "Tram/Bahn-Station:<br>");
        return label + props.name;
    }

    function onEachFeature(feature, layer) {
        var props = feature.properties;
        var name = props.short_name + "-Gebäude";
        var content = tooltipTemplate
            .replace("{shortName}", name)
            .replace("{name}", props.name)
            .replace("{purpose}", props.purpose)
            .replace("{src}", props.bild)
            .replace("{title}", name);

        layer.bindTooltip(content, {offset: [-10, 0]});

        if (props.priority < 2 && props.label.length) {
            var label = props.short_name;
            var priority = props.priority;
            var marker = createLabel(props.label, label, priority);
            campusLabels.addLayer(marker);
        }
    }
})();
