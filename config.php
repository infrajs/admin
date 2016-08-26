<?php
	
use infrajs\access\Access;
use infrajs\ans\Ans;
use infrajs\config\Config;
use infrajs\router\Router;

if (!is_file('vendor/autoload.php')) {
	chdir('../../../');
	require_once('vendor/autoload.php');
	Router::init();
}

Access::debug(true);

$plugin = Ans::GET('plugin', 'string', null);
$conf = Config::get($plugin);

echo '<h1>Конфиг '.$plugin.'</h1><pre>';
print_r($conf);
