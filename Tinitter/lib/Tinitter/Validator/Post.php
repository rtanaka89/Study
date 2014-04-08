<?php
namespace Tinitter\Validator;
class Post extends \Respect\Validation\Validator
{
	static function byArray(array $params)
	{
		$error_list = [];
		
		// nicknameをテスト
		if(!static::alnum()->validate($params['nickname'])) {
			$error_list['nickname'] = '半角の英数文字と空白だけにしてください';
		}
		if(!static::length(1,16)->validate($params['nickname'])) {
			$error_list['nickname'] = '１～１６文字以内にしてください';
		}
		
		// bodyをテスト
		if(!static::length(1,1000)->validate($params['body'])) {
			$error_list['body'] = '１～１０００文字以内にしてください';
		}
		
		return $error_list;
	}
}