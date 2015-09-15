<?php

date_default_timezone_set('Europe/Berlin');

error_reporting(E_ALL | E_STRICT);

global $CONFIG;
$CONFIG = (object) array(
			'dbprefix' => 'elgg_',
			'boot_complete' => false,
			'wwwroot' => 'http://localhost/',
);

$engine = dirname(dirname(dirname(dirname(__FILE__)))) . '/engine';

require_once "$engine/lib/autoloader.php";
require_once "$engine/lib/elgglib.php";
require_once "$engine/lib/sessions.php";

require_once dirname(dirname(__FILE__)) . '/lib/autoloader.php';

function elgg_get_config($name) {
	global $CONFIG;
	return $CONFIG->$name;
}