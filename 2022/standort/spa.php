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
  <link rel="stylesheet" href="./standort/css/location.css">

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

  

	
	<h2>Forschungszentrum Deutscher Sprachatlas </h2>
	<div class="location">
	 <img class="img-fluid"  src="https://fossgis-konferenz.de/2022/standort/img/Sprachatlas.jpg" alt="Sprachatlas"> 
	 <figcaption><b>Photo: (C) by Cordula Mann</figcaption>
	</div>
	<p> Biegenstrasse 10, siehe auf die <a href="#">Karte 03</a> </p>
	



	<?php include('../inc/footer.inc'); ?>
</body>
</html>
