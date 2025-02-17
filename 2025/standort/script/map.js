(function () {
	'use strict';

	const posSchloss = [51.963600, 7.613115];
	const posHbf = [51.956383, 7.635777];

	const zoom = 16;
	const htwOrange = '#ff9d15';
	const views = {
		'<b>Schloss Münster</b>': posSchloss,
		'Münster Hbf': posHbf,
	};
	const tooltipTemplate =
		'<b>{name}</b><br>' +
		'{street} {housenumber}'; //<br>' +
		// '<a href="{website}">{website}</a><br>' +
		//'<img src="./standort_anreise/img/{src}" alt="Bild {name}" class="tooltip-img" width="240" height="157">';

	const featureOptions = {
		color: '#333333',
		weight: 1,
		opacity: 1.0,
		fillColor: htwOrange,
		fillOpacity: 1.0,
		radius: 12,
		className: 'svg-feature'
	};

	const baseLayer = L.tileLayer('https://{s}.tile.openstreetmap.de/{z}/{x}/{y}.png', {
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

  	var mapOptions = {
		layers: [
			baseLayer,
			campusLayer,
			campusLabels,
			hotelsLayer
		],
		center: posSchloss,
		zoom: zoom,
		minZoom: 5,
		maxZoom: 18,
		maxBounds: [[51.840145,7.473785],[52.060025, 7.774363]]
	};
	var div, map;

	document.addEventListener('DOMContentLoaded', init);

	function init() {
		var baseLayers = { 'OSM': baseLayer };
		var overlays = { 'Hotels': hotelsLayer };
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
		var content = tooltipTemplate
			.replaceAll('{name}',props['name:de'])
			.replaceAll('{website}', props['website'])
			.replaceAll('{street}', props['addr:street'])
			.replaceAll('{housenumber}', props['addr:housenumber'])
			.replaceAll('{postcode}', props['postcode']);
			//.replace('{purpose}', props.purpose)
			//.replace('{src}', props.bild)
			//.replace('{title}', name);

		layer.bindTooltip(content, { offset: [-5, 0] });

		if (props.priority < 2 && props.label.length) {
			var label = props.short_name;
			var priority = props.priority;
			var marker = createLabel(props.label, label, priority);
			campusLabels.addLayer(marker);
		}
	}
})();
