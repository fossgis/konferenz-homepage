<?php

if (!defined("VID_URL")) define("VID_URL","http://ftp5.gwdg.de/pub/misc/openstreetmap/FOSSGIS2016/");


// Video Directory einlesen und parsen -> $dir
$html = file_get_contents(VID_URL);
if ($html===FALSE) die("VID_URL ".VID_URL." konnte nicht gelesen werden.\n");
$arr=explode("\n", $html);
foreach ($arr as $zeile) {
    if (preg_match("|^\<img src=\"/icons.*\>\s+\<a href=\"(.*)\"\>(.*)\</a\>\s+([\d\w\-]+ [\d\w:]+)\s+([\d\w]+)(\s*)$|i", $zeile, $matches)) {
	//echo $matches[1]."|".$matches[2]."|".$matches[3]."|".$matches[4]."|".$matches[5]."|";
	//if (!$matches[1]==$matches[2]) echo "**********";
	unset($file);
	$file["name"]=$matches[1];
	$file["date"]=$matches[3];
	$file["size"]=$matches[4];
	if (!preg_match("/(.+)\.([\w\d]+)$/i", $file["name"], $matches)) die("Fehler beim Parsen von ".$file["name"]);
	$id=(int)($matches[1]);
	$type=strtolower($matches[2]);
	if (empty($type)) die("Fehler beim Parsen des Filetyps von ".$file["name"]);
	//echo $matches[1]."|".$id."|";
	//echo "\n";
	$dir[$id][$type]=$file;
    }
}
unset($zeile, $matches, $arr, $html, $file, $id, $type);


?>
