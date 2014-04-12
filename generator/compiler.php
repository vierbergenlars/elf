<?php

$languages = array('index'=>include __DIR__.'/nl.php', 'en'=>include __DIR__.'/en.php');


function load_template($data) {
	ob_start();
	include __DIR__.'/template.php';
	return ob_get_clean();
}

foreach($languages as $lang=>$data) {
	$compiled = load_template($data);
	file_put_contents(__DIR__.'/../'.$lang.'.html', $compiled);
}
