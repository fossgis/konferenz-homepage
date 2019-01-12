<!DOCTYPE html>
<?php 
#require_once 'simple_html_dom.php'; 
?>
<html lang="de">
    <head>
        <title>FOSSGIS 2019</title>
        <meta name="description" content="Die FOSSGIS-Konferenz ist die führende Konferenz für Freie und Open Source Software für Geoinformationssysteme und OpenStreetMap.">
         <meta name="keywords" content="FOSSGIS, FOSSGIS-Konferenz, 2019, FOSSGIS-Konferenz 2019, Open Source, GIS, Konferenz, Geoinformatik, OpenStreetMap, HTW Dresden">
         <meta charset="utf-8">
        <link href="../css/screen.css" type="text/css" rel="stylesheet" media="screen">
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
      <img src="../img/dresden.jpg" width="880" height="241" alt="Dresden Panorama">
      <figcaption>Photo: Kolossos</figcaption>
    </figure>
    
    <h2>Das Konferenz-Team</h2>

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
            $data[2] = "../img/fossgis19-logo.png";
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
