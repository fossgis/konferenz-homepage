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

          <h2>Übersicht</h2>

        <div class="app">Sie konnten selbst nicht dabei sein? Sie finden die Aufzeichnungen im <a href="https://www.youtube.com/user/fossgis">FOSSGIS-Youtube-Cannel </a> und im <a a href="https://www.tib.eu/en/search/?id=198&tx_tibsearch_search%5Bquery%5D=fossgis+2017&tx_tibsearch_search%5Bsearchspace%5D=tn&tx_tibsearch_search%5Bsrt%5D=rk&tx_tibsearch_search%5Bcnt%5D=20">TIB-AV-Portal</a>.</div>

          <p>Programmübersicht:</p>
          <div style="margin: 5px 85px 7px 160px">
            <ul>
              <li><a href="/2017/programm/day1.php">Mittwoch, 22.03.2017</a></li>
              <li><a href="/2017/programm/day2.php">Donnerstag, 23.03.2017</a></li>
              <li><a href="/2017/programm/day3.php">Freitag, 24.03.2017</a></li>
              <li>OSM Samstag, 25.03.2017</li>
              <li><a href="/2017/programm/referenten.php">Referenten</a></li>
            </ul>
          </div>

    </div>
    <?php include('../inc/footer.inc'); ?>
      </div>
    </body>
</html>
