<!DOCTYPE html>
<html lang="de">
    <head>
        <title>FOSSGIS 2017 Bildergalerie</title>
        <meta name="description" content="FOSSGIS ist die Abk&uuml;rzung f&uuml;r Freie und Open Source Software f&uuml;r Geoinformationssysteme und ist die f&uuml;hrende Konferenz zu diesem Thema im deutschsprachigen Raum.">
        <meta name="keywords" content="FOSSGIS, Open Source, GIS, Konferenz, Geoinformatik, OpenStreetMap, OSM, Universität Passau">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">

	<link rel="stylesheet" href="../static/styles.min.css">
        <link rel="stylesheet" type="text/css" href="/fonts/Droid_Sans_regular_bold.css" />
        <link href="../../css/screen.css" type="text/css" rel="stylesheet" media="screen">
	<script src="../static/photoswipe.min.js"></script>
	<script src="../static/photoswipe-ui-default.min.js"></script>
	<script src="../static/echo/echo.min.js"></script>
    </head>
    
    <body id="gallery">
      <div id="wrap">
        <?php include('../../inc/head.inc'); ?>
	
        <div id="content">
	  
          <?php
	     include('../../inc/nav.inc');
          ?>
	  
	  <figure>
            <img src="../../img/passau.jpg" width="880" height="241" alt="Passau">
            <figcaption>Photo: Tobias Hobmeier (CC-BY-SA)</figcaption>
          </figure>
	  
          <h2>Bildergalerie - Sonstiges</h2>

		<?php include('imgs.html'); ?>

	</div>
	<?php include('../../inc/footer.inc'); ?>
      </div>
    </body>
</html>
