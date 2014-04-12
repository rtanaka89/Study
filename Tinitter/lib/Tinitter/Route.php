<?php
namespace Tinitter;
class Route 
{
	static function registration($app) {
		$app->add( new \Slim\Extras\Middleware\CsrfGuard());
		$app->get('/', '\Tinitter\Controller\TimeLine:show');
		$app->get('/page/:page_num', '\Tinitter\Controller\TimeLine:show');
		$app->post('/post/commit', '\Tinitter\Controller\Post::commit');
	}
}
