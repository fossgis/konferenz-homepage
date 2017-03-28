<?php

if (!defined("YT_URL")) define("YT_URL","https://tracker.c3voc.de/api/v1/gpn16/tickets/released.json");

// YT einlesen und parsen -> $ytarr
$json = file_get_contents(YT_URL);
if ($json===FALSE) die("YT_URL ".YT_URL." konnte nicht gelesen werden.\n");
$a=json_decode($json, TRUE);
if (is_null($a)) die("YT_URL ".YT_URL." konnte nicht als JSON interpretiert werden.\n");
foreach ($a as $nr => $b) {
    if (!is_null($b["youtube_url"])) {
	$id=$b["fahrplan_id"];
	$ret=preg_match("/\?v=(.+)$/", $b["youtube_url"], $matches);
	if ($ret===FALSE) continue;	// naechster Eintrag
	$yt=$matches[1];
	$ytarr[$id]=$yt;
    }
}
unset($json, $a, $b, $nr, $id, $ret, $matches, $yt);

?>
