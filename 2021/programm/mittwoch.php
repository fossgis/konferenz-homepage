<!doctype html>
<html lang="de">

<head>
	<?php include "../inc/meta.inc"; ?>

	<base href="<?php echo dirname($_SERVER['SCRIPT_NAME']); ?>">
	<title>FOSSGIS 2021 - Programm</title>

	<link rel="stylesheet" href="./css/normalize.css">
	<link rel="stylesheet" href="./css/base.css">
	<link rel="stylesheet" href="./css/print.css" media="print">
</head>

<body id="programm">
        <?php include "../inc/header.inc"; ?>

        <p> <a href="programm/sonntag.php">Sonntag</a> <a href="programm/montag.php">Montag</a> <a href="programm/dienstag.php">Dienstag</a> Mittwoch</p>

        <h2>Mittwoch, den 09.06.2021</h2>
        

            <table class="program-table">
            <thead>
                <tr>
                    <th></th>
                    <th>Bühne 1</th>
                    <th>Bühne 2</th>
                    <th>Bühne 3</th>
                    <th>Bühne 4</th>
                    <th>Workshop 1 <img class="program-no-recording" src="./img/novideo-bright.svg" height="25" alt="ohne Videoaufzeichnung" title="In diesem Raum gibt es keine Videoaufzeichnung."></th>
                    <th>Workshop 2 <img class="program-no-recording" src="./img/novideo-bright.svg" height="25" alt="ohne Videoaufzeichnung" title="In diesem Raum gibt es keine Videoaufzeichnung."></th>
                    <th>BoF 2 <img class="program-no-recording" src="./img/novideo-bright.svg" height="25" alt="ohne Videoaufzeichnung" title="In diesem Raum gibt es keine Videoaufzeichnung."></th>
                    </tr>
            </thead>
            <tbody>
                <tr>
                        <td class="program-time">09:00</td>
                        <td rowspan="1" id="session_WDEWNR">
            <a class="session-title" href="sessions/WDEWNR.php">Geodaten auf Smartphones – ein drittes Paradigma nach Desktop- und Web-GIS?</a>
    <br><span class="session-speakers">Christoph Jung</span>
</td>

                            <td rowspan="1" id="session_EEMKSJ">
            <a class="session-title" href="sessions/EEMKSJ.php">Geodatenverarbeitung mit Node-RED</a>
    <br><span class="session-speakers">Sebastian Bechtold</span>
</td>

                            <td rowspan="1" id="session_PPWVU8">
            <a class="session-title" href="sessions/PPWVU8.php">Effizientes many-to-many ÖPNV-Routing mit gtfsrouter</a>
    <br><span class="session-speakers">mark padgham</span>
</td>

                            <td rowspan="2" id="session_JUASCU">
    <span class='session-type'>Demo-Session</span><br>        <a class="session-title" href="sessions/JUASCU.php">Aufbau eines Geoportals mit QGIS Server und QWC2</a>
    <br><span class="session-speakers">Pirmin Kalberer</span>
</td>

                            <td rowspan="3" id="session_9R97S9">
    <span class='session-type'>Workshop</span><br>
            <a class="session-title" href="sessions/9R97S9.php">Einführung in die Verwaltung von Geodaten in der PostgreSQL-Datenbank mit PostGIS</a>
    <br><span class="session-speakers">Astrid Emde</span>
</td>

                            <td rowspan="3" id="session_GGKJWJ">
    <span class='session-type'>Workshop</span><br>
            <a class="session-title" href="sessions/GGKJWJ.php">Geodaten-Styling im GeoServer</a>
    <br><span class="session-speakers">Daniel Koch, Hannes Blitza</span>
</td>

                            <td></td>
                                                </tr>
                                <tr>
                        <td class="program-time">09:30</td>
                        <td rowspan="1" id="session_FLNRZZ">
            <a class="session-title" href="sessions/FLNRZZ.php">MrMap - GeoPortal.rlp Reloaded</a>
    <br><span class="session-speakers">Armin Retterath</span>
</td>

                            <td rowspan="1" id="session_GLVWWR">
            <a class="session-title" href="sessions/GLVWWR.php">GDAL - Konzept und Werkzeuge</a>
    <br><span class="session-speakers">Markus Metz</span>
</td>

                            <td rowspan="2" id="session_QLGMES">
            <a class="session-title" href="sessions/QLGMES.php">Barrierefreie Indoor-Karten</a>
    <br><span class="session-speakers">Jan Schmalfuß-Schwarz, Claudia Loitsch, Christin Engel</span>
