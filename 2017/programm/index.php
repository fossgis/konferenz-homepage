<!DOCTYPE html>
<?php require_once 'simple_html_dom.php'; ?>
<html lang="de">
    <head>
        <title>FOSSGIS 2017 Programm</title>
        <meta name="description" content="FOSSGIS ist die Abk&uuml;rzung f&uuml;r Freie und Open Source Software f&uuml;r Geoinformationssysteme und ist die f&uuml;hrende Konferenz zu diesem Thema im deutschsprachigen Raum.">
        <meta name="keywords" content="FOSSGIS, Open Source, GIS, Konferenz, Geoinformatik, OpenStreetMap, OSM, Universität Passau">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">

         
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

          <h2>
	    <?php
	       if (!isset($_GET['day'])) echo "Übersicht";
	       else if ($_GET['day'] == 0) echo "Mittwoch, 22. März";
	       else if ($_GET['day'] == 1) echo "Donnerstag, 23. März";
	       else if ($_GET['day'] == 2) echo "Freitag, 24. März";
	       else if ($_GET['day'] == 3) echo "Samstag, 25. März";
	       else echo "Übersicht";
	       ?>
	  </h2>
	  <?php

	     if (isset($_GET['day'])) {
	        $html = file_get_html("https://frab.fossgis-konferenz.de/de/2017/public/schedule/" . $_GET['day']);
	        $color = $html->find('div[id=colorkeys]', 0);
                echo $color;
                $table = $html->find('div[id=main-table]', 0);

                $table = str_replace("de/2017/public/events/", "2017/programm/event.php?id=", $table);
                $table = str_replace("de/2017/public/speakers/", "2017/programm/speaker.php?id=", $table);
	        echo $table;

	     } else {
          ?>

		  <div class="app">Sie konnten selbst nicht dabei sein? Sie finden die Aufzeichnungen im <a href="https://www.youtube.com/user/fossgis">FOSSGIS-Youtube-Cannel </a> und im <a a href="https://www.tib.eu/en/search/?id=198&tx_tibsearch_search%5Bquery%5D=fossgis+2017&tx_tibsearch_search%5Bsearchspace%5D=tn&tx_tibsearch_search%5Bsrt%5D=rk&tx_tibsearch_search%5Bcnt%5D=20">TIB-AV-Portal</a>.</div>
                                   
          <p>Programmübersicht:</p>
          <div style="margin: 5px 85px 7px 160px">
            <ul>
              <li>
                <a href="programm.php?day=0">Mittwoch, 22.03.2017</a>
              </li>

              <li>
                <a href="programm.php?day=1">Donnerstag, 23.03.2017</a>
              </li>

              <li>
                <a href="programm.php?day=2">Freitag, 24.03.2017</a>
              </li>
	          <li>
                <a href="programm.php?day=3">OSM Samstag, 25.03.2017</a>
              </li>
	          <li>
		        <a href="/2017/programm/referenten.php">Referenten</a>
	          </li>
	          <li>
		        <a href="https://frab.fossgis-konferenz.de/de/2017/public/schedule" target="_blank">Programmseite</a>
	          </li>
            </ul>
          </div>

          <?php
	     }
	  ?>

	</div>
	<?php include('../inc/footer.inc'); ?>
      </div>
    </body>
</html>
