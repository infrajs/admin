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
Infra::req();
Access::test(true);
Path::fullrmdir('!');
Infra::req();
Event::fire('oninstall');
$ans=array();
Ans::ret($ans, 'Cache cleared, install completed');
 