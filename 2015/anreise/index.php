<!DOCTYPE html>
<html lang="de">
    <head>
        <title>FOSSGIS 2015 Anreise + Unterkunft</title>
        <meta name="description" content="FOSSGIS ist die Abkürzung für Freie und Open Source Software für Geoinformationssysteme und ist die führende Konferenz zu diesem Thema im deutschsprachigen Raum.">
        <meta name="author" content="Oliver Roick. http://oliverroick.de/">
        <meta name="keywords" content="FOSSGIS, FOSSGIS-Konferenz, 2014, FOSSGIS-Konferenz 2014, Open Source, GIS, Konferenz, Geoinformatik, OpenStreetMap, Beuth-Hochschule Berlin">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">

        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:regular,bold" />
        <link href="../css/screen.css" type="text/css" rel="stylesheet" media="screen">

        <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css">
        <script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
        <script src="script/Leaflet.MakiMarkers.js"></script>

    </head>
    <body id="anreise">
        <div id="wrap">
            <?php include('../inc/head.inc'); ?>

            <div id="content">

                <?php include('../inc/nav.inc'); ?>

                <figure>
                    <img src="../img/schlossfrontal.jpg" width="880" height="350" alt="Schloss Münster">
                    <figcaption>Photo: WWU/Peter Grewer</figcaption>
                </figure>

                <h2>Anreise und Unterkunft</h2>

                <div id="mapContainer"><div id="map"></div></div>

                <h3>Allgemeines</h3>
                <p>Die FOSSGIS-Konferenz 2015 wird vom 11.-13. März an der Universität Münster stattfinden.</p>

                <p><strong>Adresse:</strong><br>Schlossplatz 2<br>48149 Münster</p>

                <h3>Anreise</h3>

                <h4>Anreise mit dem Auto</h4>
                <p>Die Autobahn A 43 endet direkt im Süden Münsters und die Autobahn A 1 bietet die Anschlussstellen Münster Nord und Münster Süd. Allerdings sind die verfügbaren Parkplätze am alten Schloss in Münster zur Zeit der Konferenz sehr begrenzt. Es empfiehlt sich daher auf den Bus umzusteigen (Tickets werden voraussichtlich kostenlos für die Dauer der Konferenz zur Verfügung gestellt) oder sich unter die Münsteraner zu mischen und per Rad (Leeze) zum Schloss zu fahren.</p>

                <h4>Anreise mit öffentlichen Verkehrsmitteln</h4>
                <p>Folgende Haltestellen liegen in der Nähe des Schlosses:</p>
                <ul class="list">
                    <li>"Landgericht" mit den Buslinien 11, 12, 13 und 22.</li>
                    <li>"Hüfferstiftung" mit den Buslinien 11, 12, 13, 22 und auch noch der Buslinie 14.</li>
                    <li>"Neutor" mit den Buslinien 1 (bzw. "Schlossplatz"), 5 und 6.</li>
                </ul>
                <p>Hilfreiche Infos liefert auch der <a href="http://www.bahn.de/" target="_blank">Planer der Deutschen Bahn</a> und der <a href="http://www.netzplan-muenster.de/" target="_blank">interaktive Netzplan der Stadtwerke Münster</a></p>
		  <p>Am Hauptabhnhof Münster befindet sich die <a href="http://www.radstation.de/de/mieten/4_2.html" target="_blank">Fahrradverleihstation</a>.</p> <!--src="img/Prinzipalmarkt_Muenster.png"-->
                <h4>Anreise mit dem Flugzeug</h4>
                <p>Der lokale Flughafen Münster-Osnabrück (FMO) ist relativ klein, aber einige Gesellschaften bieten evtl. günstige Anschlussflüge.</p>
                <p>Größere/alternative Flughäfen sind:</p>
                <ul class="list">
                    <li>Dortmund (DTM, ~1:20 Stunden mit der Bahn)</li>
                    <li>Düsseldorf (DUS, ~2:15 Stunden mit der Bahn)</li>
                    <li>Köln/Bonn (CGN, ~2:30 Stunden mit der Bahn)</li>
                    <li>Hannover (HAJ, ~2.30 Stunden mit der Bahn)</li>
                    <li>Frankfurt (M) (FRA, ~3:00 Stunden mit der Bahn)</li>
                    <li>Niederrhein (NRN, kleiner Ryanair Flughafen, ~3:30 Stunden mit der Bahn)</li>
                </ul>

                <h4>Unterkunft</h4>
                <p>Münster Marketing hält bis zum 10.02.2015 <a href="http://germany.nethotels.com/info/muenster/events/FOSSGIS/" target="_blank">Kontingente für die FOSSGIS</a> bereit.</p>
                <p>Weitere Frühbucherkontingente sind unter dem Stichwort “FOSSGIS 2015” bis Ende Januar bei folgenden Hotels reserviert:</p>

                <p><strong><a href="http://www.hotel-am-schlosspark-muenster.de/" target="_blank">Hotel am Schlosspark</a></strong><br>(1 km 10 min)<br>inkl. Frühstück, Bettwäsche, Handtücher<br>Doppelzimmer: 51,50 €/Person/Nacht (in Einzelbelegung 78 €/Person/Nacht)</p>
                <p><strong><a href="http://www.agora-muenster.de/index.php" target="_blank">Agora - das Hotel am Aasee</a></strong><br>(1,2 km 15 min)<br>inkl. Frühstück, Bettwäsche, Handtücher<br>verschiedene Einzelzimmer: ab 69,00 €/Person/Nacht<br>verschiedene Doppelzimmer: ab 54,50 €/Person/Nacht (in Einzelbelegung: ab 79,00 €/Person/Nacht)</p>
                <p><strong><a href="http://www.djh-wl.de/de/jugendherbergen/muenster" target="_blank">Jugend Gästehaus Aasee</a></strong><br>(1,4 km, 17 min)<br>inkl. Frühstück, Bettwäsche, Handtücher, Badezimmer mit Dusche und WC je Zimmer:<br>Doppelzimmer: 35,70 €/Person/Nacht (in Einzelbelegung: 52,80 €/Person/Nacht)<br>Vierbettzimmer: 30,40 €/Person/Nacht</p>

		  <h4>Münster City</h4>
		  <p>Die <a href="http://www.muenster.de/stadt/tourismus/" target="_blank">Stadt Münster</a> mit ihren knapp 300.000 Einwohnern tr&auml;gt viele Namen. Unz&auml;hlige Radler, die allmorgendlich bei jedem Wetter &uuml;ber die Promenade - dem Fahrradring - ihrem Bet&auml;tigungsfeld entgegen strampeln, pr&auml;gen das Stadtbild der Fahrradhauptstadt. Die Friedensverhandlungen zum Westf&auml;lischen Frieden 1648, die den Drei&szlig;igj&auml;hrigenkrig beendeten, legten den Grundstein zum Namen "Friedensstadt".
			Die nachdem 2. Weltkrieg fast v &ouml;llig zerst&ouml;rte Alstadt wurde nach ihrem historischen Vorbild zu gro&szlig;en Teilen wieder aufgebaut und somit laden viele Stra&szlig;en Münsters heute zu einer kleinen <a href="http://www.muenster.de/stadt/tourismus/sehenswert.html" target="_blank">Zeitreise</a> ein. Münster ist mit 42.000 Studierenden an der Westf&auml;lischen Wilhelms-Universit&auml;t und weiteren Hochschulen auch "Universit&auml;tsstadt", denn ein Siebtel der Bev&ouml;lkerung sind Studierende. 
			Das Flair des Aasees, des Schlossgartens, der Altstadtt und die idyllische Lage in Mitten Westfalens sind wohl Gr&uuml;nde f&uuml;r den einst erhaltenen Titel "lebenswerteste Stadt der Welt". </p>
		  <p>Das M&uuml;nsterland, landschaftlich bekannt f&uuml;r seine sch&ouml;ne &quot;M&uuml;nsterland Parklandschaft&quot;, beheimatet eine Hochburg der Forschung, Verarbeitung und Bereitstellung von Geoinformationen. M&uuml;nsterl&auml;ndische Institutionen und Unternehmen aus dem Bereich Geoinformationen haben sich zu dem Geonetzwerk M&uuml;nsterland zusammengeschlossen. Ziel dieses Netzwerkes ist die St&auml;rkung der Zusammenarbeit in der Region und die Schaffung von Aufmerksamkeit f&uuml;r die besonderen Kompetenzen im M&uuml;nsterland im Bereich der Geoinformationen. </p>
		  <p>Münster ist bekannt für seine Architektur und <a href="http://www.muenster.de/stadt/medien/pdf/schloss.mp3" target="_blank"> Geräusche.</a></p>
          <img src="img/Prinzipalmarkt_Muenster.png" height="335" class="city" valign="middle">
          <img src="img/Dom.png" valign="middle" height="335" class="city" valign="middle">
          <img src="img/Unterwasserkirche.png" height="335" class="city" valign="middle">

		     <!-- <p>Das traditionelle Volksfest der Stadt Münster wird auch während der FOSSGIS-Konferenz seine Pforten öffnen.</p>

          <img src="img/Send.png" class="city" valign="middle" width="300" height="*">
          <img src="img/Send_.png" class="city" valign="middle" width="300" height="*">-->

 		  <p style="clear: both;">F&uuml;r die Stadt Münster gibt es einen <a href="http://www.qmediaservices.de/audioguide/index.htm" target="_blank">Audioguide</a>, der als App für Smartphones verfügbar ist.</p>

 </div>

             <?php include('../inc/footer.inc'); ?>
        </div>
    </body>

    <script src="script/map.js"></script>
    <script type='text/javascript'>
        window.onload = init;
    </script>
</html>
