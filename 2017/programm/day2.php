<!DOCTYPE html>
<?php require_once 'simple_html_dom.php'; ?>
<html lang="de">
    <head>
        <title>FOSSGIS 2017 Programm</title>
        <meta name="description" content="FOSSGIS ist die Abk&uuml;rzung f&uuml;r Freie und Open Source Software f&uuml;r Geoinformationssysteme und ist die f&uuml;hrende Konferenz zu diesem Thema im deutschsprachigen Raum.">
        <meta name="keywords" content="FOSSGIS, Open Source, GIS, Konferenz, Geoinformatik, OpenStreetMap, OSM, Universität Passau">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">

        <link rel="stylesheet" type="text/css" href="/static/droidsans/droidsans.css" />
        <link href="../css/screen.css" type="text/css" rel="stylesheet" media="screen">
        <link type="text/css" href="programm.css" media="screen,print" rel="Stylesheet"/>
        <link type="text/css" href="extra.css" media="screen,print" rel="Stylesheet"/>
    </head>

    <body id="programm">
      <div id="wrap">
        <?php include('../inc/head.inc'); ?>

        <div id="content">

          <?php
	     include('../inc/nav.inc');
	     include('prog_nav.inc');
          ?>

        <figure>
            <img src="../img/passau.jpg" width="880" height="241" alt="Passau">
            <figcaption>Photo: Tobias Hobmeier (CC-BY-SA)</figcaption>
          </figure>

          <h2>Donnerstag, 23. März</h2>
<?php

	        $html = file_get_html("https://frab.fossgis-konferenz.de/de/2017/public/schedule/2");
	        $color = $html->find('div[id=colorkeys]', 0);
                echo $color;
                $table = $html->find('div[id=main-table]', 0);

                $table = preg_replace("/de\/2017\/public\/events\/([0-9]+)/", '2017/programm/event\1.html', $table);
                $table = preg_replace("/de\/2017\/public\/speakers\/([0-9]+)/", '2017/programm/speaker\1.html', $table);
	        echo $table;
	  ?>

    </div>
    <?php include('../inc/footer.inc'); ?>
      </div>
    </body>
</html>
