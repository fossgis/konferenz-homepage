<?php

if (!defined("VID_URL")) define("VID_URL","https://ftp5.gwdg.de/pub/misc/openstreetmap/FOSSGIS2016/");


// Video Directory einlesen und parsen -> $dir
$html = file_get_contents(VID_URL);
//if ($html===FALSE) die("VID_URL ".VID_URL." konnte nicht gelesen werden.\n");
if ($html===FALSE) {
    $dir=array();
} else {
    //echo "<pre>";
    $arr=explode("\n", $html);
    foreach ($arr as $zeile) {
	if (preg_match("|^(\<img src=\"/icons.*\>\s+)?\<a href=\"(.*)\"\>(.*)\</a\>\s+([\d\w\-]+ [\d\w:]+)\s+([\d\w]+)(\s*)$|i", $zeile, $matches)) {
		// $matches[1] ist das Icon Image, das ist mal da, spaeter nicht
		// $matches[2] ist der Link
		// $matches[3] ist der Linktext (kann gekuerzt sein!)
		// $matches[4] ist das Dateidatum
		// $matches[5] ist die Dateigroesse
		// $matches[6] ist irgendwas danach (incl. Newline!)
	    //echo $matches[1]."|".$matches[2]."|".$matches[3]."|".$matches[4]."|".$matches[5]."|".$matches[6];
	    //if (!$matches[2]==$matches[3]) echo "**********";
	    unset($file);
	    $file["name"]=$matches[2];
	    $file["date"]=$matches[4];
	    $file["size"]=$matches[5];
	    if (!preg_match("/(FOSSGIS".JAHR."[\-_]|".JAHR."[\-_])?(.+)\.([\w\d]+)$/i", $file["name"], $matches)) die("Fehler beim Parsen von ".$file["name"]);
	    $id=(int)($matches[2]);
	    $type=strtolower($matches[3]);
	    if (empty($type)) die("Fehler beim Parsen des Filetyps von ".$file["name"]);
	    $temp=$matches[2];
	    //echo $matches[1]."|".$matches[2]."|".$matches[3].$matches[4]."|".$id."|".$type."|";
	    if ((($type=="mp4") || ($type=="webm")) && preg_match("/.*(\-hd|\-sd)$/i", $temp, $matches)) {
		$qual=substr($matches[1],1);
	    } else {
		$qual="";
	    }
	    //echo $file["name"]."|".$id."|".$qual."|".$type."|";
	    //echo "\n";
	    $dir[$id][$type][$qual]=$file;
	}
    }
    //echo "<hr>\n";
    //var_dump($dir);
    //echo "\n</pre>\n";
}
unset($zeile, $matches, $arr, $html, $file, $id, $type, $temp);


?>
