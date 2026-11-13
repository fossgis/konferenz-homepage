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
	

 <!--      <h3 ID="Anreise" name="Anreise">Anreise mit öffentlichen Verkehrsmitteln</h3>
        
        <p><a href="https://www.veranstaltungsticket-bahn.de:443/?event=25170&amp;language=de" style=" width: 300px; height: 40px; display: inline-block; position: relative; text-decoration: none; cursor: pointer; margin: 0; padding: 0; zoom: 1;" target="_blank" title="Klick Veranstaltungsticket Deutsche Bahn"><span style=" display: block; margin: 0; padding: 0; position: relative; line-height: 0; overflow: visible;"><img style=" width: 100%; margin: 0; padding: 0; display: block;" src="standort/img/Button_Veranstaltungsticket.png" alt=""/></span></a></p>
        <p><br>Veranstaltungsticket Deutsche Bahn: https://www.veranstaltungsticket-bahn.de/?event=25170&language=de</p>

        <p>Nutzen Sie den ÖPNV in Göttingen oder gehen Sie zu Fuß, die Wege sind kurz.

               
        <h4>Anreise mit dem Auto</h4>
        <p>Von einer Anreise mit dem Auto wird aufgrund fehlender Parkmöglichkeiten auf dem Uni Campus abgeraten.</p>-->

        <h3>Unterkünfte und Hotels in Heidelberg</h3>
        <h4>Serviceangebot der Heidelberg Marketing GmbH:</h4>
		<ul>
            <li><a href="https://tportal.tomas.travel/heidelberg-kongresse/ukv/result?tt=rquoa1bd4b2k2osrcmifn92mp4" target="_blank" >Hotelkontingente für FOSSGIS 2027</a></li>
            <li>Die Zimmer müssen bis 4 Wochen vor der Konferenz gebucht werden, ansonsten gehen die Angebote an die Hotels zurück.</li>
		</ul>

        <h4>Weitere Unterkünfte in Konferenz- oder Bahnhofsnähe:</h4>
        <ul>
            <li><a href="https://www.atlantic-hotels.de/en/hotel-heidelberg/" target="_blank" rel="noopener">Atlantic Hotel</a></li>
            <li><a href="https://www.hotel-classic-inn.de/" target="_blank" rel="noopener">Classic Inn</a></li>
            <li><a href="https://www.hotelcentral-heidelberg.info/" target="_blank" rel="noopener">Hotel Central</a></li>
            <li><a href="https://all.accor.com/hotel/1447/index.en.shtml" target="_blank" rel="noopener">Ibis Heidelberg</a></li>
            <li><a href="https://hrewards.com/en/intercityhotel-heidelberg" target="_blank" rel="noopener">InterCity Hotel</a></li>
            <li><a href="https://www.premierinn.com/de/de/hotels/deutschland/baden-wuerttemberg/heidelberg/heidelberg-city-bahnstadt.html" target="_blank" rel="noopener">Premier Inn City Bahnstadt</a></li>
            <li><a href="https://www.hostelheidelberg.de/" target="_blank" rel="noopener">Steffis Hostel</a></li>
        </ul>

        <h4>Weitere Hostels:</h4>
        <ul>
            <li><a href="https://www.jugendherberge.de/jugendherbergen/heidelberg/" target="_blank" rel="noopener">Jugendherberge</a></li>
            <li><a href="https://lotte-heidelberg.de/" target="_blank" rel="noopener">Lotte - The Backpackers</a></li>
        </ul>

        <h4>Weitere Hotels:</h4>
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
		<h4 ID="Anreise" name="Anreise">weitere Informationen zur Anreise und Standort folgen</h4>-->
       


 <?php include "../inc/footer.inc"; ?>

</body>
</html>
