<?php

/*
Common Functions
================
wochentag($datestring) -> (string) "Montag", etc, "" bei Fehler		String wie strtotime($datestring)
remove_tags($string) -> (string)					strip_tags() + ltrim()
lpad($string, $len) -> (string)						padded nur, UTF-8 aware
rpad($string, $len) -> (string)						padded nur, UTF-8 aware
utf8_cutpad($str, $len) -> (string) "Bla bla..."			cutet+padded, UTF-8 aware
utf8_cut($str, $len) -> (string) "Bla bla..."				cutet (aber padded nicht), UTF-8 aware
html_header()		macht echo
html_header_css()	macht echo					Header mit css Link
html_footer()		macht echo
youtube_link((string)$id) -> (string) Link
mp4_link($fnam) -> (string) Link					$fnam nur der Dateiname, Pfad ist als Konstante vorgegeben
webm_link($fnam) -> (string) Link
mp3_link($fnam) -> (string) Link
ogg_link($fnam) -> (string) Link
*/

define("YT_ICON",  "https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/18x14_Video_Clic_Player.svg/20px-18x14_Video_Clic_Player.svg.png");
define("MP4_ICON", "https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Video-icon.svg/20px-Video-icon.svg.png");
define("WEBM_ICON","https://upload.wikimedia.org/wikipedia/commons/thumb/3/34/WebM_logo.svg/24px-WebM_logo.svg.png");
define("MP3_ICON", "https://upload.wikimedia.org/wikipedia/commons/thumb/5/5e/MP3_logo.png/24px-MP3_logo.png");
define("OPUS_ICON", "https://upload.wikimedia.org/wikipedia/commons/thumb/0/02/Opus_logo2.svg/24px-Opus_logo2.svg.png");
define("OGG_ICON", "https://upload.wikimedia.org/wikipedia/commons/f/fc/Ogg_Logo.png");


function wochentag($date) {
    $arr = array(	"0" => "Sonntag",
			"1" => "Montag",
			"2" => "Dienstag",
			"3" => "Mittwoch",
			"4" => "Donnerstag",
			"5" => "Freitag",
			"6" => "Samstag",
    );
    $hi=strtotime($date);
    if ($hi===FALSE) return "";
    return $arr[date("w",$hi)];
} // wochentag()

function remove_tags($str) {
    $ret=strip_tags($str);
    $ret=ltrim($ret);
    return $ret;
} // remove_tags()

function lpad($str, $len) {
    $ret=(string)$str;
    $hi=mb_strlen($ret,"UTF-8");
    if ($hi<$len) $ret=str_repeat(" ", $len-$hi).$ret;
    return $ret;
} // lpad(), left-pad

function rpad($str, $len) {
    $ret=(string)$str;
    $hi=mb_strlen($ret,"UTF-8");
    if ($hi<$len) $ret.=str_repeat(" ", $len-$hi);
    return $ret;
} // rpad()

function utf8_cut($str, $len) {
    // UTF-8 nur cut, kein padding, mit ...
    // mb_strimwidht() padded nicht, wenn String zu kurz!
    $ret=mb_substr($str, 0, $len, "UTF-8");
    $hi=mb_strlen($ret, "UTF-8");
    if (mb_strlen($str, "UTF-8") > $len) $ret.="...";
    return $ret;
} // utf8_cutpad()

function utf8_cutpad($str, $len) {
    // UTF-8 cut & pad, mit ...
    // mb_strimwidht() padded nicht, wenn String zu kurz!
    $ret=mb_substr($str, 0, $len, "UTF-8");
    $hi=mb_strlen($ret, "UTF-8");
    if ($hi<$len) $ret.=str_repeat(" ", $len-$hi);
    if (mb_strlen($str, "UTF-8") > $len) $ret.="...";
    else $ret.="   ";
    return $ret;
} // utf8_cutpad()

function html_header() {
    echo "<!DOCTYPE html>\n<html>\n<head>\n  <meta charset=\"utf-8\"/>\n  <title>Videoaufzeichnungen</title>\n</head>\n\n";
    echo "<body id=\"videos\">\n";
    return;
} // header()

function html_header_css() {
    echo "<!DOCTYPE html>\n<html>\n<head>\n  <meta charset=\"utf-8\"/>\n  <title>Videoaufzeichnungen</title>\n  <link href=\"../css/screen.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\">\n  <link href=\"../css/video.css\" type=\"text/css\" rel=\"stylesheet\" >\n</head>\n\n";
    echo "<body id=\"videos\">\n";
    return;
} // header()

function html_footer() {
    echo "</body>\n</html>\n";
    return;
} // footer()


function youtube_link($ytid) {
    return "<a href=\"https://www.youtube.com/watch?v=".$ytid."\" title=\"YouTube Video\"><img src=\"".YT_ICON."\" alt=\"YouTube Play Button\"></a>";
}

function mp4_link($fnam, $qual="") {
    if (!empty($qual)) return "<a href=\"".VID_URL.$fnam."\" title=\"MP4 ".$qual." Video\"><img src=\"".MP4_ICON."\" alt=\"MP4 Icon\"></a>";
    return "<a href=\"".VID_URL.$fnam."\" title=\"MP4 Video\"><img src=\"".MP4_ICON."\" alt=\"MP4 Icon\"></a>";
}

function webm_link($fnam, $qual="") {
    if (!empty($qual)) return "<a href=\"".VID_URL.$fnam."\" title=\"Webm ".$qual." Video\"><img src=\"".WEBM_ICON."\" alt=\"Webm Logo\"></a>";
    return "<a href=\"".VID_URL.$fnam."\" title=\"Webm Video\"><img src=\"".WEBM_ICON."\" alt=\"Webm Logo\"></a>";
}

function mp3_link($fnam) {
    return "<a href=\"".VID_URL.$fnam."\" title=\"MP3 Audio\"><img src=\"".MP3_ICON."\" alt=\"MP3 Logo\"></a>";
}

function ogg_link($fnam) {
    return "<a href=\"".VID_URL.$fnam."\" title=\"Ogg Audio\"><img src=\"".OGG_ICON."\" alt=\"Ogg Logo\" width=\"20\"></a>";
}

function opus_link($fnam) {
    return "<a href=\"".VID_URL.$fnam."\" title=\"Opus Audio\"><img src=\"".OPUS_ICON."\" alt=\"Opus Logo\"></a>";
}


?>
