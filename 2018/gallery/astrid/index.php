<!doctype html>
<html>
    <head>
        <title>FOSSGIS 2018 Bildergalerie</title>
        <meta name="description" content="Die FOSSGIS-Konferenz ist die führende Konferenz für Freie und Open Source Software für Geoinformationssysteme und OpenStreetMap.">
        <meta charset="utf-8">

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
                <?php include('../../inc/nav.inc'); ?>

                <figure>
                    <img src="../../img/bonn.jpeg" width="880" height="241" alt="Bonn">
                    <figcaption>Photo: Stadt Bonn</figcaption>
                </figure>

                <h2>Bildergalerie</h2>

		<?php include('imgs.html'); ?>

            </div>
            <?php include('../../inc/footer.inc'); ?>
        </div>
    </body>
</html>
