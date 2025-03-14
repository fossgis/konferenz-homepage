<!doctype html>
<html lang="de">

<head>
	<?php include "../inc/meta.inc"; ?>

	<base href="<?php echo dirname($_SERVER['SCRIPT_NAME']); ?>">
	<title>Regelmäßiges nationales Monitoring der Landbedeckungsänderungen mit Copernicus-Daten – FOSSGIS 2021</title>

	<link rel="stylesheet" href="./css/normalize.css">
	<link rel="stylesheet" href="./css/base.css">
	<link rel="stylesheet" href="./css/print.css" media="print">
</head>

<body id="programm">
	<?php include "../inc/header.inc"; ?>

        <!-- This file was generated by a script. Do not edit this file in Git,
             edit contents in Pretalx, regenerate the PHP files and commit them
             in the Git repository of the website. -->
        <p><a href="programm/montag.php#session_MLMVLY">&#9668;&#9668; zurück zum Programm</a> </p>
        <h2 class='abstract-title'>Regelmäßiges nationales Monitoring der Landbedeckungsänderungen mit Copernicus-Daten</h2>
        <section>
            <p>
                <span class='abstract-sessiontype'>Vortrag</span>                von <span class='abstract-speakers'>Patrick Knöfel</span></p>
                                                                            <p><span class='abstract-time-heading'>Zeit: </span>Montag 07. Juni 12:00 Uhr
                <br><span class='abstract-room-heading'>Ort: </span>Bühne 2
                <br><span class='abstract-room-heading'>Dauer: </span>20 Minuten
            </p>

                        
            <p>Der „LandschaftsVeränderungsDienst“ (LaVerDi) ist eine kostenfreie Onlineanwendung zur Bereitstellung und Analyse von Veränderungshinweisen der Landbedeckungen Deutschlands.  Hierzu werden Zeitreihen aus kostenfreien Sentinel2- Satellitendaten des Copernicus Programms verwendet, um automatisiert aktuelle und konsistente Hinweise zu Änderungen der Landbedeckung Deutschlands abzuleiten und ein regelmäßiges Monitoring zu gewährleisten. Es werden abgeleitete vegetationsbeschreibende Metriken, wie beispielsweise das Minimum oder der Mittelwert des NDVI (Normierter Differenzierter VegetationsIndex), der gleichen Periode zweier aufeinanderfolgender Referenzjahre (t0, t1) miteinander verglichen. Die daraus resultierenden und auf 10m-Pixeln basierenden Veränderungen werden anschließend einer Filterung und Plausibilitätsprüfung unterzogen, um den finalen Änderungslayer zu generieren. Der endgültige Veränderungsdatensatz besitzt eine Genauigkeit der erkannten Veränderungen von über 80% und steht als Vektordatensatz inklusive der relevanten Veränderungsattribute als Shapefile zum Download bereit. Die Referenz für die Änderungshinweise ist das aktuelle digitale Landbedeckungsmodell (LBM-DE) des BKG. Der LaVerDi-Viewer ermöglicht es, vektorbasiert Veränderungshinweise interaktiv zu analysieren. Ddabei stehen dem Nutzer eine Reihe von Onlineanalyse Werkzeuge zur Verfügung. Umgesetzt wurde die LaVerDi Webanwendung auf der nationalen Copernicus Plattform CODE-DE (Copernicus Data and Exploitation Platform – Deutschland).</p>
        </section>


	<?php include "../inc/footer.inc"; ?>

</body>

</html>