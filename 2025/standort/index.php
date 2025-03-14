<!doctype html>
<html lang="de">

<head>
	<?php include "../inc/meta.inc"; ?>

	<base href="<?php echo dirname($_SERVER['SCRIPT_NAME']); ?>">
	<title>FOSSGIS 2025 - Standort, Anreise und Übernachtung</title>
	<!--<title>FOSSGIS 2025 - Standort, Anreise und Übernachtung</title>-->

	<link rel="stylesheet" href="./css/normalize.css">
	<link rel="stylesheet" href="./css/base.css">
	<link rel="stylesheet" href="./css/print.css" media="print">
	<link rel="stylesheet" href="./standort/script/leaflet.css"/>

	<script src="./standort/script/leaflet.js"></script>
	<script src="./standort/script/leaflet.addons.js"></script>
	<script src="./standort/data/buildings.js"></script>
	<script src="./standort/data/hotels.js"></script>
	<script src="./standort/script/map.js"></script>
</head>

<body id="standort">

	<?php include "../inc/header.inc"; ?>
	
	<h1 ID="Standort" name="Standort">Standort</h1>
	<!--<h1 ID="Standort" name="Standort">Standort, Anreise und Übernachtung</h1>-->

    <div class="map-container">
		<div id="map" class="map"></div>
	</div>

        <p><strong>Adresse:</strong><br>Schlossplatz 2<br>48149 Münster</p>

	<h3>Konferenzort Schloss Münster</h3>

	<p>Die Konferenz findet im Schloss Münster statt. Die Räumlichkeiten sind weitestgehend barrierefrei zugänglich. Die Raumpläne werden vor der Konferenz veröffentlicht und im Programmheft abgedruckt. Für Fragen zum Erreichen der Räume, zögern Sie nicht das Konferenz-Team anzusprechen.
	</p>
	
	<p>Den Welcome Desk finden Sie im Schloss-Foyer, welches durch ein beheizbares Zelt erweitert wird, um Raum für die Pausenversorgung und Firmen- und Projekteausstellung zu schaffen.</p>

       <h3 ID="Anreise" name="Anreise">Anreise mit öffentlichen Verkehrsmitteln</h3>
        
        <p><a href="https://www.veranstaltungsticket-bahn.de:443/?event=25170&amp;language=de" style=" width: 300px; height: 40px; display: inline-block; position: relative; text-decoration: none; cursor: pointer; margin: 0; padding: 0; zoom: 1;" target="_blank" title="Klick Veranstaltungsticket Deutsche Bahn"><span style=" display: block; margin: 0; padding: 0; position: relative; line-height: 0; overflow: visible;"><img style=" width: 100%; margin: 0; padding: 0; display: block;" src="standort/img/Button_Veranstaltungsticket.png" alt=""/></span></a></p>
        <p><br>Veranstaltungsticket Deutsche Bahn: https://www.veranstaltungsticket-bahn.de/?event=25170&language=de</p>

        <p>Nutzen Sie den ÖPNV in Münster, die Stadt Münster stellt für alle Teilnehmenden ÖPNV-Tickets für die Konferenzzeit zur Verfügung oder mischen Sie sich per Rad (Leeze) unter die Münsteraner und fahren zum Schloss. Am Hauptabhnhof Münster befindet sich eine <a href="https://www.radstation.de/de/mieten/4_2.html" target="_blank">Fahrradverleihstation</a>. Weitere Anbieter sind <a href="https://www.stadt-muenster.de/tourismus/fahrradstadt/fahrradverleih">in dieser Übersicht</a> zu finden.
