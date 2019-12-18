<!doctype html>
<html lang="de">

<head>
	<?php include "../inc/meta.inc"; ?>

	<base href="<?php echo dirname($_SERVER['SCRIPT_NAME']); ?>">
	<title>Umgang mit vorhandenen und fehlenden Relevanzinformationen in OpenStreetMap-Kartenstilen – FOSSGIS 2020</title>

	<link rel="stylesheet" href="./css/normalize.css">
	<link rel="stylesheet" href="./css/base.css">
	<link rel="stylesheet" href="./css/print.css" media="print">
</head>

<body id="programm">
	<?php include "../inc/header.inc"; ?>

        <!-- This file was generated by a script. Do not edit this file in Git,
             edit contents in Pretalx, regenerate the PHP files and commit them
             in the Git repository of the website. -->
        <p><a href="programm/mittwoch.php#session_S8HCFT">zurück zum Programm</a></p>
        <h2 class='abstract-title'>Umgang mit vorhandenen und fehlenden Relevanzinformationen in OpenStreetMap-Kartenstilen</h2>
        <section>
            <p>
                                <span class='abstract-speakers'>Michael Reichert</span></p>
            <p><span class='abstract-time-heading'>Zeit: </span>Mittwoch 11. März 14:30 Uhr<br><span class='abstract-room-heading'>Ort: </span>HS Weismannhaus</p>

            
            <p>Bei bestimmten Featureklassen ist auch in der automatisierten Kartographie die Trennung von wichtigen und weniger wichtigen Features von Bedeutung, gerade dann, wenn in kleineren Maßstäben der Platz knapp wird oder die Karte nicht überfrachtet werden soll. Das gilt auch für Kartenstile, mit denen aus OpenStreetMap-Daten Karten gerendert werden. Dabei macht die Art und Weise, wie OpenStreetMap-Daten erfasst werden, es dem Kartographen manchmal nicht gerade leicht, nur die wichtigen Features einer Featureklasse darzustellen. Für manche Features existieren in OpenStreetMap Tag, die die Bedeutung entweder direkt angeben oder mithilfe derer die Bedeutung recht einfach ermittelt werden kann. Bei manchen ist die Auswertung der Relevanzinformationen einfach, bei manchen ist sie anspruchsvoll. Straßen und Siedlungen sind ein Beispiel für ersteres, wobei es selbst bei Siedlungen noch mehrer Möglichkeiten gibt, die Relevanz zu bestimmen. Bei Gipfeln ist die Bestimmung der Dominanz etwas aufwendiger.</p>
<p>Es gibt aber auch Objekte in OSM, bei denen keine Informationen direkt erfasst werden, die sich zur Ableitung einer Rangfolge eignen. Meist liegt es daran, dass solche Informationen nicht dem Überprüfbarkeitskriterium bei OSM genügen. In diese Kategorie fallen unter anderen Bahnhöfe und Flughäfen.</p>
<p>Im ersten Teil des Vortrags wird vorstellt, wie verschiedene Open-Source-Kartenstile für OSM-Daten vorhandenen Relevanzinformationen für Straßen, Siedlungen und Gipfel nutzen bzw. wie sie mit dem Fehlen oder der Nichtbenutzbarkeit dieser Informationen bei Bahnhöfe, Flughäfen und Flüssen umgehen. Auch die Folgen dieser Entscheidungen auf die Aktualisierbarkeit der Daten wird aufgezeigt.</p>
<p>Im zweiten Teil des Vortrags wird am Beispiel des OpenRailwayMap-Infrastrukturstils, der kürzlich auf CartoCSS portiert worden ist, gezeigt, wie für bei Haltestellen des öffenentlichen Personenverkehrs mit in OSM erfassten Routenrelationen bewertet werden.</p>
        </section>


	<?php include "../inc/footer.inc"; ?>

</body>

</html>