</td>

                            
                            
                            
                            <td></td>
                                                </tr>
                                <tr>
                        <td class="program-time">10:00</td>
                        <td rowspan="1" id="session_RPCQ77">
            <a class="session-title" href="sessions/RPCQ77.php">SHOGun als Basis flexibler WebGIS-Lösungen — Oder: Weder &#34;off-the-shelf&#34; noch &#34;fully handcrafted&#34;</a>
    <br><span class="session-speakers">Marc Jansen</span>
</td>

                            <td rowspan="1" id="session_3EPZ3W">
            <a class="session-title" href="sessions/3EPZ3W.php">GIS mit der Kommandozeile</a>
    <br><span class="session-speakers">Jakob Miksch</span>
</td>

                            
                            <td></td>
                            
                            
                            <td></td>
                                                </tr>
                                <tr>
                        <td class="program-time">10:30</td>
                        <td colspan="7" class="program-break">Pause</td>
                                            </tr>
                                <tr>
                        <td class="program-time">11:00</td>
                        <td rowspan="2" id="session_HTTWNG">
            <a class="session-title" href="sessions/HTTWNG.php">Neues von osm2pgsql</a>
    <br><span class="session-speakers">Jochen Topf</span>
</td>

                            <td rowspan="1" id="session_7LXB37">
            <a class="session-title" href="sessions/7LXB37.php">SmartMapping: Amtliche Daten als VectorTiles</a>
    <br><span class="session-speakers">Arnulf Christl</span>
</td>

                            <td rowspan="1" id="session_XZBWDL">
            <a class="session-title" href="sessions/XZBWDL.php">FORCE4Q Plugin - Ableitung wolkenfreier Bildkomposite aus frei verfügbaren Landsat und Sentinel-2 Satellitenbildern</a>
    <br><span class="session-speakers">Andreas Rabe</span>
</td>

                            <td rowspan="1" id="session_VV3TWT">
    <span class='session-type'>Demo-Session</span><br>        <a class="session-title" href="sessions/VV3TWT.php">Webmaps effizient mit Wegue erstellen</a>
    <br><span class="session-speakers">Jakob Miksch, Christian Mayer</span>
</td>

                            <td rowspan="3" id="session_HCWV3V">
    <span class='session-type'>Workshop</span><br>
            <a class="session-title" href="sessions/HCWV3V.php">Geodateninfrastruktur mit Docker</a>
    <br><span class="session-speakers">Otto Dassau, Tristan</span>
</td>

                            <td rowspan="3" id="session_FATV98">
    <span class='session-type'>Workshop</span><br>
            <a class="session-title" href="sessions/FATV98.php">QGIS-Plugin-Entwicklung und -Debugging mit Microsoft Visual Studio Code (OpenSource) und dem QGIS-Plugin debugvs</a>
    <br><span class="session-speakers">Thomas Baumann</span>
</td>

                            <td></td>
                                                </tr>
                                <tr>
                        <td class="program-time">11:30</td>
                        
                            <td rowspan="1" id="session_GZGXZN">
            <a class="session-title" href="sessions/GZGXZN.php">Interaktive Spaziergänge für die Erkundung von essbaren Pflanzen - Entwicklung einer OpenSource WebApp mit framework7</a>
    <br><span class="session-speakers">Theodor Rieche</span>
</td>

                            <td rowspan="1" id="session_9RRWQN">
            <a class="session-title" href="sessions/9RRWQN.php">Von Pixeln und Profilen: Die Nutzung von Spektralbibliotheken in QGIS mit der EnMAP-Box</a>
    <br><span class="session-speakers">Benjamin Jakimow</span>
</td>

                            <td rowspan="2" id="session_BPMCBG">
    <span class='session-type'>Demo-Session</span><br>        <a class="session-title" href="sessions/BPMCBG.php">In 60 Minuten zur eigenen Geo-App mit YAGA leaflet-ng2</a>
    <br><span class="session-speakers">Arne Schubert, Stephan Herritsch</span>
</td>

                            
                            
                            <td rowspan="2" id="session_XAMAXF">
            <a class="session-title" href="sessions/XAMAXF.php">GeoStyler Anwender- und Entwicklertreffen / BOF</a>
    <br><span class="session-speakers">Christian Mayer, Jan Suleiman, Daniel Koch</span>
