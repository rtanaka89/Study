<?php
namespace Tinitter;
class Route 
{
	static function registration($app) {
		$app->get('/', '\Tinitter\Controller\TimeLine:show');
	}
}
