<!doctype html>
<html lang="de">

<head>
	<?php include "../inc/meta.inc"; ?>

	<base href="<?php echo dirname($_SERVER['SCRIPT_NAME']); ?>">
	<title>FOSSGIS 2026 - Standort, Anreise und Übernachtung</title>

	<link rel="stylesheet" href="./css/normalize.css">
	<link rel="stylesheet" href="./css/base.css">
	<link rel="stylesheet" href="./css/print.css" media="print">
	<link rel="stylesheet" href="./standort/script/leaflet.css"/>

	<script src="./standort/script/leaflet.js"></script>
	<script src="./standort/script/leaflet.addons.js"></script>
	<script src="./standort/data/buildings_web.js"></script>
	<script src="./standort/data/hotels_web.js"></script>
	<script src="./standort/script/map.js"></script>
</head>

<body id="standort">

	<?php include "../inc/header.inc"; ?>
	
	<!--<h1 ID="Standort" name="Standort">Standort</h1>-->
	<h1 ID="Standort" name="Standort">Standort, Infos zu Anreise und Übernachtung</h1>

    <div class="map-container">
		<div id="map" class="map"></div>
	</div>

	<h3>Konferenzort Zentrales Hörsaalgebäude (Mittwoch bis Freitag)</h3>

        <p><strong>Adresse:</strong><br>Zentrales Hörsaalgebäude (ZHG)<br> Georg-August-Universität Göttingen<br>
Pl. d. Göttinger Sieben 5<br>
37073 Göttingen<br>
Karte: <a href="https://openstreetmap.de/karte/?zoom=18&lat=51.54092&lon=9.93581&layers=B00TT" target="_blank">OSM</a>
<br></p>

	<p>Die Konferenz findet im Zentralen Hörsaalgebäude der Uni Göttingen (ZHG) statt. Die Räumlichkeiten sind weitestgehend barrierefrei zugänglich. Hier ist ein Blick in den <a href="https://lageplan.uni-goettingen.de/?ident=5257_1_EG_0.103" target="_blank">Lageplan der Uni Göttingen</a> möglich. Für Fragen zum Erreichen der Räume, zögern Sie nicht das Konferenz-Team anzusprechen.
	</p>
	
	<p>Die Vortragsräume sinnd alle im ZHG sowie das Foyer, wo Welcome Desk, Firmen- und Projekteausstellung, Pausenversorgung und Posterausstellung platziert werden.</p>

	<h3>Konferenzort Institut für Geographie (Samstag)</h3>

        <p><strong>Adresse:</strong><br>Fakultät für Geowissenschaften und Geographie<br> Georg-August-Universität Göttingen<br>
Goldschmidtstr. 3-5<br>
37073 Göttingen<br>
Karte: <a href="https://openstreetmap.de/karte/?zoom=19&lat=51.5563&lon=9.94759&layers=B00TT" target="_blank">OSM</a></p>

 	<p>Am Institut für Geographie findet der OSM-Samstag und Community Sprint statt. Eine Voranmeldung ist erforderlich.

 <!--      <h3 ID="Anreise" name="Anreise">Anreise mit öffentlichen Verkehrsmitteln</h3>
        
        <p><a href="https://www.veranstaltungsticket-bahn.de:443/?event=25170&amp;language=de" style=" width: 300px; height: 40px; display: inline-block; position: relative; text-decoration: none; cursor: pointer; margin: 0; padding: 0; zoom: 1;" target="_blank" title="Klick Veranstaltungsticket Deutsche Bahn"><span style=" display: block; margin: 0; padding: 0; position: relative; line-height: 0; overflow: visible;"><img style=" width: 100%; margin: 0; padding: 0; display: block;" src="standort/img/Button_Veranstaltungsticket.png" alt=""/></span></a></p>
        <p><br>Veranstaltungsticket Deutsche Bahn: https://www.veranstaltungsticket-bahn.de/?event=25170&language=de</p>

        <p>Nutzen Sie den ÖPNV in Göttingen oder gehen Sie zu Fuß, die Wege sind kurz.

               
        <h4>Anreise mit dem Auto</h4>
        <p>Von einer Anreise mit dem Auto wird aufgrund fehlender Parkmöglichkeiten auf dem Uni Campus abgeraten.</p>-->

        <h3>Unterkünfte und Hotels in Göttingen</h3>
        <p><b>Serviceangebot Göttingen Marketing GmbH:</b> 
		<ul>
<li><a href="https://tportal.tomas.travel/tagungen-goettingen/ukv/?doSearch=1&ukv_result_order=1&number_adult=1&rate=NDS00020140610763429&date_from=24.03.2026&date_to=29.03.2026&reset=1&globalReset=1" target="_blank" >Hotelkontingente für FOSSGIS 2026</a></li>
		<li>Die Zimmer müssen bis 4 Wochen vor der Konferenz gebucht werden, ansonsten gehen die Angebote an die Hotels zurück.</li>
		</ul>
<!--		<p><b>Angebote Privatzimmer:</b> 
		<ul>
		<li><a href="standort/data/Privatzimmer_Goettingen_Stand_31-03-2025.pdf" target="_blank">als PDF</a></li>
		</ul>-->

		<h4 ID="Anreise" name="Anreise">weitere Informationen zur Anreise und Standort folgen</h4>
        


 <?php include "../inc/footer.inc"; ?>

</body>
</html>
