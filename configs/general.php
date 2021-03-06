<?php
/* User player name instead of player id for urls */
$config[0]["url"]["player"]["useName"]=true;
$config[0]["site"]["home"]="home";

/* Enter in the stats site base url Eg: http://www.example.com/stats */
$config[0]["url"]["base"] = "http://stats.mysunland.org";
$config[0]["url"]["rewrite"] = true;

$config[0]["ping"]["cache"]=true; /* Weather or not to cache server Ping */
$config[0]["ping"]["time"] = 10000; /* In Milliseconds */

$config[0]["query"]["cache"]=true; /* Weather or not to cache server Query */
$config[0]["query"]["time"] = 100; /* In Milliseconds */

/* Theme settings */
$config[0]["themes"]["id"]="bigBlue";

/* Custom navigation bar urls */
$config[0]["nav"]["tabs"]["custom"] = array(
	array(
		"text" => "Our Site",
		"url" => "http://minecraft.mysunland.org",
	) ,
	array(
		"text" => "Our Twitter",
		"url" => "https://twitter.com/MySunland_MC",
	) ,
);
