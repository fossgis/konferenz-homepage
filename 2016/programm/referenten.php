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
	  
	  <?php

	     $html = file_get_html("https://frab.fossgis-konferenz.de/de/2016/public/speakers");
	     $referenten = $html->find('table[class=list]', 0);

 	     $referenten = str_replace("/assets/person_small-6becbdd9bedc5ac3962dfb66f90e5ebb8fdbb97c287002e97bba3762a122a2bf.png", "/2016/programm/avatars/unknown-small.png", $referenten);
 	     $referenten = preg_replace('/\/system\/people\/avatars\/000\/000\/0(..)\/small\/[^"]*\.(...)\?[0-9]+/', '/2016/programm/avatars/small-\1.\2', $referenten);
 	     $referenten = str_replace("/2016/programm/avatars/small-97.JPG", "/2016/programm/avatars/small-97.jpg", $referenten);
# 	     $referenten = preg_replace('/de\/2016\/public\/events\/([0-9]+)/', '2016/programm/event\1.html', $referenten);
# 	     $referenten = preg_replace('/de\/2016\/public\/speakers\/([0-9]+)/', '2016/programm/speaker\1.html', $referenten);
 	     $referenten = str_replace("de/2016/public/events/", "2016/programm/event.php?id=", $referenten);
 	     $referenten = str_replace("de/2016/public/speakers/", "2016/programm/speaker.php?id=", $referenten);
             $referenten = str_replace("/assets/", "https://frab.fossgis-konferenz.de/assets/", $referenten);
	     $referenten = str_replace("/system/", "https://frab.fossgis-konferenz.de/system/", $referenten);
	  
	  echo "<h2>Referenten</h2>";
          echo $referenten;
          ?>
	  
	</div>
	<?php include('../inc/footer.inc'); ?>
      </div>
    </body>
</html>
