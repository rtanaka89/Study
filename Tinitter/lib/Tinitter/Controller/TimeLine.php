<?php
namespace Tinitter\Controller;

class TimeLine
{
	public function show()
	{
		$app = \Slim\Slim::getInstance();
		
		$post = new \Tinitter\Model\Post;
		$post->nickname = '�j�b�N�l�[��';
		$post->body = '�{��';
		$post->save();
		$same_post = \Tinitter\Model\Post::find(1);
		
		$app->render(
			'index.twig',
			['display_text'=>"Hello, world!"]
		);
	}
}
