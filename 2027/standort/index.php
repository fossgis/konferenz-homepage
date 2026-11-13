<!doctype html>
<html lang="de">

<head>
	<?php include "../inc/meta.inc"; ?>

	<base href="<?php echo dirname($_SERVER['SCRIPT_NAME']); ?>">
	<title>FOSSGIS 2027 - Standort, Anreise und Übernachtung</title>

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

<h3>Konferenzort</h3>

        <p><strong>Adresse:</strong><br>audiMAX Uni Heidelberg<br> Im Neuenheimer Feld 289<br>
69120 Heidelberg<br>

<!--    <div class="map-container">
		<div id="map" class="map"></div>-->
<iframe style="width: 100%; height: 500px; border: 0;" allowfullscreen allow="geolocation" src="//umap.openstreetmap.de/en/map/fossgis-2027_136954?scaleControl=false&miniMap=false&scrollWheelZoom=false&zoomControl=true&editMode=disabled&moreControl=true&searchControl=null&tilelayersControl=null&embedControl=null&datalayersControl=true&onLoadPanel=none&captionBar=false&captionMenus=true"></iframe><p><a href="//umap.openstreetmap.de/en/map/fossgis-2027_136954?scaleControl=false&miniMap=false&scrollWheelZoom=true&zoomControl=true&editMode=disabled&moreControl=true&searchControl=null&tilelayersControl=null&embedControl=null&datalayersControl=true&onLoadPanel=none&captionBar=false&captionMenus=true" target="_blanck">See full screen</a></p>
<!--	</div>-->



	<p>Die Konferenz findet hauptsächlich im audiMAX der Uni Heidelberg statt. Die Workshops und der OSM-Samstag sowie Community Spring im Mathematikum (205). Die Räumlichkeiten sind weitestgehend barrierefrei zugänglich. Für Fragen zum Erreichen der Räume, zögern Sie nicht das Konferenz-Team anzusprechen.
	</p>


        <h3 ID="Anreise" name="Anreise">Anreise</h3>
        <h4 id="anreise-oepnv">… mit öffentlichen Verkehrsmitteln nach Heidelberg</h3>

        <!--<p><a href="https://www.veranstaltungsticket-bahn.de:443/?event=25170&amp;language=de" style=" width: 300px; height: 40px; display: inline-block; position: relative; text-decoration: none; cursor: pointer; margin: 0; padding: 0; zoom: 1;" target="_blank" title="Klick Veranstaltungsticket Deutsche Bahn"><span style=" display: block; margin: 0; padding: 0; position: relative; line-height: 0; overflow: visible;"><img style=" width: 100%; margin: 0; padding: 0; display: block;" src="standort/img/Button_Veranstaltungsticket.png" alt=""/></span></a></p>
        <p><br>Veranstaltungsticket Deutsche Bahn: https://www.veranstaltungsticket-bahn.de/?event=25170&language=de</p>-->

        <p><a href="https://www.bahn.de/buchung/start#?ZO=Heidelberg+Hbf" target="_blank">Heidelberg Hbf</a> und <a href="https://www.bahn.de/buchung/start#?ZO=Mannheim+Hbf" target="_blank">Mannheim Hbf</a> sind gut angebundene Fernverkehrsbahnhöfe. Von Mannheim Hbf fährt in regelmäßigen Abständen Nahverkehr nach Heidelberg.</p>

        <h4 id="anreise-auto">… mit dem Auto</h4>
        <p>Von einer Anreise mit dem Auto wird aufgrund fehlender Parkmöglichkeiten auf dem Uni Campus und viel Verkehr zu Stoßzeiten abgeraten. Es gibt am Rande des Campus einige <a href="https://www.uni-heidelberg.de/md/zentral/universitaet/beschaeftigte/service/bau/parken/201703_parkplaetze.pdf" target="_blank">kostenpflichte Parkmöglichkeiten</a>. Wenn Sie mit dem Auto anreisen wollen empfiehlt es sich — vor allem in den Stoßzeiten — das Auto am Übernachtungsort stehen zu lassen und den ÖPNV oder das Fahrrad zu nutzen.</p>

        <h4 id="anreise-in-hd">… und in Heidelberg?</h3>
        <p id="anreise-in-hd-oepnv">Nutzen Sie den ÖPNV in Heidelberg oder gehen Sie zu Fuß — die Wege sind kurz. Die Konferenz befindet sich in der Nähe der Haltestelle Bunsengymnasium. Hilfreiche Infos liefern hier die <a href="https://www.bahn.de/buchung/start#?ZO=Neuenheim+Bunsengymnasium%2C+Heidelberg" target="_blank">DB Reiseauskunft</a>, die <a href="https://www.vrn.de/mng/#/XSLT_TRIP_REQUEST2?restriction=0&dest=Heidelberg,+Neuenheim,+Bunsengymnasium&isDeparture=true" target="_blank">VRN Reiseauskunft</a> oder der <a href="https://netz.rnv-online.de/maps/slnp/stops/251" target="_blank">Interaktive Liniennetzplan der RNV</a>.</p>

        <p id="anreise-in-hd-rad">Wenn man etwas schneller als zu Fuß, aber ohne ÖPNV unterwegs sein will, kann man sich auch Fahrräder oder E-Tretroller mieten. <a href="https://www.vrnnextbike.de" target="_blank">VRNnextbike</a> hat in Heidelberg ein dichtes Netz von Stationen an denen Fahrräder ausgeliehen und zurück gegeben werden können. Es funktionieren auch bereits bestehende Nextbike Accounts aus anderen Städten und Regionen. E-Tretroller gibt es von verschiedenen Anbietern (z.B. Bolt, Dott/TIER, Voi). Je nach Stadtteil gibt es auch für diese feste Abgabeplätze.</p>

        <h3 id="unterkuenfte">Unterkünfte und Hotels in Heidelberg</h3>
        <h4 id="unterkuenfte-kontingent">Serviceangebot der Heidelberg Marketing GmbH:</h4>
		<ul>
            <li><a href="https://tportal.tomas.travel/heidelberg-kongresse/ukv/result?tt=rquoa1bd4b2k2osrcmifn92mp4" target="_blank" >Hotelkontingente für FOSSGIS 2027</a></li>
            <li>Die Zimmer müssen bis 4 Wochen vor der Konferenz gebucht werden, ansonsten gehen die Angebote an die Hotels zurück.</li>
		</ul>

        <h4 id="unterkuenfte-naehe">Weitere Unterkünfte in Konferenz- oder Bahnhofsnähe:</h4>
        <ul>
            <li><a href="https://www.atlantic-hotels.de/en/hotel-heidelberg/" target="_blank" rel="noopener">Atlantic Hotel</a></li>
            <li><a href="https://www.hotel-classic-inn.de/" target="_blank" rel="noopener">Classic Inn</a></li>
            <li><a href="https://www.hotelcentral-heidelberg.info/" target="_blank" rel="noopener">Hotel Central</a></li>
            <li><a href="https://all.accor.com/hotel/1447/index.en.shtml" target="_blank" rel="noopener">Ibis Heidelberg</a></li>
            <li><a href="https://hrewards.com/en/intercityhotel-heidelberg" target="_blank" rel="noopener">InterCity Hotel</a></li>
            <li><a href="https://www.premierinn.com/de/de/hotels/deutschland/baden-wuerttemberg/heidelberg/heidelberg-city-bahnstadt.html" target="_blank" rel="noopener">Premier Inn City Bahnstadt</a></li>
            <li><a href="https://www.hostelheidelberg.de/" target="_blank" rel="noopener">Steffis Hostel</a></li>
        </ul>

        <h4 id="unterkuenfte-hostels">Weitere Hostels:</h4>
        <ul>
            <li><a href="https://www.jugendherberge.de/jugendherbergen/heidelberg/" target="_blank" rel="noopener">Jugendherberge</a></li>
            <li><a href="https://lotte-heidelberg.de/" target="_blank" rel="noopener">Lotte - The Backpackers</a></li>
        </ul>

        <h4 id="unterkuenfte-hotels">Weitere Hotels:</h4>
        <ul>
            <li><a href="https://bergheim41.de/" target="_blank" rel="noopener">Bergheim 41</a></li>
            <li><a href="https://www.cafe-frisch.de/" target="_blank" rel="noopener">Café Frisch</a></li>
            <li><a href="http://www.guesthouse-hd.de/" target="_blank" rel="noopener">Guesthouse Heidelberg</a></li>
            <li><a href="https://www.leonardo-hotels.com/heidelberg/leonardo-hotel-heidelberg" target="_blank" rel="noopener">Leonardo</a></li>
            <li><a href="https://www.meininger-hotels.com/en/hotels/heidelberg/hotel-heidelberg-central-station/" target="_blank" rel="noopener">Meininger</a></li>
            <li><a href="https://www.premierinn.com/de/de/hotels/deutschland/baden-wuerttemberg/heidelberg/heidelberg-city-zentrum.html" target="_blank" rel="noopener">Premier Inn City Zentrum</a></li>
            <li><a href="https://www.staycity.com/heidelberg/heidelberg" target="_blank" rel="noopener">StayCity</a></li>
        </ul>
<!--		<p><b>Angebote Privatzimmer:</b>
		<ul>
		<li><a href="standort/data/Privatzimmer_Goettingen_Stand_31-03-2025.pdf" target="_blank">als PDF</a></li>
		</ul>



 <?php include "../inc/footer.inc"; ?>

</body>
</html>
