<?php
session_start();
require_once("twitteroauth/twitteroauth/twitteroauth.php"); //Path to twitteroauth library

$search = "fossgis2016";
$notweets = 30;
$consumerkey = "bXjz3ypzoN2SGvdfSE7ITg";
$consumersecret = "zyHWIUke72ec7ISJSrDZE5pxWiojMxmqCIFoCjaU";
$accesstoken = "58790171-CKNhuLeMFlUlaTQVkDffNBg7CgbFTwjdrRc2d9BGI";
$accesstokensecret = "fkaa0DmTM2hZMZ09NOoK6tpL6cfbpZ2Iy2sIarcLxQA";

function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
  $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
  return $connection;
}

$connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);

$tweets = $connection->get("https://api.twitter.com/1.1/search/tweets.json?q=".$search."&count=".$notweets);

echo json_encode($tweets);
?>
