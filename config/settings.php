<?php

date_default_timezone_set('Europe/Paris');
setlocale(LC_TIME, 'fr_FR.utf8','fra');

if (!empty($_GET['name']))
{
	$page = strip_tags($_GET['name'])." - ";
}

$conf = array(
	/**
	* GENERAL
	*/
	'web' => array(
		'page' => $page,
		'title' => $page.'Activ Gaming - Multigaming, Coaching, Tournois, Equipes classées ...',
		'description' => "Communauté multigaming Francophone depuis 2016. Laisse ta vie sociale de côté et viens passer des heures de folie chez nous. Parce que içi tu te sens comme à la maison. C'est la communauté multigaming PC francophone du moment !",
		'keywords' => "Multigaming, Teamspeak, Coach, Trounoi, League of Legends, Overwatch, Fortnite, CS: GO, Minecraft",
		'version' => "1.1.5",
		'debug' => 1
	),

	/**
	* PATH
	*/
	'path' => array(
		'upload' => "uploads/",
		'teamspeak' => "core/libraries/teamspeak/"
	),

	/**
	* LIMIT
	*/
	'limit' => array(
		'article' => 2,
		'event' => 2,
		'twitter' => 4
	),

	/**
	* CONNEXIONS
	* Paramètres de connexion
	*/
	'db_site' => array(
		'host' => "127.0.0.1",
		'user' => "USER",
		'password' => "PASSWORD",
		'table' => "WEBSITE_TABLE"
	),

	'db_ts' => array(
		'host' => "127.0.0.1",
		'user' => "USER",
		'password' => "PASSWORD",
		'table' => "TS_TABLE"
	),

	'query_ts' => array(
		'host' => "127.0.0.1",
		'user' => "USER",
		'password' => "PASSWORD",
		'port' => "9987",
		'port_query' => "10011"
	)
);

?>
