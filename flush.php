<?php
namespace infrajs\infra;
use infrajs\access\Access;
use infrajs\event\Event;
use infrajs\ans\Ans;

if (!is_file('vendor/autoload.php')) {
	chdir('../../../../');
	require_once('vendor/autoload.php');
}

Access::test(true);
Path::fullrmdir('|');
Infra::req();
Event::fire('oninstall');
Ans::ret($ans, 'Cache cleared, install complete');
 