</p>
        
        <p>Folgende Haltestellen liegen in der Nähe des Schlosses:</p>
          <ul class="list">
             <li>"Landgericht" mit den Buslinien 11, 12, 13 und 22.</li>
             <li>"Hüfferstiftung" mit den Buslinien 11, 12, 13, 22 und auch noch der Buslinie 14.</li>
             <li>"Neutor" mit den Buslinien 1 (bzw. "Schlossplatz"), 5 und 9.</li>
          </ul>
        <p>Hilfreiche Infos liefert auch der <a href="https://www.bahn.de/" target="_blank">Planer der Deutschen Bahn</a> und der <a href="https://www.netzplan-muenster.de/" target="_blank">interaktive Netzplan der Stadtwerke Münster</a><br>
        Nutzen Sie auch gerne die <a href="https://www.stadtwerke-muenster.de/muenster-app" target="_blank">kostenfreie Münster App</a>.</p>
               
        <h4>Anreise mit dem Auto</h4>
        <p>Von einer Anreise mit dem Auto raten wir aufgrund fehlender Parkmöglichkeiten am Schloss Münster zur Zeit der Konferenz ab.</p>

        <h3>Unterkünfte in Münster und Hotelliste</h3>
        <p>Das Kongressbüros von Münster Marketing hält das Serviceangebot: <a href="https://tportal.tomas.travel/rmuensterkongress/ukv/?doSearch=1&ukv_result_order=1&number_adult=1&rate=GER00020063159688918&date_from=25.03.2025&date_to=30.03.2025&reset=1&globalReset=1"  target="_blank">Kontingente für die FOSSGIS 2025</a> bereit.</p>
        
        <p>Sie finden hier eine <b><a href="standort/hotelliste.php">umfangreiche Hotelliste</a></b> zusammengestellt vom Organisationsteam.</p>
        
       

	<h4>Münster City</h4>
	<p>Das Bild der <a href="https://www.muenster.de/stadt/tourismus/" target="_blank">Stadt Münster</a> mit ihren über 320.000 Einwohnern ist geprägt von unzähligen Radler:innen, die allmorgendlich bei jedem Wetter über die Promenade - dem Fahrradring - ihrem Betätigungsfeld entgegen strampeln. Die Friedensverhandlungen zum Westfälischen Frieden 1648, die den Dreißigjährigenkrig beendeten, legten den Grundstein zum Namen "Friedensstadt".</p>
	<p>Die nachdem 2. Weltkrieg fast völlig zerstörte Alstadt wurde nach ihrem historischen Vorbild zu großen Teilen wieder aufgebaut und somit laden viele Straßen Münsters heute zu einer kleinen <a href="https://tour.spacewerkhosting.de/de/tour/friedenssaal-im-historischen-rathaus" target="_blank">Zeitreise</a> ein. Münster ist mit über 60.000 Studierenden an Universität und weiteren Hochschulen auch "Universitätsstadt", denn ein fünftel der Bevölkerung sind Studierende.</p> 
	<p>Das Flair des Aasees, des Schlossgartens, der Altstadtt und die idyllische Lage in Mitten Westfalens sind wohl Gründe für den einst erhaltenen Titel "lebenswerteste Stadt der Welt". </p>
	<p>Das Münsterland, landschaftlich bekannt für seine schöne "Münsterländer Parklandschaft", beheimatet eine Hochburg der Forschung, Verarbeitung und Bereitstellung von Geoinformationen. Münsterländische Institutionen und Unternehmen aus dem Bereich Geoinformationen haben sich zu dem <a href="https://geonetzwerk-muensterland.de/">"Geonetzwerk Münsterland"</a> zusammengeschlossen. Ziel dieses Netzwerkes ist die Stärkung der Zusammenarbeit in der Region und die Schaffung von Aufmerksamkeit für die besonderen Kompetenzen im Münsterland im Bereich der Geoinformationen.</p>

		  
          <img src="standort/img/Prinzipalmarkt_Muenster.png" Alt="Prinzipalmarkt_Muenster" height="335" class="city" valign="middle">
          <img src="standort/img/Dom.png" valign="middle" height="335" class="city" valign="middle">
          <img src="standort/img/Unterwasserkirche.png" height="335" class="city" valign="middle">

	<p>Das traditionelle Volksfest der Stadt Münster wird auch während der FOSSGIS-Konferenz seine Pforten öffnen.</p>

          <img src="standort/img/Send.png" class="city" valign="middle" width="350" height="*">
          <img src="standort/img/Send_.png" class="city" valign="middle" width="350" height="*">
          
          <p>Fotos: hafi, 2015</p>

 <?php include "../inc/footer.inc"; ?>

</body>
</html>
