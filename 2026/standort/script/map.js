(function () {
	'use strict';

	const posZHG = [51.54154, 9.93555];
	const posHbf = [51.53659, 9.92584];

	const zoom = 16;
	const htwOrange = '#ff9d15';
	const views = {
		'<b>ZHG Göttingen</b>': posZHG,
		'Bahnhof Göttingen': posHbf,
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
		center: posZHG,
		zoom: zoom,
		minZoom: 5,
		maxZoom: 18,
		maxBounds: [[51.541357,9.935557],[51.55154, 9.94555]]
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
