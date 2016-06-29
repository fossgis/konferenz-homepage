<?php

if (!defined("JSON_SPEAKERS")) define("JSON_SPEAKERS","http://frab.fossgis-konferenz.de/de/2016/public/speakers.json");

// Speakers einlesen und parsen -> $speakers
// enthält aber nur die mit Bild!
$json = file_get_contents(JSON_SPEAKERS);
if ($json===FALSE) die("JSON_SPEAKERS ".JSON_SPEAKERS." konnte nicht gelesen werden.\n");
$a=json_decode($json, TRUE);
if (is_null($a)) die("JSON_SPEAKERS ".JSON_SPEAKERS." konnte nicht als JSON interpretiert werden.\n");

// $a sind das json root element
// $b sind die schedule_speakers (version und speakers)
// $c sind jetzt endlich die speakers
$b=current($a);
$c=$b["speakers"];

foreach ($c as $speaker) {
    $id=$speaker["id"];
    if (empty($id)) die("ID ".$id." empty!\n");
    if (empty($speaker["image"])) continue;	// nur Speakers mit Bild
    $name=$speaker["full_public_name"];
    $image=$speaker["image"];
    $speakers[$id]["name"]=$name;
    $speakers[$id]["image_small"]=preg_replace("/medium/i","small",$image);
    $speakers[$id]["image"]=preg_replace("/medium/i","large",$image);
} // $c durchgehen


unset($json, $a, $b, $c, $id, $name, $image, $speaker);

?>
