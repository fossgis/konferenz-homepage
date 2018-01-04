<!DOCTYPE html>
<?php require_once 'simple_html_dom.php'; ?>
<html lang="de">
    <head>
        <title>FOSSGIS 2018 Programm</title>
        <meta name="description" content="FOSSGIS ist die Abk&uuml;rzung f&uuml;r Freie und Open Source Software f&uuml;r Geoinformationssysteme und ist die f&uuml;hrende Konferenz zu diesem Thema im deutschsprachigen Raum.">
        <meta name="keywords" content="FOSSGIS, Open Source, GIS, Konferenz, Geoinformatik, OpenStreetMap, OSM, Universität Bonn">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">

        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Droid+Sans:regular,bold" />
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
                </figure>>
	  
	  <?php

	     if (isset($_GET['id'])) {
	        $html = file_get_html("https://frab.fossgis-konferenz.de/de/2018/public/speakers/" . $_GET['id']);
	        $referent = $html->find('h2[class=title]', 0)->innertext;
          $text1 = $html->find('div[id=basic]', 0);
	  $text2 = $html->find('div[id=details]', 0);
	  $text3 = $html->find('div[id=sidebar]', 0);

	  $text3 = str_replace("de/2018/public/events/", "2018/programm/event.php?id=", $text3);
          $text3 = str_replace("/assets/", "https://frab.fossgis-konferenz.de/assets/", $text3);
          $text3 = str_replace("/system/", "https://frab.fossgis-konferenz.de/system/", $text3);
	  
          $text1 = str_replace("/assets/", "https://frab.fossgis-konferenz.de/assets/", $text1);
          $text1 = str_replace("/system/", "https://frab.fossgis-konferenz.de/system/", $text1);

	  echo "<h2>" . $referent . "</h2>";
          echo $text1;
	  echo $text2;
	  echo $text3;
	     }
          ?>
	  
	</div>
	<?php include('../inc/footer.inc'); ?>
      </div>
    </body>
</html>
