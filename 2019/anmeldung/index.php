<!doctype html>
<html lang="de">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<base href="<?php echo dirname($_SERVER['SCRIPT_NAME']); ?>">
	<title>FOSSGIS 2019 - Anmeldung</title>

	<meta name="description" content="Die FOSSGIS-Konferenz ist im D-A-CH Raum die führende Konferenz für Freie und Open Source Software für Geoinformationssysteme OpenStreetMap.">
	<meta name="keywords" content="FOSSGIS, FOSSGIS-Konferenz, 2019, FOSSGIS-Konferenz 2019, Open Source, GIS, Konferenz, Geoinformatik, OpenStreetMap, HTW Dresden">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" type="text/css" href="https://pretix.eu/fossgis/2019/widget/v1.css">
	<?php include "../inc/style.inc"; ?>
	<script type="text/javascript" src="https://pretix.eu/widget/v1.de.js" async></script>
</head>

<body id="anmeldung">

	<?php include "../inc/header.inc"; ?>

	<h2>Anmeldung zur Konferenz</h2>

	<p>
		Wir laden Sie ein, Teil der FOSSGIS-Konferenz 2019 zu werden.
		Die Konferenz lebt von Ihren Beitr&auml;gen und Ihrem Besuch.
		Wir freuen uns auf Sie!
	</p>

	<p>
		Das Konferenz-Team empfielt Ihnen sich online anzumelden.
		Eine spontane Teilnahme kann aufgrund der räumlichen Begrenzung auf 400 Personen nicht gewährleistet werden.
		Eine Registrierung Ihrerseits ist notwendig, um Ihre Teilnahme zu sichern und hilfreich f&uuml;r die Organisation.
	</p>

	<p class="highlight">
		&darr; <a href="#shop">Direkt zur Anmeldung</a>
	</p>

	<p>
		Im Rahmen der Anmeldung können Sie bis zum 11.03.2019 eine Reihe von FOSSGIS-Workshops (kostenpflichtig) auswählen.
		Informationen zu den einzelnen Workshops finden Sie im <a href="https://pretalx.com/fossgis2019/schedule/">Programm</a>.
	</p>

	<h3>Preise FOSSGIS-Konferenz 2019</h3>
	<ul>
		<li>Standardticket (Normalpreis): € 190</li>
		<li>Standardticket (Frühbucherrabatt bis 06.02.2019): € 150</li>
		<li>Studierendenticket, Rentnerticket: € 40</li>
		<li>Communityticket<sup>**</sup>: € 0</li>
		<li>Workshop: € 100</li>
		<li>Workshop (Frühbucherrabatt bis 06.02.2019): € 90</li>
	</ul>
	<p><b>Im Konferenzticket enthalten:</b></p>
	<ul>
		<li>FOSSGIS-Konferenz-Teilnahme</li>
		<li>Pausensnack</li>
		<li>Tasche, Tagungsband*</li>
		<li>T-Shirt</li>
		<li>Abendveranstaltung Dialoge im Bärenzwinger (solange verfügbar)</li>
	</ul>

	<p>
		<small>* solange verfügbar</small><br>
		<small>** Regelungen für das Communityticket gelten für FOSSGIS-, OpenStreetMap- und OSGeo-Aktive sowie aktive Helfer der Konferenz.</small>
	</p>

	<h3>Helfer</h3>
	<p>Freiwillige Helfer sind eingeladen und willkommen während der Konferenz bei den Videoaufnahmen, als Sessionleiter oder beim Catering zu unterstützen. Bei Interesse bitte im <a href="https://helfer-2019.fossgis.de/">Helfersystem</a> Helfersystem anmelden und eine E-Mail an konferenz-orga@fossgis.de senden. Helfer dürfen das kostenfreie "Community-Ticket" buchen. Bei Fragen empfehlen wir die <a href="https://pretix.eu/fossgis/2019/page/helfer/" target="_blank">FAQ</a> zu lesen.</p>

	<h3>Anmeldung</h3>
	<p>Nutzen Sie gerne das Anmeldeformular direkt auf dieser Seite. Falls etwas nicht funktionieren sollte, können Sie das Ticketsystem auch unter <a href="https://pretix.eu/fossgis/2019/">diesem Link</a> direkt aufrufen.</p>
	<div id="shop">
		<pretix-widget event="https://pretix.eu/fossgis/2019/"></pretix-widget>
	</div>
	<noscript>
		<div class="pretix-widget">
			<div class="pretix-widget-info-message">
				JavaScript ist in Ihrem Browser deaktiviert. Um unseren Ticket-Shop ohne JavaScript aufzurufen, klicken Sie bitte <a target="_blank" rel="noopener" href="https://pretix.eu/fossgis/2019/">hier</a>.
			</div>
		</div>
	</noscript>

	<?php include('../inc/footer.inc'); ?>

</body>

</html>
