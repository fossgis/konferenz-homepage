<!doctype html>
<html lang="de">

<head>
	<?php include "../inc/meta.inc"; ?>

	<base href="<?php echo dirname($_SERVER['SCRIPT_NAME']); ?>">
	<title>FOSSGIS 2022 - Standort Marburg</title>

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

<!--	<div class="map-container">
		<div id="map" class="map"></div>
	</div>-->

  

	
	<h2>H&ouml;rsaalgeb&auml;ude </h2>
	 <img src="https://fossgis-konferenz.de/2022/standort/img/HS_front.jpg" alt="HS" width="500" height="600"> 
	<p> Biegenstrasse 10, siehe auf die <a href="#">Karte 01</a> </p>
	



	<?php include('../inc/footer.inc'); ?>
</body>
</html>
