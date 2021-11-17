(function () {
	'use strict';

	var center = [50.812288, 8.773973];
	var friPos = [50.812288, 8.773973];
	var wedPos = [50.8089626,8.7705301];
	var zoom = 15;
	var htwOrange = '#ff9d15';
	var views = {
		'<b>Startansicht<b>': [50.8129856,8.7720838],
		'Abendveranstaltung': "",
		'Oberstadt': wedPos,
		//'Stadtmitte': [50.82173, 8.75577],
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
		fillColor:  htwOrange,
		fillOpacity: 1.0,
		radius: 12,
		className: 'svg-feature'
	};
	var featureOptions_Other = {
		color: '#333333',
		weight: 1,
		opacity: 1.0,
		fillColor: '#b8a292',
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
	var campusOtherLayer = L.geoJSON(window.buildings_other, {
		style: featureOptions_Other,
		onEachFeature: onEachFeature
	});
	var hotelsLayer = L.geoJSON(window.hotels, {
		pointToLayer: function (feature, latlng) {
			var props = feature.properties;
			return L.circleMarker(latlng, {
				color: '#333333',
				weight: 1,
				opacity: 1.0,
				fillColor: '#ffffff',
				fillOpacity: 1.0,
				radius: 9
			}).bindTooltip(props.name);
		}
	});
	
	var weysLayer = L.geoJSON(window.weys, {
		pointToLayer: function (feature, latlng) {
			var props = feature.properties;
			return L.circleMarker(latlng, {
				color: '#333333',
				weight: 1,
				opacity: 1.0,
				fillColor:  htwOrange,
				fillOpacity: 1.0,
				radius: 2,
				className: 'svg-feature'
			}).bindTooltip(props.name);
		}
	});
	
	//var wedLayer = L.circleMarker(wedPos, featureOptions).bindTooltip('Dienstag Abend<br>Informationen kommen noch');
	//var thuLayer = L.circleMarker(friPos, featureOptions).bindTooltip('Mittwoch Abend<br>Abendveranstaltung <em>Campus</em>');
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
			hotelsLayer,
			campusOtherLayer,
			weysLayer
		],
		center: center,
		zoom: zoom,
		minZoom: 12,
		maxZoom: 18,
		maxBounds: [[50.31173, 8.07577], [51.81173, 10.77577]]
	};
	var div, map;

	document.addEventListener('DOMContentLoaded', init);

	function init() {
		var weysLayer = { 't': weysLayer };
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
			.replace('{name}', props.street)
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
