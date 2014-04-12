<?php
namespace Tinitter\Test;
use \Tinitter\Model\Post as M_Post;

class Farming
{
	// ダミーの投稿（\Tinitter\Model\Post）を
	// 指定した数だけ生成して保存する
	static function farmingPost($num)
	{
		$faker = \Faker\Factory::create();
		for( $i = 0; $i < $num; $i++ ) {
			$post = new M_Post;
			$post->nickname = $faker->firstname;
			$post->body = $faker->paragraph(2);
			$post->save();
		}
	}
}