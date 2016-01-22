<?php
	
	use infrajs\access\Access;
	use infrajs\ans\Ans;
	use infrajs\config\Config;
	use infrajs\infra\Infra;

	
	Access::debug(true);
	
	$plugin = Ans::GET('plugin');
	$conf = Config::get($plugin);

	echo '<h1>Конфиг '.$plugin.'</h1><pre>';
	print_r($conf);
