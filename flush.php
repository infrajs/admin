<?php
use infrajs\access\Access;
use infrajs\config\Config;
use infrajs\ans\Ans;
use infrajs\mem\Mem;
use infrajs\path\Path;
use infrajs\router\Router;

if (!is_file('vendor/autoload.php')) {
	chdir('../../../');
	require_once('vendor/autoload.php');
	Router::init();
}

Access::test(true);

Mem::flush();
Path::fullrmdir('!', true);


$ans = array();
Ans::ret($ans, 'Cache cleared Mem::flush, Path::fulrmdir');
 