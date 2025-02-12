<!doctype html>
<html lang="de">

<head>
	<?php include "../inc/meta.inc"; ?>

	<base href="<?php echo dirname($_SERVER['SCRIPT_NAME']); ?>">
	<title>FORCE4Q Plugin - Ableitung wolkenfreier Bildkomposite aus frei verfügbaren Landsat und Sentinel-2 Satellitenbildern – FOSSGIS 2021</title>

	<link rel="stylesheet" href="./css/normalize.css">
	<link rel="stylesheet" href="./css/base.css">
	<link rel="stylesheet" href="./css/print.css" media="print">
</head>

<body id="programm">
	<?php include "../inc/header.inc"; ?>

        <!-- This file was generated by a script. Do not edit this file in Git,
             edit contents in Pretalx, regenerate the PHP files and commit them
             in the Git repository of the website. -->
        <p><a href="programm/mittwoch.php#session_XZBWDL">&#9668;&#9668; zurück zum Programm</a> </p>
        <h2 class='abstract-title'>FORCE4Q Plugin - Ableitung wolkenfreier Bildkomposite aus frei verfügbaren Landsat und Sentinel-2 Satellitenbildern</h2>
        <section>
            <p>
                <span class='abstract-sessiontype'>Vortrag</span>                von <span class='abstract-speakers'>Andreas Rabe</span></p>
                                                                            <p><span class='abstract-time-heading'>Zeit: </span>Mittwoch 09. Juni 11:00 Uhr
                <br><span class='abstract-room-heading'>Ort: </span>Bühne 3
                <br><span class='abstract-room-heading'>Dauer: </span>20 Minuten
            </p>

                        
            <p>Erdbeobachtungsdaten stellen eine immer wichtigere Grundlage für raumbezogene Analysen in Wirtschaft und Wissenschaft dar. Gleichzeitig steigt ihre Verfügbarkeit infolge neuer Fernerkundungssatelliten und offener Datenzugangsrichtlinien stetig an. Erdbeobachtungsprogramme wie Copernicus (ESA) und Landsat (NASA/USGS) erfassen multispektrale Fernerkundungsdaten weltweit, flächendeckend und mit hoher zeitlicher Dichte. 
Diese Entwicklung hat die Nachfrage nach freier und quelloffener Software zur Analyse großer und mehrdimensionaler Rasterdatenmengen gesteigert. Da die Anforderungen einer professionellen Fernerkundungsanalyse oft über die Möglichkeiten klassischer GIS-Software hinausgehen, entwickelt die Humboldt-Universität zu Berlin das FORCE4Q Plugin für QGIS. </p>
<p>FORCE4Q hilft Landsat und Sentinel-2 Daten in einen analysebereiten Datenwürfel (analysis-ready datacube) zu überführen. Dies beinhaltet das Zuschneiden der Daten in ein räumliches (global definiertes) Tiling-Scheme und ein qualitatives Screening zum Ausschluss unerwünschter Bildbereiche, wie Wolken, Wolkenschatten oder Schnee., Aerosol, Wasserdampf usw.. Die gescreenten Daten können direkt für weiterführende Analysen verwendet oder aber zeitlich weiter verdichtet werden. Das flexible zeitliches Binning erlaubt eine jährliche, quartalsweise, monatliche, wöchentliche oder tagesgenaue Aggregation der Daten. Neben den oft verwendeten wolkenfreien Mittelwert-Kompositen sind weitere statistische Funktionen wie Median, Minimum, Maximum, Standardabweichung oder Perzentile verfügbar. Auch können zusätzlich zu den originalen multispektralen Bändern (Blau, Grün, Rot, nahes Infrarot, …) weitere Indizes (NDVI, EVI, Tasseled Cap usw.) direkt mit abgeleitet werden.
Die gescreenten und zeitlich verdichteten Daten sind nun direkt für weiterführende Zeitreihen-, Klassifikations- und Regressionsanalysen verwendbar.</p>
<p>Der Vortrag präsentiert den kompletten Ablauf, angefangen beim Download von Satellitendaten über den Copernicus Open Access Hub und das EarthExplorer Portal, über den Import ins TilingScheme, bis zur Ableitung analysebereiter Daten.</p>
<p>Projekt-Dokumentation: https://force4q.readthedocs.io</p>
        </section>


	<?php include "../inc/footer.inc"; ?>

</body>

</html>