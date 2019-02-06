<!doctype html>
<html lang="de">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<base href="<?php echo dirname($_SERVER['SCRIPT_NAME']); ?>">
	<title>FOSSGIS 2019 - Standort</title>
	<meta name="description" content="Die FOSSGIS-Konferenz ist im D-A-CH Raum die führende Konferenz für Freie und Open Source Software für Geoinformationssysteme OpenStreetMap.">
	<meta name="keywords" content="FOSSGIS, FOSSGIS-Konferenz, 2019, FOSSGIS-Konferenz 2019, Open Source, GIS, Konferenz, Geoinformatik, OpenStreetMap, HTW Dresden">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="./css/normalize.css">
	<link rel="stylesheet" href="./css/base.css">
	<link rel="stylesheet" href="./css/print.css" media="print">

	<link rel="stylesheet" href="../static/leaflet/1.3.4/leaflet.css"/>

	<script src="../static/leaflet/1.3.4/leaflet.js"></script>
	<script src="./standort/script/leaflet.addons.js"></script>
	<script src="./standort/data/buildings.js"></script>
	<script src="./standort/data/hotels.js"></script>
	<script src="./standort/script/map.js"></script>
</head>

<body id="standort">

	<?php include "../inc/header.inc"; ?>

	<h2>Standort & Unterkunft</h2>

	<div class="map-container">
		<div id="map" class="map"></div>
	</div>

	<h3>Allgemeines</h3>
	<p>Die FOSSGIS-Konferenz findet vom 13.-16. März 2019 an der Hochschule für Technik und Wirtschaft in Dresden -
		und damit im Herzen der Landeshauptstadt Sachsens statt (<a href="https://www.openstreetmap.org/relation/7918360#map=14/51.0401/13.7418" target="_blank">Standort auf openstreetmap.org</a>).
	</p>

	<ul class="tiles">
		<li class="tile">
			<img class="img-fluid" src="./data/images/Campus_Plan_HTWDD.jpg" alt="HTW Campus">
		</li>
	</ul>

	<p>Im Foyer des Hauptgebäudes (Z-Gebäude) der Hochschule finden Sie den <i>Welcome Desk</i>, die
		<i>Aussteller</i> sowie die Pausenversorgung.
		Die <i>Vorträge</i> finden in Hörsälen des Z- und S-Gebäudes (Seminargebäude) im 1. Stock statt. Diese sind
		durch einen Durchgang miteinander verbunden.
		Die <i>Workshops</i> werden an der Fakultät Geoinformation im M-Gebäude durchgeführt. Dieses ist etwa 3
		Gehminuten vom Haupteingang entfernt.
	</p>

	<p>Der Zugang zu den Hochschulräumlichkeiten ist behindertengerecht gestaltet.</p>

	<ul class="tiles">
		<li class="tile">
			<img src="./data/images/Zentralgebauede_HTWDD.jpg" height="200" alt="HTW Dresden - Perspektive vom Hauptbahnhof">
		</li>
		<li class="tile">
			<img src="./data/images/Z+Seminargebaeude_HTWDD.jpg" height="200" alt="Verbindung Zentralgebäude (Z) und Seminargebäude (S) HTW Dresden">
		</li>
		<li class="tile">
			<img src="./data/images/Mensagebaeude_HTWDD.jpg" height="200" alt="Verbindung Zentralgebäude (Z) und Seminargebäude (S) HTW Dresden">
		</li>
	</ul>

	<h3>Ausflugsmöglichkeiten & Sehenswürdigkeiten</h3>
	<p>Dresden bietet eine Fülle von Möglichkeiten, um den Aufenthalt über die Konferenz hinaus zu verlängern.</p>
	<p>Die Dresdner Tourismus Information bietet auf ihrer <a href="https://www.dresden.de/de/tourismus/sehen.php" target="_blank">Webpräsenz</a> einen kompakten Überblick zu den vielfältigen Angeboten der Stadt und ihrer Umgebung.</p>

	<h3>Unterkunft</h3>
	<p>In Dresden steht eine Vielzahl an Unterkünften zur Verfügung. Durch die Lage der HTW Dresden nahe dem
		Hauptbahnhof und der Altstadt sind auch in unmittelbarer Nähe einige Hotels und Hostels vorhanden.<br>
		<b>Hinweis:</b> Bitte beachten Sie, dass die Stadt Dresden eine <a href="https://www.dresden.de/de/rathaus/dienstleistungen/beherbergungssteuer_d115.php?shortcut=beherbergungssteuer"> Beherbergungssteuer</a>  erhebt.

	<p><i>IntercityHotel Dresden</i></p>
	<ul>
		<li> Web: <a
					href="https://www.intercityhotel.com/hotels/alle-hotels/deutschland/dresden/intercityhotel-dresden/zimmer"
					rel="nofollow" target="_blank">https://www.intercityhotel.com/</a></li>
		<li> Adresse: Wiener Platz 8, 01069 Dresden</li>
		<li> Telefon: 0351 / 263550</li>
	</ul>

	<p><i>Hotel Pullman Dresden Newa</i></p>
	<ul>
		<li> Web: <a href="https://www.pullman-hotel-dresden.de/" rel="nofollow" target="_blank">https://www.pullman-hotel-dresden.de/</a>
		</li>
		<li> Adresse: Prager Str. 2C, 01069 Dresden</li>
		<li> Telefon: 0351 / 48140</li>
	</ul>

	<p><i> Accor Hotels Dresden</i></p>
	<ul>
		<li> Web: <a href="https://www.accorhotels.com/de/city/hotels-dresden-v1130.shtml" rel="nofollow" target="_blank">https://www.accorhotels.com/de</a></li>
		<li>  ibis Dresden Bastei, Prager Strasse 5, 01067 Dresden</li>
		<li> ibis Dresden Koenigstein, Prager Strasse 9, 01067 Dresden</li>
		<li> Telefon: 0351/48564856</li>

	</ul>

	<p><i> The Student Hotel Dresden</i>
	<ul>
		<li> Web: <a href="https://www.thestudenthotel.com/dresden" rel="nofollow" target="_blank">https://www.thestudenthotel.com/dresden</a>
		</li>
		<li> Adresse: Prager Str. 13, 01069 Dresden</li>
		<li> E-Mail: dresden@thestudenthotel.com</li>
	</ul>

	<p><i> A&O Dresden Hauptbahnhof</i></p>
	<ul>
		<li> Web: <a href="https://www.aohostels.com/de/dresden/" rel="nofollow" target="_blank">https://www.aohostels.com/de/dresden/</a>
		</li>
		<li> Adresse: Strehlener Str. 10, 01069 Dresden</li>
	</ul>

	<p><i>Internationales Gästehaus (über Studentenwerk Dresden)</i></p>
	<ul>
		<li> Web: <a href="https://www.studentenwerk-dresden.de/wohnen/gaestehaus.html" rel="nofollow" target="_blank">https://www.studentenwerk-dresden.de/wohnen/gaestehaus.html</a>
		</li>
		<li> Adresse: Hochschulstraße 50, 01069 Dresden</li>
		<li> Telefon: 0351 / 4692-781 /-780</li>
		<li>E-Mail: igh@studentenwerk-dresden.de</li>
	</ul>

	<p><i> DJH Jugendherberge Dresden "Rudi Arndt"</i></p>
	<ul>
		<li> Web: <a href="https://www.jh-rudiarndt.de/" rel="nofollow" target="_blank">https://www.jh-rudiarndt.de/</a></li>
		<li> Adresse: Hübnerstraße 11, 01069 Dresden</li>
		<li> Telefon: 0351 4710667</li>
		<li>E-Mail: dresden.rudiarndt@jugendherberge.de</li>
	</ul>

	<h3>Öffentlicher Nahverkehr</h3>
	<p>Der öffentliche Nahverkehr wird durch die Dresdner Verkehrsbetriebe (DVB) organisiert. Der Ticketkauf kann
		an den meisten Haltestellen an Automaten erfolgen (teilweise nur Bargeld, größere Haltestellen per EC/VISA).
		Alternativ kann die Fahrt direkt beim Busfahrer, oder aber in der Tram am Kleingeldautomaten gelöst werden.
		Für Fahrten im Stadtgebiet (inkl. S-Bahn und Fahrten zum Flughafen) genügt ein Fahrschein der Preisstufe 1
		bzw. für eine Tarifzone (Einzelfahrt derzeit 2,40€). Bei einem längeren Aufenthalt in Dresden sind entweder
		4er-Streifen (8,60€), Tageskarten (6,00€ - gültig bis 4:00 Uhr des Folgetages) oder eine Wochenkarte
		(21,90€) sinnvoll.
	</p>

	<p>Die nächsten Haltestellen zum HTW-Campus sind Hauptbahnhof (Tram 3 & 8), bzw. Hauptbahnhof Nord
		(Tram 3, 7, 8, 9 & 11), Reichenbachstraße (Bus 66) und Uhlandstraße (ebenfalls Bus 66).
	</p>

	<p><b>Hilfreiche Informationen</b></p>
	<ul>
		<li><a href="https://www.dvb.de/de-de/" rel="nofollow" target="_blank"> Fahrplan im Web</a></li>
		<li><a href="https://www.dvb.de/de-de/tickets/ticketuebersicht/" rel="nofollow" target="_blank"> Ticketübersicht</a></li>
		<li>
			<a href="https://www.dvb.de/-/media/files/liniennetz/lnp_09042018/stadtplan_top_090418_bau%20augbr_web.pdf" rel="nofollow" target="_blank">
				Stadtplan der DVB</a></li>
		<li> App-Empfehlung für Android: <a href="https://play.google.com/store/apps/details?id=de.faplino&hl=de" rel="nofollow" target="_blank">Faplino
				- DVB Info Dresden</a></li>
		<li>App-Empfehlung für iOS: <a href="https://itunes.apple.com/de/app/fahrinfo-dresden/id314790387?mt=8" rel="nofollow" target="_blank">FahrInfo
				Dresden</a></li>

		<li><b>Fahrradverleih:</b> <a href="https://www.sz-bike.de/de/dresden/information/" rel="nofollow" target="_blank">sz-bike</a></li>
	</ul>

	<h3>Taxi</h3>
	<ul>
		<li>FunkTAXI Dresden: 0351 / 211 211</li>
		<li><a href="https://www.gelbeseiten.de/taxi/dresden" rel="nofollow" target="_blank"> weitere Taxibetriebe</a></li>
	</ul>

	<?php include('../inc/footer.inc'); ?>
</body>
</html>
