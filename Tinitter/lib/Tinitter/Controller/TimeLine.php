<?php
namespace Tinitter\Controller;

class TimeLine
{
	public function show()
	{
		$app = \Slim\Slim::getInstance();
		
		$app->render(
			'TimeLine/show.twig'
		);
	}
}
