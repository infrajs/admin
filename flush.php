<?php
namespace infrajs\infra;
use infrajs\access\Access;
use infrajs\event\Event;
use infrajs\ans\Ans;
use infrajs\path\Path;

if (!is_file('vendor/autoload.php')) {
	chdir('../../../../');
	require_once('vendor/autoload.php');
}
Config::get();
Access::test(true);
Path::fullrmdir('!');
Config::get();
Event::fire('oninstall');
$ans=array();
Ans::ret($ans, 'Cache cleared, install completed');
 