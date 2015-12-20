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

echo '<pre>';
$dirs = Config::get('path');
print_r($dirs);
