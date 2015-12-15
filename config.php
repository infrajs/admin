<?php
	namespace infrajs\infra;
	use infrajs\access\Access;
	use infrajs\ans\Ans;
	use infrajs\infra\Infra;

	
	Access::debug(true);
	
	$plugin = Ans::get('plugin');
	$conf = Infra::config($plugin);

	echo '<h1>Конфиг '.$plugin.'</h1><pre>';
	print_r($conf);