</td>

                                                </tr>
                                <tr>
                        <td class="program-time">12:00</td>
                        <td rowspan="1" id="session_lightning_talks_4">
            <a class="session-title" href="sessions/lightning_talks_4.php">Lightning Talks</a>
    </span>
</td>

                            <td rowspan="1" id="session_JXMJBV">
            <a class="session-title" href="sessions/JXMJBV.php">Kartographierung von Businessdaten</a>
    <br><span class="session-speakers">Marion Baumgartner, Gerber Benjamin</span>
</td>

                            <td rowspan="1" id="session_RVXBRT">
            <a class="session-title" href="sessions/RVXBRT.php">Fortgeschrittene GIS-Analysen und Kartographie mit Geometrien-Ausdrücken in QGIS</a>
    <br><span class="session-speakers">Johannes Kröger</span>
</td>

                            
                            
                            
                            
                                                </tr>
                                <tr>
                        <td class="program-time">12:30</td>
                        <td colspan="7" class="program-break">Pause</td>
                                            </tr>
                                <tr>
                        <td class="program-time">14:00</td>
                        <td rowspan="1" id="session_CWCJ3R">
            <a class="session-title" href="sessions/CWCJ3R.php">Geodaten im Einsatzleitsystem</a>
    <br><span class="session-speakers">Michael Schmid</span>
</td>

                            <td rowspan="1" id="session_GYDS9R">
            <a class="session-title" href="sessions/GYDS9R.php">Statistik der Bauzonenreserven mit QGIS und PostGIS</a>
    <br><span class="session-speakers">Andreas Neumann</span>
</td>

                            <td rowspan="1" id="session_G3PSUK">
            <a class="session-title" href="sessions/G3PSUK.php">Der Weg zur modernen Basiskarte – Potenziale und Herausforderungen von Kartographie und Datengrundlage</a>
    <br><span class="session-speakers">Hannes Blitza, Christian Fremd</span>
</td>

                            <td></td>
                            <td rowspan="3" id="session_VLZRZP">
    <span class='session-type'>Workshop</span><br>
            <a class="session-title" href="sessions/VLZRZP.php">QGIS GRASS Plugin</a>
    <br><span class="session-speakers">Klaus Mithöfer</span>
</td>

                            <td rowspan="3" id="session_CVVPRQ">
    <span class='session-type'>Workshop</span><br>
            <a class="session-title" href="sessions/CVVPRQ.php">WebGIS-GDI mit Docker-Microservices</a>
    <br><span class="session-speakers">Christian Kuntzsch</span>
</td>

                            <td></td>
                                                </tr>
                                <tr>
                        <td class="program-time">14:30</td>
                        <td rowspan="1" id="session_7NH7LE">
            <a class="session-title" href="sessions/7NH7LE.php">Wie Behörden und bundesnahe Betriebe OpenStreetMap nutzen können</a>
    <br><span class="session-speakers">Stefan Keller</span>
</td>

                            <td rowspan="1" id="session_JFLZLE">
            <a class="session-title" href="sessions/JFLZLE.php">Teilautomatische Erkennung von Innenentwicklungspotenzialen mit QGIS und Python auf Basis von amtlichen Geodaten</a>
    <br><span class="session-speakers">Mirko Blinn</span>
</td>

                            <td rowspan="1" id="session_9AHNGW">
            <a class="session-title" href="sessions/9AHNGW.php">Geostyler Mapfile Parser</a>
    <br><span class="session-speakers">Balthasar</span>
</td>

                            <td></td>
                            
                            
                            <td></td>
                                                </tr>
                                <tr>
                        <td class="program-time">15:00</td>
                        <td rowspan="1" id="session_DCXBZY">
            <a class="session-title" href="sessions/DCXBZY.php">Open Data, Open Source – Open End?</a>
    <br><span class="session-speakers">Prof. Paul Becker</span>
</td>

                            <td></td>
                            <td></td>
                            <td></td>
                            
                            
                            <td></td>
                                                </tr>
                                <tr>
                        <td class="program-time">15:30</td>
                        <td rowspan="1" id="session_YULPMW">
            <a class="session-title" href="sessions/YULPMW.php">Abschluss der FOSSGIS-Konferenz 2021</a>
    <br><span class="session-speakers">Jörg Thomsen</span>
</td>

                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                                                </tr>
                                             </tbody>
        </table>
    

	<?php include "../inc/footer.inc"; ?>

</body>

</html>