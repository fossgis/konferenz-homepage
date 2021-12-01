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

<body id="anreise">

	<?php include "../inc/header.inc"; ?>
	<h2>Standort, Anreise und Unterkunft</h2>
	<p>Die FOSSGIS-Konferenz findet vom 9. - 12. März 2022 an der Philipps Universität Marburg auf dem Campus im Lahntal statt.
    </p>
	<div class="map-container">
		<div id="map" class="map"></div>
	</div>



	<p> Die Vorträge finden in den H&ouml;rs&auml;len und Seminarr&auml;umen, die Firmenausstellung und Netzwerkpausen im Foyer des H&ouml;rsaalgeb&auml;udes (Biegenstr. 14) statt. Die Räume des Forschungszentrums Deutscher Sprachatlas 
	(Pilgrimstein 16) stehen für Anwendertreffen, BoF und Expert:innenfragestunde zur Verfügung. Für die Workshops werden die Räume des Fachbereichs Geographie
	(Deutschhausstr. 10) genutzt. Der zentrale Empfang (Welcome Desk) wird im H&ouml;rsaalgeb&auml;ude aufgebaut. 
	Die Zug&auml;nge zu den R&auml;umlichkeiten sind barrierefrei erreichbar (außer Fachbereich Geographie). 
	Sollten Sie Probleme beim Erreichen der R&auml;ume haben, z&ouml;gern Sie bitte nicht, das <a href="mailto:konferenz-orga@fossgis.de?subject=Fragen_zum_Standort">Konferenz-Team</a> anzusprechen.</p>
  	</p>
 	<h3>Adresse des Konferenzstandortes</h3>
   
     <p>Phillips Universität Marburg <br>
		Campus im Lahntal<br>
        Biegenstraße 14<br>
        35037 Marburg 
	 </p>
 	 <p><a href="https://www.openstreetmap.org/search?query=marburg%20biegenstra%C3%9Fe%2014#map=20/50.81083/8.77332&layers=C" target="_blank">Standort auf openstreetmap.org</a></p>
	<div id="map-static"><img class="img-map-static" src="./standort/img/Karte_Locations_georef.jpg" alt="Stadtansicht Marburg">
	<p>Alles in einer Übersicht <a href="./standort/img/Karte_Locations_georef.pdf" download="Karte_Locations_georef.pdf">zum Download als PDF</a>.</p></div>

	<h2>Anreise</h2>
		<p> Die Universit&auml;tsstadt Marburg befindet sich in unmittelbarer Nachbarschaft zur Universit&auml;tsstadt Gießen, quasi etwa in der Mitte zwischen Frankfurt/M und Kassel. In besonderer Lage beiderseits der Lahn setzt sich Marburg aus der Kernstadt sowie 18 Stadtteilen zusammen.</p>
		<p>Am klimafreundlichsten gelangen Sie mit der Bahn nach Marburg, welches über zwei Bahnhöfe verfügt, von denen die ganze Stadt und die Umgebung zu Fuß, mit dem Bus oder Fahrrad erkundet werden kann. Der Hauptbahnhof wird durch die Deutsche Bahn und diverse Fernbusse bedient, das Hörsaalgebäude liegt ca. 1 km vom Marburger Hauptbahnhof entfernt.</p>
	
		<p>Der Stadtverkehr in Marburg bietet <a href="https://www.stadtwerke-marburg.de/verkehr/bus-bahn/fahrplaene">19 Buslinien</a> 
	(<a href = "https://www.stadtwerke-marburg.de/fileadmin/user_upload/Seiteninhalte/Verkehr/Haltestellenpositionen/Liniennetzplan_Stadtverkehr_Marburg.pdf">Liniennetzplan</a>), 
	dazu kommen die Anruf-Sammel-Taxen. <a href="https://www.stadtwerke-marburg.de/verkehr/bus-bahn/anruf-sammeltaxi-ast">(AST)</a>. Erg&auml;nzt wird dieses Verkehrsangebot durch weitere Linien des Busverkehrs des Regionalen Nahverkehrsverbandes Marburg-Biedenkopf und des Rhein-Main-Verkehrsverbundes.</p>

        <p> Aufgrund der angespannten Parkplatzsituation in der Innenstadt von Marburg sollte von einer Anreise mit dem Auto abgesehen werden.</p>

	<h2>Ausflugsm&ouml;glichkeiten & Sehensw&uuml;rdigkeiten</h2>

	<p>  Marburg bietet vieles an Sehensw&uuml;rdigkeiten, Kunst, Kultur und Natur.
	Die drei interessanten Wahrzeichen von Marburg sind das Landgrafenschloss und die Elisabethkirche; ein beliebtes Ausflugsziel mit Café und Kultur ist der Spiegelslust-Turm.</p>
	
	<p>
	F&uuml;r mehr Informationen stellt die Stadt eine umfangreiche und &uuml;bersichtliche <a href="https://www.marburg.de/">Website</a> f&uuml;r Besucher bereit, die   Ausflugsziele in der Umgebung vorstellt, Informationen &uuml;ber die Stadt    zusammenfasst und die Planung von der Unterkunft bis zur Stadtf&uuml;hrung b&uuml;ndelt.
	</p>

 	<h2>Unterkunft</h2>
		<p>Die Stadt Marburg verfügt über diverse Unterkünfte, diese sind über die <a href="https://www.marburg-tourismus.de/buchen/">Buchungsseite</a> der Stadt Marburg verfügbar.

		<p>Das Konferenzteam hat eine Auswahl an zentral gelegenen Unterkünften recherchiert und erhebt keinen Anspruch auf Vollständigkeit.</p>

		<p><i>Hotel Marburgerhof</i></p>
			<ul>
				<li> Web: <a href="https://www.marburgerhof.de/" rel="nofollow" target="_blank">https://www.marburgerhof.de/</a></li>
				<li> Adresse: Elisabethstraße 12, 35037 Marburg</li>
				<li> Telefon: +49 6421 590750</li>
				<li> Kontingentabruf für Zimmer mit Frühstück per Mail oder Telefon unter <em>`Fossgis`</em>, <a href="https://files.fossgis.de/Konferenz/Hotelzimmerkontingente Marburger Hof_2021_09_20.pdf">Informationen zum Kontingentangebot als PDF</a>.</li>
			</ul>

		<p><i>Welcome Hotel Marburg</i></p>
			<ul>
				<li> Web: <a href="https://www.welcome-hotels.com/hotels/marburg/" rel="nofollow" target="_blank">https://www.welcome-hotels.com/hotels/marburg/</a></li>
				<li> Adresse: Pilgrimstein 29, 35037 Marburg</li>
				<li> Telefon: +49 6421 9180</li>
				<li> Kontingentabruf für Zimmer mit Frühstück per Mail oder Telefon mit dem Stichwort <em>'FOSSGIS'</em>, <a href="https://files.fossgis.de/Konferenz/WelcomeHotel_Marburg_Kontingentinfo_20210927_083119_0159_FOSSGIS_sign.pdf">Informationen als PDF zum Kontingentangebot</a>.</li>
			</ul>

		<p><i>B&B Hotel Marburg</i></p>
			<ul>
				<li> Web: <a href="https://www.hotel-bb.com/de/hotel/marburg" rel="nofollow" target="_blank">https://www.hotel-bb.com/de/hotel/marburg</a></li>
				<li> Adresse: Gutenbergstraße 6, 35037 Marburg</li>
				<li> Telefon: +49 6421 1650010</li>
			</ul>

		<p><i>Stadthotel Marburg</i></p>
			<ul>
				<li> Web: <a href="https://www.stadthotel-marburg.com/startseite.html" rel="nofollow" target="_blank">https://www.stadthotel-marburg.com</a></li>
				<li> Adresse: Bahnhofstraße 14, 35037 Marburg</li>
				<li> Telefon: +49 6421 6971666</li>
			</ul>

		<p><i>Hostel Marburg One</i></p>
			<ul>
				<li> Web: <a href="https://www.hostel-marburg-one.de/" rel="nofollow" target="_blank">https://www.hostel-marburg-one.de/</a></li>
				<li> Adresse: Bahnhofstraße 33A, 35037 Marburg</li>
				<li> Telefon: +49 6421 6977111</li>
			</ul>

		<p><i>Hotel VILA VITA Rosenpark</i></p>
			<ul>
				<li> Web: <a href="https://www.rosenpark.com/de/" rel="nofollow" target="_blank">https://www.rosenpark.com/de/</a></li>
				<li> Adresse: Anneliese-Pohl-Allee 7-17, 35037 Marburg</li>
				<li> Telefon: +49 6421 60050</li>
			</ul>

		<p><i>Hotel zur Sonne</i></p>
			<ul>
				<li> Web: <a href="https://www.zur-sonne-marburg.de/" rel="nofollow" target="_blank">https://www.zur-sonne-marburg.de/</a></li>
				<li> Adresse: Markt 14, 35037 Marburg</li>
				<li> Telefon: +49 6421 17190</li>
			</ul>

		<p><i>Gartenlaube Marburg</i></p>
			<ul>
				<li> Web: <a href="https://gartenlaube-marburg.de/uebernachtung/#/" rel="nofollow" target="_blank">https://gartenlaube-marburg.de</a></li>
				<li> Adresse: Steinweg 38, 35037 Marburg</li>
				<li> Telefon: +49 6421 617662</li>
			</ul>
	
		<p><i>Elisabeth Bräu</i></p>
			<ul>
				<li> Web: <a href="https://elisabethbraeu.com/" rel="nofollow" target="_blank">https://elisabethbraeu.com/</a></li>
				<li> Adresse: Pension, Steinweg 45, 35037 Marburg</li>
				<li> Telefon: +49 6421 1830544</li>
			</ul>

		<p><i>Hotel Tusculum</i></p>
			<ul>
				<li> Web: <a href="https://www.tusculum.de/" rel="nofollow" target="_blank">https://www.tusculum.de/</a></li>
				<li> Adresse: Gutenbergstraße 25, 35037 Marburg</li>
				<li> Telefon: +49 6421 22778</li>
			</ul>

		<p><i>Hotel & Ristorante del Castello</i></p>
			<ul>
				<li> Web: <a href="https://www.del-castello.de/" rel="nofollow" target="_blank">https://www.del-castello.de/</a></li>
				<li> Adresse: Markt 19 - 35037 Marburg</li>
				<li> Telefon: +49 6421 24302</li>
			</ul>

		<p><i>Hotel Stümpelstal</i></p>
			<ul>
				<li> Web: <a href="https://www.stuempelstal.de/" rel="nofollow" target="_blank">https://www.stuempelstal.de/</a></li>
				<li> Adresse: Stümpelstal 2-6, 35041 Marburg</li>
				<li> Telefon: +49 6420 9070</li>
			</ul>
	
		<p><i>Hotel Kornspeicher</i></p>
			<ul>
				<li> Web: <a href="https://www.hotel-kornspeicher.de/" rel="nofollow" target="_blank">https://www.hotel-kornspeicher.de/</a></li>
				<li> Adresse: Molkereistraße 6, 35039 Marburg</li>
				<li> Telefon: +49 6421 948410</li>
			</ul>

		<p><i>Hotel Restaurant Cala Luna</i></p>
			<ul>
				<li> Web: <a href="https://hotel-calaluna.de/" rel="nofollow" target="_blank">https://hotel-calaluna.de/</a></li>
				<li> Adresse: Alte Kasseler Str. 66, 35039 Marburg</li>
				<li> Telefon: +49 6421 590680</li>
			</ul>

		<p><i>Pension Harmony Marburg</i></p>
			<ul>
				<li> Web: <a href="http://www.pension-harmony-marburg.de/" rel="nofollow" target="_blank">http://www.pension-harmony-marburg.de/</a></li>
				<li> Adresse: Mühltreppe 1, 35037 Marburg</li>
				<li> Telefon: +49 6421 1670703</li>
			</ul>
	
	





	<?php include('../inc/footer.inc'); ?>
</body>
</html>
