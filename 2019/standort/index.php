<!doctype html>
<html lang="de">

<head>
	<?php include "../inc/meta.inc"; ?>

	<base href="<?php echo dirname($_SERVER['SCRIPT_NAME']); ?>">
	<title>FOSSGIS 2019 - Standort</title>

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

	<h2>Standort</h2>

	<div class="map-container">
		<div id="map" class="map"></div>
	</div>

	<p>
		Die Konferenz findet im <b>Z</b>entral- , <b>S</b>eminar- und <b>M</b>ensagebäude der Hochschule für Technik und Wirtschaft Dresden statt.
		Die Zugänge zu den Räumlichkeiten sind behindertengerecht gestaltet. Sollten Sie trotzdem Probleme beim Erreichen der Räume haben, zögern Sie bitte nicht das Konferenz-Team anzusprechen.
	</p>

	<ul class="tiles">
		<li class="tile">
			<img class="img-fluid" src="./data/images/Campus_Plan_HTWDD.jpg" alt="HTW Campus">
		</li>
	</ul>

	<h3>Z-Gebäude: Foyer, PAB & Catering</h3>
	<p>
		Im Foyer des Z-Gebäudes - direkt am Haupteingang der Hochschule - begrüßen wir Sie am <b>Welcome Desk</b>.
		Im angrenzenden Präsentations- und Ausstellungsbereich (<b>PAB</b>) ist Raum für ein Aufeinandertreffen mit den <b>Ausstellern</b> und
		<b>Sponsoren</b>. Hier besteht auch die Möglichkeit sich im "Himmel" als Konferenz-Helfer zu melden oder mit dem FOSSGIS e.V. am Vereinsstand
		ins Gespräch zu kommen.
	</p>

	<img src="./standort/img/plan_z_1.png" class="img-fluid" alt="Zentralgebäude: Foyer & PAB">

	<h3>Z- & S-Gebäude: Hörsäle, Seminarsäle & Catering</h3>
	<p>
		Die <b>Vorträge</b> finden in Hörsälen des Z- und S-Gebäudes im 1. Stock statt. Die Gebäude sind durch einen oberirdischen Durchgang miteinander verbunden.
		Durch die hohe Nachfrage kann es zeitweise dazu kommen, dass die Hörsäle bei Vorträgen voll ausgelastet sind.
		Für diesen Fall haben wir Streaming-Räume zwischen den Hörsälen organisiert.
	</p>

	<ul class="tiles">
		<li class="tile">
			<img src="./standort/img/plan_z_2.png" class="img-fluid" alt="Zentralgebäude: Hörsäle">
		</li>
		<li class="tile">
			<img src="./standort/img/plan_s_2.png" class="img-fluid" alt="Seminargebäude">
		</li>
	</ul>

	<h3>M-Gebäude - Workshops</h3>
	<p>
		Die <b>Workshops</b> werden in Laboren der Fakultät Geoinformation im M-Gebäude im 1. Stock durchgeführt. Dieses ist etwa 3
		Gehminuten vom Haupteingang entfernt. Beachten Sie bitte, dass der Zugang über die Südseite des Gebäudes erfolgen muss.
	</p>

	<img src="./standort/img/plan_m_1.png" class="img-fluid" alt="Mensagebäude: Workshops">

	<h3>Ausflugsmöglichkeiten & Sehenswürdigkeiten</h3>
	<p>Dresden bietet eine Fülle von Möglichkeiten, um den Aufenthalt über die Konferenz hinaus zu verlängern.</p>
	<p>
		Die Dresdner Tourismus Information bietet auf ihrer <a href="https://www.dresden.de/de/tourismus/sehen.php" target="_blank">Webpräsenz</a>
		einen kompakten Überblick zu den vielfältigen Angeboten der Stadt und ihrer Umgebung.
	</p>
	<p>
		Außerdem steht mit der <a href="https://de.wikivoyage.org/wiki/Dresden" target="_blank">Wikivoyage-Seite zur Stadt Dresden</a> ein umfangreicher,
		sehr gut geführter Wiki-Artikel zur Verfügung.
	</p>

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
