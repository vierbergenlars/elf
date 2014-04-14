<?php

$defaults = include __DIR__.'/defaults.php';
$languages = array('index'=>include __DIR__.'/nl.php', 'en'=>include __DIR__.'/en.php');

function translate_activity_dow(DateTime $start, $data) {
	$day = $start->format('w');
	return $data['weekday'][$day];
}

function format_activity_date($act, $data) {
	$start = $act['start'];
	$end = $act['end'];

	$start_fmt = translate_activity_dow($start, $data).' '. $start->format('j/n @ G:i');
	if( $start->format('Ymd') == $end->format('Ymd')) {
		$end_fmt = $end->format('G:i');
	} else {
		$end_fmt = translate_activity_dow($end, $data).' '. $end->format('j/n @ G:i');
	}
	return array($start_fmt, $end_fmt);
}

function load_template($data) {
	ob_start();
	include __DIR__.'/template.php';
	return ob_get_clean();
}

foreach($languages as $lang=>$data) {
	$data = array_merge_recursive($defaults, $data);
	$compiled = load_template($data);
	file_put_contents(__DIR__.'/../'.$lang.'.html', $compiled);
}
