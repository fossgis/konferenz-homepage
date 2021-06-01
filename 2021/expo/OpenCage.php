<!doctype html>
<html lang="de">

<head>
	<?php include "../inc/meta.inc"; ?>

	<base href="<?php echo dirname($_SERVER['SCRIPT_NAME']); ?>">
	<title>FOSSGIS 2021 - Expo</title>

	<link rel="stylesheet" href="./css/bootstrap.css">
	<link rel="stylesheet" href="./css/normalize.css">
	<link rel="stylesheet" href="./css/base.css">
	<link rel="stylesheet" href="./css/expo.css">
	<link rel="stylesheet" href="./css/print.css" media="print">
	<link rel="stylesheet" href="./fontawesome/css/all.css">
</head>

<body id="expo">

	<p><a href="https://fossgis-konferenz.de/2021/expo">Zurück zur Ausstellerliste</a>.</p>

	<section class="section">
		<div class="container">
			<img src="./expo/img/opencage-header.png" class="img-fluid" alt="opencage_Banner">
			<div class="row">
				<div class="col-lg-9 mb-4 mb-lg-0 mt-3">
					<h3>Open Cage GmbH</h3>
					<p>OpenCage GmbH bietet eine auf offene Daten basierende API für Geokodierung. Sowohl <i>forward geocoding</i> wie auch <i>reverse geocoding</i> werden unterstützt. Unsere Kunden sind kleine und große Firmen weltweit die Geocoding brauchen, die Vorteile offene Daten schätzen und sich die Arbeit sparen wollen ein komplexes System selber am Laufen zu halten.</p>
					<p>Ob es um die einmalige Datenverarbeitung geht oder maßgeschneiderte highly-available Systeme mit mehreren Millionen Anfragen pro Tag, nehmen auch Sie Kontakt mit uns auf, wenn Sie Bedarf an Geocoding haben.</p>

					<p>Wir sind Firmenmitglied im OpenStreetMap Foundation (Silver Tier), unterstützten die Entwicklung von Nominatim, sind regelmäßiger Sponsor von OpenStreetMap Veranstaltungen, und organisieren <a href="https://thegeomob.com/">Geomob</a>.<br>Firmensitz ist Münster, NRW.</p>

				</div>	

				<div class="col-lg-3">
					<div class="icon mt-3">
						<img src="./img/s/409_opencage-logo.png" title="opencage" alt="opencage">
					</div>
					<div class="mb-4">
						<h6 class="mb-2">Tags</h6>
						<div class="post-tags">
							<span class="badge badge-info">Geokodierung</span>
							<span class="badge badge-info">Geocoding</span>
							<span class="badge badge-info">Adressen</span>
							<span class="badge badge-info">SaaS</span>
							<span class="badge badge-info">OSM</span>
						</div>
					</div>
					<div class="mb-4">
						<h6 class="mb-0">Webseite</h6>
						<a href="https://opencagedata.com/">
							https://opencagedata.com/</a>
					</div>
					<div class="social-icon">
						<h6 class="font-weight-bold mb-0">Social</h6>
						<ul>
							<li>
								<a href="https://twitter.com/opencage"><i class="fab fa-twitter"></i></a>
							</li>
							
							<li>
								<a href="https://github.com/OpenCageData/"><i class="fab fa-github"></i></a>
							</li>
							<li>
								<a href="https://www.youtube.com/channel/UCI2eXLC6z4k4K9EvFcHfL5g/"><i class="fab fa-youtube"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-6 col-lg-4 mt-3 mb-3">
					<div class="expo-box">
						<div class="project-tile d-flex align-items-center justify-content-center">
							<img src="./expo/img/opencage-link1.png" title="opencage" alt="opencage">
						</div>
						<div class="feature-content">
						<p><a href="https://opencagedata.com/sdks">SDKs und Beispiele für 30+ Programmiersprachen</a></p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4 mt-3 mb-3">
					<div class="expo-box">
						<div class="project-tile d-flex align-items-center justify-content-center">
							<img src="./expo/img/opencage-link2.png" title="opencage" alt="opencage">
						</div>
						<div class="feature-content">
						<p><a href="https://opencagedata.com/reverse-geocoding">Guide to reverse geocoding </a></p>
						</div>
					</div>
				</div>
				
				<div class="col-sm-6 col-lg-4 mt-3 mb-3">
					<div class="expo-box">
						<div class="project-tile d-flex align-items-center justify-content-center">
							<img src="./expo/img/opencage-link3.png" title="opencage" alt="opencage">
						</div>
						<div class="feature-content">
						<p><a href="https://blog.opencagedata.com/">OpenCage Firmenblog</a></p>
						</div>
					</div>
				</div>											
			</div>
		</div>

	</section>

	<?php include('../inc/footer.inc'); ?>
</body>
</html>
