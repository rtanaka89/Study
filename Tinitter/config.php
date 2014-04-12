<?php
define('TEMPLATES_DIR_PATH', __DIR__.'/templates');

define('LOG_LEVEL', \Slim\Log::DEBUG);

$db_settings = [
	'driver' => 'sqlite',
	'database' => __DIR__."/sqlite.db"
];
