<!DOCTYPE html>
<html lang="de">
    <head>
        <title>FOSSGIS 2014</title>
        <meta name="description" content="FOSSGIS ist die Abkürzung für Freie und Open Source Software für Geoinformationssysteme und ist die führende Konferenz zu diesem Thema im deutschsprachigen Raum.">
        <meta name="author" content="Oliver Roick. GIScience, Heidelberg University - http://giscience.uni-hd.de/">
        <meta name="keywords" content="FOSSGIS, Open Source, GIS, Konferenz, Geoinformatik, OpenStreetMap">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">

        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:regular,bold" />
        <link href="../css/screen.css" type="text/css" rel="stylesheet" media="screen">
        
        
        <link href='http://api.tiles.mapbox.com/mapbox.js/v1.0.0/mapbox.css' rel='stylesheet' />
          <!--[if lte IE 8]>
            <link href='http://api.tiles.mapbox.com/mapbox.js/v1.0.0/mapbox.ie.css' rel='stylesheet' />
          <![endif]-->
          <script src='http://api.tiles.mapbox.com/mapbox.js/v1.0.0/mapbox.js'></script>
    </head>
    <body id="socialEvents">
        <div id="wrap">
        	<?php include('../inc/head.inc'); ?>
            <?php include('../inc/nav.inc'); ?>
            
            <div id="content">
                <h2>Social Events</h2>
                <div class="map" id="eventsMap"></div>
                <div id="spotInfo">
<!--
                    <div id="startEvent">
                        <h3>Inoffizieller Start</h3>
                        <p>Am Dienstag Abend findet die inoffizielle Konferenzeröffnung mit den Organisatoren und dem Lokalteam in einem nahegelegenen Restaurant in Rapperswil und Umgebung statt.</p>
                        <p><strong>Beginn: 18Uhr</strong></p>
                    </div>
-->
                    <div id="mainEvent">
                        <h3>Social Event</h3>
                        <p>Das Social Event am Mittwoch unter dem Motto 'Ein gemütlicher Abend auf dem Bauernhof' statt. Das Social Event soll den Teilnehmerinnen und Teilnehmern die Möglichkeit geben, sich im abendlichen Ambiente mit anderen Teilnehmern auszutauschen.</p>
                        <p>Im Preis von 60 EUR sind inbegriffen Menü mit Vorspeise, Hauptgang, Dessert und Getränke.</p>
                        <p><strong>Beginn: 19Uhr</strong></p>
                    </div>
                </div>
                <div id="spots">
                    <a href="#startEvent"><strong>Inoffizieller Start.</strong> Dienstag, 11. Juni 2013</a>
                    <a href="#mainEvent"><strong>Social Event.</strong> Mittwoch, 11. Juni 2013</a>
                </div>
				<footer></footer>
            </div>
        </div>
    </body>
    
    <script type='text/javascript'>
        var spots = {
            "type": "FeatureCollection",
            "features": [
                {
                    "type": "Feature",
                    "geometry": { "type": "Point", "coordinates": [8.844258, 47.219948] },
                    "properties": { "id": "startEvent", "name": "Inoffizieller Start" }
                },
                {
                    "type": "Feature",
                    "geometry": { "type": "Point", "coordinates": [8.816449, 47.225442] },
                    "properties": { "id": "mainEvent", "name": "Social Event" }
                }
            ]
        };
        
        var map = L.mapbox.map('eventsMap', 'examples.map-6m5zwq0h', {zoomControl: false})
            .setView([47.225842, 8.823680], 13); 
        
        var markerLayer = L.mapbox.markerLayer(spots)
            .addTo(map);
  </script>
</html>