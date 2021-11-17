<!doctype html>
<html lang="de">

<head>
	<?php include "../inc/meta.inc"; ?>

	<base href="<?php echo dirname($_SERVER['SCRIPT_NAME']); ?>">
	<title>FOSSGIS 2022 - Standort Marburg</title>

	<link rel="stylesheet" href="./standort/css/location.css">
	<link rel="stylesheet" href="./css/base.css">
	<link rel="stylesheet" href="./css/normalize.css">
	<link rel="stylesheet" href="./css/print.css" media="print">
	<link rel="stylesheet" href="../static/leaflet/1.3.4/leaflet.css"/>

	<script src="../static/leaflet/1.3.4/leaflet.js"></script>
	<script src="./standort/script/leaflet.addons.js"></script>
	<script src="./standort/data/buildings.js"></script>
	<script src="./standort/data/buildings_other.js"></script>
	<script src="./standort/data/hotels.js"></script>
	<script src="./standort/data/weys.js"></script>
	<script src="./standort/script/map.js"></script>
</head>

<body id="standort">

	<?php include "../inc/header.inc"; ?>
	<h2>Standort</h2>
	<div class="map-container">
		<div id="map" class="map"></div>
	</div>

	<p> Die Konferenz findet in den H&ouml;rs&auml;len und Seminarr&auml;umen des <a href="./standort/hs.php/">H&ouml;rsaalgeb&auml;udes</a> (Biegenstr. 14), 
	des <a href="./standort/spa.php/">Forschungszentrums Deutscher Sprachatlas</a> 
	(Pilgrimstein 16) und des <a href="./standort/fb19.php/">Fachbereichs Geographie</a> 
	(Deutschhausstr. 10) statt. Der zentrale Empfang wird im H&ouml;rsaalgeb&auml;ude aufgebaut. 
	Die Zug&auml;nge zu den R&auml;umlichkeiten sind behindertengerecht gestaltet (außer Fachbereich Geographie). 
	Sollten Sie Probleme beim Erreichen der R&auml;ume haben, z&ouml;gern Sie bitte nicht, das Konferenz-Team anzusprechen.
  	</p>

	<div id="map-static"><img class="img-map-static" src="./standort/img/Karte_Locations_georef.jpg" alt="Stadtansicht Marburg">
	<p><a href="./standort/img/Karte_Locations_georef.pdf" download="Karte_Locations_georef.pdf">Download als PDF</a></p></div>
	
	<h2>Ausflugsm&ouml;glichkeiten & Sehensw&uuml;rdigkeiten</h2>
	  
	<p> Die Universit&auml;tsstadt Marburg befindet sich in unmittelbarer Nachbarschaft zur Universit&auml;tsstadt Gießen, 
	quasi etwa in der Mitte zwischen Frankfurt/M und Kassel. <br>In besonderer Lage beiderseits der Lahn 
	setzt sich Marburg aus der Kernstadt sowie 18 Stadtteilen zusammen.</p>
	<p>  Marburg bietet vieles an Sehensw&uuml;rdigkeiten, Kunst, Kultur und Natur.
	Die drei interessanten Wahrzeichen von Marburg sind das Landgrafenschloss und die Elisabethkirche; ein beliebtes Ausflugsziel mit Café und Kultur ist der Spiegelslust-Turm.</p>
	
	<p>
	F&uuml;r mehr Informationen stellt die Stadt eine umfangreiche und &uuml;bersichtliche <a href="https://www.marburg.de/">Website</a> f&uuml;r Besucher bereit, die   Ausflugsziele in der Umgebung vorstellt, Informationen &uuml;ber die Stadt    zusammenfasst und die Planung von der Unterkunft bis zur Stadtf&uuml;hrung b&uuml;ndelt.
	</p>
	<h2>Lokaler Nahverkehr</h2>
	<p>Der Stadtverkehr in Marburg bietet <a href="https://www.stadtwerke-marburg.de/verkehr/bus-bahn/fahrplaene">19 Buslinien</a> 
	(<a href = "https://www.stadtwerke-marburg.de/fileadmin/user_upload/Seiteninhalte/Verkehr/Haltestellenpositionen/Liniennetzplan_Stadtverkehr_Marburg.pdf">Liniennetzplan</a>), 
	dazu kommen die Anruf-Sammel-Taxen <a href="https://www.stadtwerke-marburg.de/verkehr/bus-bahn/anruf-sammeltaxi-ast">(AST)</a>
	</p>
	<p>
	Erg&auml;nzt wird dieses Verkehrsangebot durch weitere Linien des Busverkehrs des Regionalen Nahverkehrsverbandes 
	Marburg-Biedenkopf und des Rhein-Main-Verkehrsverbundes.
	</p>




	<?php include('../inc/footer.inc'); ?>
</body>
</html>
