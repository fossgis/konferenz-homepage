<!doctype html>
<html lang="de">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>FOSSGIS 2019 - Team</title>
	<meta name="description" content="Die FOSSGIS-Konferenz ist im D-A-CH Raum die führende Konferenz für Freie und Open Source Software für Geoinformationssysteme OpenStreetMap.">
	<meta name="keywords" content="FOSSGIS, FOSSGIS-Konferenz, 2019, FOSSGIS-Konferenz 2019, Open Source, GIS, Konferenz, Geoinformatik, OpenStreetMap, HTW Dresden">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="/2019/css/normalize.css">
	<link rel="stylesheet" href="/2019/css/base.css">
	<link rel="stylesheet" href="/2019/css/components.css">
</head>

<body id="team">

	<?php include "../inc/header.inc"; ?>

    <h2>Das Konferenz-Team</h2>

	<table class="list" border="0">

<?php
    $File = 'loc.csv';

    $arrResult  = array();
    $handle     = fopen($File, "r");
    if(empty($handle) === false) {
        while(($data = fgetcsv($handle, 1000, "|")) !== FALSE){
            $arrResult[] = $data;
        echo "<tr>";
        echo "<td style='padding:5px;'>";
        if ($data[1]!=''){
            echo "<a href='".$data[1]."'>";
        }
        echo "<div class='image small'>";
        if ($data[2]==''){
            $data[2] = "/2019/img/fossgis19-logo.png";
        }
        echo "<img width='140px' src='".$data[2]."' alt='".$data[0]."' /></div>";
        if ($data[1]!=''){
           echo "</a>";
        }
        echo "</td><td>";
        if ($data[1]!=''){
            echo "<a href='".$data[1]."' target='_blank'>".$data[0]."</a>";
        }else{
            echo $data[0];
        }
        echo "<br>".$data[3]."</td>";
        echo "</tr>";

        }
        fclose($handle);
    }

?>

</table>

	</div>
	<?php include('../inc/footer.inc'); ?>
      </div>
    </body>
</html>
