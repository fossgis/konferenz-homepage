(function () {
	'use strict';

	var center = [52.43113824, 13.53106760];
	//var friPos = [48.00111, 7.84938];
	var tuePos = [52.46017981, 13.50565336];
	var zoom = 16;
	var htwOrange = '#ff9d15';
	var views = {
		'<b>Erwin-Schrödinger-Zentrum<b>': center,
		'Di: Baergarten': tuePos,
		//'Neustadt': []
	};
	var tooltipTemplate =
		'<b>{shortName}</b><br>' +
		'{purpose}<br>' +
		'<img src="./standort/img/{src}" alt="{title}" class="tooltip-img" width="240" height="157">';
	var featureOptions = {
		color: '#333333',
		weight: 1,
		opacity: 1.0,
		fillColor: htwOrange,
		fillOpacity: 1.0,
		radius: 12,
		className: 'svg-feature'
	};
	var baseLayer = L.tileLayer('https://{s}.tile.openstreetmap.de/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
	});
	var campusLabels = L.layerGroup();
	var campusLayer = L.geoJSON(window.buildings, {
		style: featureOptions,
		onEachFeature: onEachFeature
	});
	var hotelsLayer = L.geoJSON(window.hotels, {
		pointToLayer: function (feature, latlng) {
			var props = feature.properties;
			return L.circleMarker(latlng, {
				color: '#333333',
				weight: 1,
				opacity: 1.0,
				fillColor: '#3388ff',
				fillOpacity: .5,
				radius: 8
			}).bindTooltip(props.name);
		}
	});
	// var wedLayer = L.circleMarker(wedPos, featureOptions).bindTooltip('Dienstag Abend<br>Ice-breaker im Schwarzer Kater');
	//var thuLayer = L.circleMarker(friPos, featureOptions).bindTooltip('Mittwoch Abend<br>Abendveranstaltung <em>Schwätzli uffem Campus</em>');
	//var wedLabel = createLabel(wedPos, 'SK', 2);
	//var thuLabel = createLabel(friPos, 'FR', 2);
	var mapOptions = {
		layers: [
			baseLayer,
			campusLayer,
			campusLabels,
			//thuLayer,
			//thuLabel,
			//wedLayer,
			//wedLabel,
			hotelsLayer
		],
		center: center,
		zoom: zoom,
		minZoom: 14,
		maxZoom: 18,
		maxBounds: [[52.34984643,13.33271378], [52.48858000, 13.71894012]]
	};
	var div, map;

	document.addEventListener('DOMContentLoaded', init);

	function init() {
		var baseLayers = { 'OSM': baseLayer };
		var overlays = { 'Unterkunft': hotelsLayer };
		var options = { collapsed: false, hideSingleBase: true };
		var mapContainerQuery = '.map-container';
		var mapId = 'map';

		// setup
		div = document.getElementById(mapId);
		map = L.map(div, mapOptions);

		// controls
		L.control.layers(baseLayers, overlays, options).addTo(map);
		L.control.grow({ mapContainerQuery: mapContainerQuery }).addTo(map);
		L.control.panTo({ views: views }).addTo(map);
	}

	function createLabel(center, label, priority) {
		var icon = L.divIcon({
			className: 'label label-priority-' + priority,
			iconAnchor: [8, 9],
			html: label
		});
		return L.marker(center, {
			icon: icon
		});
	}

	function onEachFeature(feature, layer) {
		var props = feature.properties;
		var name = props.name;
		var content = tooltipTemplate
			.replace('{shortName}', name)
			.replace('{name}', props.name)
			.replace('{purpose}', props.purpose)
			.replace('{src}', props.bild)
			.replace('{title}', name);

		layer.bindTooltip(content, { offset: [-10, 0] });

		if (props.priority < 2 && props.label.length) {
			var label = props.short_name;
			var priority = props.priority;
			var marker = createLabel(props.label, label, priority);
			campusLabels.addLayer(marker);
		}
	}
})();
