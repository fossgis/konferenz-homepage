<!DOCTYPE html>
<?php require_once 'simple_html_dom.php'; ?>
<html lang="de">
    <head>
        <title>FOSSGIS 2018 Programm</title>
        <meta name="description" content="FOSSGIS ist die Abk&uuml;rzung f&uuml;r Freie und Open Source Software f&uuml;r Geoinformationssysteme und ist die f&uuml;hrende Konferenz zu diesem Thema im deutschsprachigen Raum.">
        <meta name="keywords" content="FOSSGIS, Open Source, GIS, Konferenz, Geoinformatik, OpenStreetMap, OSM, Universität Bonn">
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
                    <img src="../img/bonn.jpeg" width="880" height="241" alt="Bonn">
                    <figcaption>Photo: Stadt Bonn</figcaption>
                </figure>

          <h2>
	    <?php
	       if (!isset($_GET['day'])) echo "Übersicht";
           else if ($_GET['day'] == 0) echo "Mittwoch, 21. März";
	       else if ($_GET['day'] == 1) echo "Mittwoch, 21. März";
	       else if ($_GET['day'] == 2) echo "Donnerstag, 22. März";
	       else if ($_GET['day'] == 3) echo "Freitag, 23. März";
	       else if ($_GET['day'] == 4) echo "Samstag, 24. März";
	       else echo "Übersicht";
	       ?>
	  </h2>
	  <?php

	     if (isset($_GET['day'])) {
	        $html = file_get_html("https://frab.fossgis-konferenz.de/de/2018/public/schedule/" . $_GET['day']);
	        $color = $html->find('div[id=colorkeys]', 0);
                echo $color;
                $table = $html->find('div[id=main-table]', 0);

                $table = str_replace("de/2018/public/events/", "2018/programm/event.php?id=", $table);
                $table = str_replace("de/2018/public/speakers/", "2018/programm/speaker.php?id=", $table);
	        echo $table;

	     } else {
          ?>

	<div class="app">Sie konnten selbst nicht dabei sein? Sie finden die Aufzeichnungen auf </br><a href="https://media.ccc.de/" traget="_blank"><img src="../img/media.ccc.de.png" alt="media.ccc.de" /></a></br> unter <a href="https://media.ccc.de/c/fossgis2018">https://media.ccc.de/c/fossgis2018</a>.</div>

          <p>Programmübersicht:</p>
          <div style="margin: 5px 85px 7px 160px">
            <ul>
              <li>
                <a href="programm.php?day=0">Mittwoch, 21.03.2018</a>
              </li>

              <li>
                <a href="programm.php?day=2">Donnerstag, 22.03.2018</a>
              </li>

              <li>
                <a href="programm.php?day=3">Freitag, 23.03.2018</a>
              </li>
	          <li>
                <a href="programm.php?day=4">OSM Samstag, 24.03.2018</a>
              </li>
	          <li>
		        <a href="/2018/programm/referenten.php">Referenten</a>
	          </li>
	          <li>
		        <a href="https://frab.fossgis-konferenz.de/de/2018/public/schedule" target="_blank">Programmseite</a>
			  <li>
				<a href="http://streaming.media.ccc.de/">Vorträge im Livestream</a></li>
	          </li>
            </ul>
          </div>
<p>&nbsp; </p>
  <p>FOSSGIS 2018 auf dem Smartphone:</p>
          <div style="margin: 5px 85px 7px 160px">
            <ul>
              <li>Programm für Android (Tobias Preuss) <a href="https://play.google.com/store/apps/details?id=info.metadude.android.fossgis.schedule" target="_blank">PlayStore</a> oder <a href="../data/FOSSGIS-2018-1.33.5.apk" target="_blank">Direktdownload der APK</a>
              </li>
 			  <li>Lokalteam-APP (Stephan Herritsch und Arne Schubert) <a href="https://yagajs.org/fossgis2018.apk">Direktdownload der APK</a> <a href="../data/FOSSGIS-2018-1.33.5.apk" target="_blank"></a>oder <a href="https://fossgis2018.yagajs.org/" target="_blank"> als Web-APP.              </li> 


          <?php
	     }
	  ?>

	</div>
	<?php include('../inc/footer.inc'); ?>
      </div>
    </body>
</html>
