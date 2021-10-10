<?php
ini_set("include_path", "/var/www/html/2016/inc");

require_once("config.inc");		// defines
require_once("common.inc");		// wochentag(), remove_tags(), l|rpad(), utf8_cut(pad)(), html_header|footer()



// YT einlesen und parsen -> $ytarr
include("yt.inc");


// Video Directory einlesen und parsen -> $dir
include("videodir.inc");


// Speakers einlesen -> $speakers
include("speakers.inc");


// Konferenzdaten einlesen und Liste ausgeben
$json = file_get_contents(CONF_URL);
if ($json===FALSE) die("CONF_URL ".CONF_URL." konnte nicht gelesen werden.\n");
$a=json_decode($json, TRUE);
if (is_null($a)) die("CONF_URL ".CONF_URL." konnte nicht als JSON interpretiert werden.\n");

html_header_css();
echo "<div id=\"wrap\">\n";
include('head.inc');
echo "  <div id=\"content\">\n";
include('nav.inc');
echo "  </div>\n</div>\n";

echo "<div id=\"videoaufzeichnungen\">\n";

echo "<h2>Videoaufzeichnungen</h2>\n";

$debug=preg_match("/debug/i", $_SERVER["QUERY_STRING"]);

if ($debug) {
    echo "<p>";
	echo "<a href=\"".YT_PLAYLIST."\" title=\"Playlist\">".count($ytarr)." YT-Links</a> (<a href=\"".YT_URL."\" title=\">YT-Playlist (JSON)\">JSON</a>) gefunden. ";
    echo "<a href=\"".VID_URL."\" title=\"Video Directory\">".count($dir)." Videos</a> gefunden. ";
	echo "<a href=\"".JSON_SPEAKERS."\" title=\"Speakers (JSON)\">".count($speakers)." Vortragende</a> (mit Bild) gefunden. ";
} else {
    if ((count($ytarr)==0) && (count($dir)==0)) {
	echo "<p>Es sind noch keine Videoaufzeichnungen verfügbar.</p>\n";
    }
}
// DEBUG!!
//$ytarr[5096]="TEST1";
//$ytarr[5041]="TEST2";
//$ytarr[5070]=$ytarr[7582];
//$ytarr[5096]=$ytarr[7595];

// $ytarr sind die YT-IDs (Key ist die ID des Vortrags)
// $a ist die schedule
// $b ist version und conference
// $c ist die conference (title, start, end, daysCount und days)
// $d sind die days
// $e ist der einzelne Tag ($nr der Tageszaehler, 0-based)
// $r sind die rooms pro Tag ($raum der Raumzaehler pro Tag)
// $f sind die Vortraege pro Raum
// $v ist der einzelne Vortrag ($vnr als Zähler)
// $v["persons"] sind die Personen
// $p die einzelne Person "public_name" ($pnr als Personenzaehler)
$b=current($a);
$c=$b["conference"];
$daycount=$c["daysCount"];
$d=$c["days"];

if ($debug) {
	if (count($d)==$daycount) echo "<a href=\"".CONF_URL."\" title=\"Konferenz Schedule JSON\">".$daycount." Tage</a> gefunden.\n";
    else echo "Tage: SOLL=".$daycount.", IST=".count($d)."\n";
    echo "</p>\n";
}

echo "<table class=\"video\">\n";
echo "<thead>\n <tr class=\"header\">\n";
echo "  <th>Termin</th><th>Raum</th><th>Vortragende(r)</th><th>Titel</th><th>Video/Audio</th>\n";
echo " </tr>\n</thead>\n";
echo "<tfoot>\n <tr style=\"background-color:#eb7f00; height:15px;\"><td colspan=\"7\"></td></tr>\n</tfoot>\n";
echo "<tbody>\n";
$i=0;
foreach ($d as $nr => $e) {
    $date=$e["date"];
    //echo "Tag ".($nr+1).": ".$e["date"]."\n";
    //echo wochentag($date)."\n";
    echo " <tr class=\"subheader\">\n";
    echo "  <td colspan=\"7\">".wochentag($date)."</td>\n";
    echo " </tr>\n";
    if ($i%2) $i++;	// nach dem Wochentag mit weiss beginnen
    foreach ($e["rooms"] as $raum => $f) {
	if (count($f)<1) continue;	// naechster Raum
	if (substr($raum, 0, 6)=="E EXPO") $raum=substr($raum, 2);
	if (strpos(HIDDEN_ROOMS, "|".$raum."|")>0) continue;	// gewisse Raeume ueberspringen
	//echo "Raum ".$raum.": ";
	//echo count($f)." Vortraege gefunden.\n";
	foreach ($f as $vnr => $v) {
	    if ($i%2) echo " <tr class=\"grau\">\n";
	    else      echo " <tr class=\"weiss\">\n";
	    $i++;
	    $id=$v["id"];
	    if (strpos(HIDDEN_IDS, "|".$id."|")>0) continue;	// gewisse IDs ueberspringen
	    $title=remove_tags($v["title"]);
	    $subtitle=remove_tags($v["subtitle"]);
	    $desc=remove_tags($v["description"]);
	    echo "  <td>".$date." ".$v["start"]."</td>\n";
	    echo "  <td>".ltrim($raum)."</td>\n";
	    $pers="";
	    $pid=0;
	    foreach ($v["persons"] as $pnr => $p) {
		if ($pnr>0) $pers.=", ";
		if (($pid==0) && (array_key_exists($p["id"], $speakers))) $pid=$p["id"];
		$pers.="<a href=\"/2016/programm/speaker".$p["id"].".html\" title=\"".$p["public_name"]."\">".$p["public_name"]."</a>";
	    } // Personen
	    echo "  <td style=\"width:13em;\">".$pers."</td>\n";
	    echo "  <td><a href=\"/2016/programm/event".$id.".html\" title=\"".utf8_cut($desc, DESC_LEN)."\">".utf8_cut($title, TIT_LEN)."<br>";
	    if (!empty($subtitle)) echo "<i>".utf8_cut($subtitle, SUB_LEN)."</i>";
	    echo "</a></td>\n";
	    if (array_key_exists($id, $ytarr)) {
		echo "  <td>".youtube_link($ytarr[$id])." ";
	    } else {
		echo "  <td>";
	    }
	    // $DEBUG!!
	    //if ($id==5015) $id=771;
	    //if ($id==5096) $id=779;
	    if (array_key_exists($id, $dir)) {
		$files=$dir[$id];
		if (!empty($files["mp4"]["hd"])) echo mp4_link($files["mp4"]["hd"]["name"], "HD")." ";
		if (!empty($files["mp4"]["sd"])) echo mp4_link($files["mp4"]["sd"]["name"], "SD")." ";
		if (!empty($files["webm"]["hd"])) echo webm_link($files["webm"]["hd"]["name"], "HD")." ";
		if (!empty($files["webm"]["sd"])) echo webm_link($files["webm"]["sd"]["name"], "SD")." ";
		if (!empty($files["mp3"][""])) echo mp3_link($files["mp3"][""]["name"])." ";
		if (!empty($files["opus"][""])) echo opus_link($files["opus"][""]["name"])." ";
		if (!empty($files["ogg"][""])) echo ogg_link($files["ogg"][""]["name"])." ";
	    }
	    echo "</td>\n";
	    echo " </tr>\n";	// Vortragszeile fertig
	} // Vortraege
    } // Räume
} // Tage
echo "</tbody>\n";
echo "</table>\n";

echo "</div>\n";	// videoaufzeichnungen

html_footer();

?>
