<!DOCTYPE html>
<html lang="de">
    <head>
        <title>FOSSGIS 2014</title>
        <meta name="description" content="FOSSGIS ist die Abkürzung für Freie und Open Source Software für Geoinformationssysteme und ist die führende Konferenz zu diesem Thema im deutschsprachigen Raum.">
        <meta name="author" content="Oliver Roick. http://oliverroick.de/">
        <meta name="keywords" content="FOSSGIS, Open Source, GIS, Konferenz, Geoinformatik, OpenStreetMap, Berlin, Beuth Hochschule">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">

        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:regular,bold" />
        <link href="../css/screen.css" type="text/css" rel="stylesheet" media="screen">

        <script type="text/javascript" src="http://www.openlayers.org/api/OpenLayers.js"> </script>
        <script type="text/javascript" src="script/function.js"> </script>
		
    </head>
    <body id="anreise">
        <div id="wrap">
        	<?php include('../inc/head.inc'); ?>
            
            <div id="content">
                
                <?php include('../inc/nav.inc'); ?>
				
                <figure>
					<img src="../img/berlin.jpg" width="880" height="220" alt="Skyline Berlin">
					<figcaption>Photo: CC-BY-SA <a href="http://www.flickr.com/photos/giesenbauer/3458525781/">Bjørn Giesenbauer</a></figcaption>
				</figure>
                
                <h2>Anreise und Unterkunft</h2>
                <div id="mapContainer">
                    <div id="map"></div>    
                </div>
                
                <h3>Anreise per Bahn</h3>
                <ul class="list">
                    <li>
                        <a href="http://reiseauskunft.bahn.de/bin/query.exe/dn?getstop=1&dbkanal_008=L01_S01_D001_KLR0011_konzernportal_LZ03&S=&Z=berlin+hbf&date=18.12.13&time=16%3A18&timesel=depart&submit="> Berlin Hauptbahnhof</a>
                    </li>
                    <li>
                        <a href="http://reiseauskunft.bahn.de/bin/query.exe/dn?getstop=1&dbkanal_008=L01_S01_D001_KLR0011_konzernportal_LZ03&S=&Z=berlin+ostbahnhof&date=18.12.13&time=16%3A18&timesel=depart&submit="> Berlin Ostbahnhof</a>
                    </li>
                    <li>
                        <a href="http://reiseauskunft.bahn.de/bin/query.exe/dn?getstop=1&dbkanal_008=L01_S01_D001_KLR0011_konzernportal_LZ03&S=&Z=Berlin+Zoologischer+Garten&date=18.12.13&time=16%3A18&timesel=depart&submit="> Berlin Bahnhof Zoo</a>
                    </li>
                    <li>
                        <a href="http://reiseauskunft.bahn.de/bin/query.exe/dn?getstop=1&dbkanal_008=L01_S01_D001_KLR0011_konzernportal_LZ03&S=&Z=Berlin+S%FCdkreuz&date=18.12.13&time=16%3A18&timesel=depart&submit="> Berlin Südkreuz</a>
                    </li>
                    <li>
                        <a href="http://reiseauskunft.bahn.de/bin/query.exe/dn?getstop=1&dbkanal_008=L01_S01_D001_KLR0011_konzernportal_LZ03&S=&Z=Berlin+Alexanderplatz&date=18.12.13&time=16%3A18&timesel=depart&submit="> Berlin Alexanderplatz</a>
                    </li>
                    <li>
                        <a href="http://reiseauskunft.bahn.de/bin/query.exe/dn?getstop=1&dbkanal_008=L01_S01_D001_KLR0011_konzernportal_LZ03&S=&Z=Berlin+Friedrichstr&date=18.12.13&time=16%3A18&timesel=depart&submit="> Berlin Friedrichstraße</a>
                    </li>
                    <li>
                        <a href="http://reiseauskunft.bahn.de/bin/query.exe/dn?getstop=1&dbkanal_008=L01_S01_D001_KLR0011_konzernportal_LZ03&S=&Z=Berlin+Gesundbrunnen&date=18.12.13&time=16%3A18&timesel=depart&submit="> Berlin Gesundbrunnen</a>
                    </li>
                    <li>
                        <a href="http://reiseauskunft.bahn.de/bin/query.exe/dn?getstop=1&dbkanal_008=L01_S01_D001_KLR0011_konzernportal_LZ03&S=&Z=Berlin+Lichtenberg&date=18.12.13&time=16%3A18&timesel=depart&submit="> Berlin Lichtenberg</a>
                    </li>
                </ul>
                <p>Die Fahrplanauskünfte zur Nutzung des ÖPNV sind als Links in den jeweiligen Popups der Bahnhöfe in der obigen Karte hinterlegt.</p>

                <h3>Anreise per Flugzeug</h3>
                <p>Berlin Schönefeld (SFX) oder Berlin Tegel (TXL).</p>
                    
                <h3>Anreise per PKW</h3>
                <p>Luxemburger Straße 10<br>
                13353 Berlin<br>
                Parkplätze sind vorhanden<br>
                <img src="http://www.beuth-hochschule.de/fileadmin/bild/tfh/Lageplan_Campus.png"/></p>
                    
                <h3>Unterkunft</h3>
                <p>Mögliche Unterkünfte im direkten Umfeld der Tagung sind in der Karte eingetragen.</p>
				
            </div>
            <?php include('../inc/footer.inc'); ?>
        </div>
    </body>

    <script type='text/javascript'>
        window.onload = init;
    </script>
</html>