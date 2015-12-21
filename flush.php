<?php


use infrajs\access\Access;
use infrajs\event\Event;
use infrajs\config\Config;
use infrajs\ans\Ans;
use infrajs\path\Path;

if (!is_file('vendor/autoload.php')) {
	chdir('../../../../');
	require_once('vendor/autoload.php');
}

Access::debug(true);

Config::init();
Path::fullrmdir('!', true);

$ans=array();
Ans::ret($ans, 'Cache cleared');
 