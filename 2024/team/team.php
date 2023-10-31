<!doctype html>
<html lang="de">

<head>
	<?php include "../inc/meta.inc"; ?>

	<base href="<?php echo dirname($_SERVER['SCRIPT_NAME']); ?>">
	<title>FOSSGIS 2024 - Team</title>

	<link rel="stylesheet" href="./css/normalize.css">
	<link rel="stylesheet" href="./css/base.css">
</head>

<body id="team">

	<?php include "../inc/header.inc"; ?>

	<h2>Das Konferenz-Team 2024</h2>
	<p>Die Konferenz wird durch die Unterstützung von vielen Menschen möglich und geschieht vorwiegend ehrenamtlich. Vielen Dank!
	
	<ul class="tiles">

	<?php

	$file = 'team.csv';
	$handle = fopen($file, 'r');

	while ($data = fgetcsv($handle, 1000, "|")) {
		$name = $data[0];
		$link = $data[1];
		$img = $data[2] ? $data[2] : "./img/fossgis24-logo_oR.png";
		$desc = $data[3];

		if ($link) {
			echo  "<li class='tile team'>"
				. "  <a href='{$link}' target='_blank'>"
				. "    <img src='{$img}' alt='{$name}' />"
				. "  </a>"
				. "  <p>"
				. "    <a href='{$link}' target='_blank'>"
				. "      <b>{$name}</b><br>"
				. "    </a>"
				. "    <small>{$desc}</small>"
				. "  </p>"
				. "</li>";
		} else {
			echo  "<li class='tile team'>"
				. "  <img src='{$img}' alt='{$name}' />"
				. "  <p>"
				. "    <b>{$name}</b><br>"
				. "    <small>{$desc}</small>"
				. "  </p>"
				. "</li>";
		}
	}

	fclose($handle);

	?>

	</ul>

	<?php include('../inc/footer.inc'); ?>

</body>

</html>
