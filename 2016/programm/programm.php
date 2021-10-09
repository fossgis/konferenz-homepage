<!DOCTYPE html>
<?php require_once 'simple_html_dom.php'; ?>
<html lang="de">
    <head>
        <title>FOSSGIS 2016 Programm</title>
        <meta name="description" content="FOSSGIS ist die Abk&uuml;rzung f&uuml;r Freie und Open Source Software f&uuml;r Geoinformationssysteme und ist die f&uuml;hrende Konferenz zu diesem Thema im deutschsprachigen Raum.">
        <meta name="keywords" content="FOSSGIS, Open Source, GIS, Konferenz, Geoinformatik, OpenStreetMap, OSM, Universität Passau">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">

        <link rel="stylesheet" type="text/css" href="/fonts/Droid_Sans_regular_bold.css" />
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
	  
          <h2>
	    <?php
	       if (!isset($_GET['day'])) echo "Übersicht";
	       else if ($_GET['day'] == 1) echo "Sonntag, 3. Juli";
	       else if ($_GET['day'] == 2) echo "Montag, 4. Juli";
	       else if ($_GET['day'] == 3) echo "Dienstag, 5. Juli";
	       else if ($_GET['day'] == 4) echo "Mittwoch, 6. Juli";
	       else echo "Übersicht";
	       ?>
	  </h2>
	  <?php

	     if (isset($_GET['day'])) {
	        $html = file_get_html("https://frab.fossgis-konferenz.de/de/2016/public/schedule/" . $_GET['day']);
	        $color = $html->find('div[id=colorkeys]', 0);
                echo $color;
                $table = $html->find('div[id=main-table]', 0);

                $table = str_replace("de/2016/public/events/", "2016/programm/event.php?id=", $table);
                $table = str_replace("de/2016/public/speakers/", "2016/programm/speaker.php?id=", $table);
	        echo $table;

	     } else {
          ?>
	  
          <p>Wählen Sie den gewünschten Konferenztag aus.</p>
          <div style="margin: 5px 85px 7px 160px">
            <ul>
              <li>
                <a href="programm.php?day=1">Sonntag, 03.07.2016</a>
              </li>
              <li>
                <a href="programm.php?day=2">Montag, 04.07.2016</a>
              </li>
              <li>
                <a href="programm.php?day=3">Dienstag, 05.07.2016</a>
              </li>
              <li>
                <a href="programm.php?day=4">Mittwoch, 06.07.2016</a>
              </li>
	      <li>
		<a href="/2016/programm/referenten.php">Referenten</a>
	      </li>
	      <li>
		<a href="https://frab.fossgis-konferenz.de/de/2016/public/schedule" target="_blank">Programmseite</a>
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
