<!DOCTYPE html>
<?php 
#require_once 'simple_html_dom.php'; 
?>
<html lang="de">
    <head>
        <title>FOSSGIS 2018 - Das Konferenz-Team</title>
        <meta name="description" content="FOSSGIS ist die Abk&uuml;rzung f&uuml;r Freie und Open Source Software f&uuml;r Geoinformationssysteme und ist die f&uuml;hrende Konferenz zu diesem Thema im deutschsprachigen Raum.">
        <meta name="keywords" content="FOSSGIS, Open Source, GIS, Konferenz, Geoinformatik, OpenStreetMap, OSM, Universität Bonn">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">

         
        <link href="../css/screen.css" type="text/css" rel="stylesheet" media="screen">
	<link type="text/css" href="programm.css" media="screen,print" rel="Stylesheet"/>
	<link type="text/css" href="extra.css" media="screen,print" rel="Stylesheet"/>	
    </head>
    
    <body id="team">
      <div id="wrap">
        <?php include('../inc/head.inc'); ?>
	
        <div id="content">
	  
          <?php
	     include('../inc/nav.inc');
	     #include('prog_nav.inc');
          ?>
	  
                <figure>
                    <img src="../img/bonn.jpeg" width="880" height="241" alt="Bonn">
                    <figcaption>Photo: Stadt Bonn</figcaption>
                </figure>
	  
	  <?php
	  
	  echo "<h2>Das Konferenz-Team</h2>";
?>

<table class='list' border='0' width='90%'>

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
            $data[2] = "../img/fossgis-konferenz-2018.png";
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
        echo "</td><td>".$data[3]."</td>";
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
