<?php

if (! defined('SCHEDULED_TRIGGER_NAME'))
{
	define('SCHEDULED_TRIGGER_NAME', 'Scheduled Trigger');
	define('SCHEDULED_TRIGGER_DESC', 'Trigger standard hooks when scheduled entries go live or expire.');
	define('SCHEDULED_TRIGGER_VER', '1.0.0');
	define('SCHEDULED_TRIGGER_AUTHOR', 'Caddis');
	define('SCHEDULED_TRIGGER_DOCS', '');
}

$config['name'] = SCHEDULED_TRIGGER_NAME;
$config['version'] = SCHEDULED_TRIGGER_VER;