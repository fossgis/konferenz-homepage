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
			<img src="./expo/img/virutelleExpo_mundialis.png" class="img-fluid" alt="wheregroup_Banner">
			<div class="row">
				<div class="col-lg-9 mb-4 mb-lg-0 mt-3">
					<h3>mundialis</h3>
					<p>Die Firma <a href="https://www.mundialis.de">mundialis GmbH & Co. KG</a> ist auf die Auswertung von Fernerkundungsdaten und die Verarbeitung von voluminösen Geodaten unter Zuhilfenahme leistungsstarker Rechenzentren (actinia) spezialisiert. Ziel von mundialis ist es, verschiedenen Personengruppen, den Zugang zu den umfangreichen Fernerkundungsdaten zu ermöglichen.</p>

					<h4>Inhaltliche Schwerpunkte</h4>
					<p>Während in der Theorie jeder Zugang zu diesen Daten hat, zeigt sich in der Praxis, dass die Verarbeitung von Daten im Giga- und Terabyte Bereich weiterhin eine Herausforderung darstellt und sehr komplex ist. <br> Ein Fokus liegt auf der Verarbeitung der Sentinel-Satellitendaten des europäischen Copernicus Programms, deren Zeitreihen automatisiert ausgewertet und in Form von standardisierten Web-Diensten angeboten werden. Flächendeckende Satellitendaten liefern Informationen zu aktuellen Änderungen der Landnutzung, der Bodenfeuchte, der Oberflächentemperatur oder des Vegetationszustandes im land- und forstwirtschaftlichen Kontext. mundialis bietet auf Basis dieser Daten skalierbare Produkte an, die in existierende Anwendungen aufgrund der standardisierten Schnittstellen nahtlos integriert werden können. <br>Dabei kommen Freie und Open Source Geoinformationssysteme zum Einsatz, die für den Kunden maßgeschneiderte Lösungen ermöglichen.
					</p>

				</div>	

				<div class="col-lg-3">
					<div class="icon mt-3">
						<img src="./img/s/401_mundialis.png" title="mundialis" alt="mundialis">
					</div>
					<div class="mb-4">
						<h6 class="mb-2">Tags</h6>
						<div class="post-tags">
							<span class="badge badge-info">Sentinel</span>
							<span class="badge badge-info">Cloud-Prozessing</span>
							<span class="badge badge-info">Metadaten</span>
							<span class="badge badge-info">GIS</span>
							<span class="badge badge-info">SDI</span>
							<span class="badge badge-info">Geodaten</span>
							<span class="badge badge-info">Fernerkundung</span>
							<span class="badge badge-info">GRASS</span>
						</div>
					</div>
					<div class="mb-4">
						<h6 class="mb-0">Webseite</h6>
						<a href="https://www.mundialis.de/">
							https://www.mundialis.de/</a>
						<h6 class="mb-0">News</h6>
						<a href="https://www.mundialis.de/de/news/">
							https://www.mundialis.de/de/news/</a>
					</div>
					<div class="social-icon">
						<h6 class="font-weight-bold mb-0">Social</h6>
						<ul>
							<li>
								<a href="https://twitter.com/mundialisinfo"><i class="fab fa-twitter"></i></a>
							</li>
							<li>
								<a href="https://de.linkedin.com/company/mundialis-gmbh-&-co--kg"><i class="fab fa-linkedin-in"></i></a>
							</li>
							<li>
								<a href="https://www.xing.com/companies/mundialisgmbh%26co.kg"><i class="fab fa-xing"></i></a>
							</li>
							<li>
								<a href="https://github.com/mundialis"><i class="fab fa-github"></i></a>
							</li>
							

						</ul>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-6 col-lg-4 mt-3 mb-3">
					<div class="expo-box">
						<div class="project-tile d-flex align-items-center justify-content-center">
							<img src="./expo/img/projektlogo_mundialis.png" class="img-fluid" title="mundialis" alt="mundialis">
						</div>
						<div class="feature-content">
						<p>Projekt<a href="https://lst.mundialis.de/">lst</a></p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4 mt-3 mb-3">
					<div class="expo-box">
						<div class="project-tile d-flex align-items-center justify-content-center">
							<img src="./expo/img/projektlogo_hermosa.png" class="img-fluid" title="Hermosa" alt="Hermosa">
						</div>
						<div class="feature-content">
						<p>Projekt <a href="https://hermosa.mundialis.de/">Hermosa</a></p>
						</div>
					</div>
				</div>
				
				<div class="col-sm-6 col-lg-4 mt-3 mb-3">
					<div class="expo-box">
						<div class="project-tile d-flex align-items-center justify-content-center">
							<img src="./expo/img/projektlogo_actina.png" class="img-fluid" title="actina" alt="actina">
						</div>
						<div class="feature-content">
						<p>Projekt <a href="https://www.mundialis.de/de/actinia-geoprocessing-cloud/">actina</a></p>
						</div>
					</div>
				</div>											
			</div>
		</div>

	</section>

	<?php include('../inc/footer.inc'); ?>
</body>
</html>
