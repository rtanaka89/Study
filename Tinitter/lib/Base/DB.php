<?php
namespace Base;
class DB
{
	// illuminateのデータベース接続設定とブートアップ
	static function registerIlluminate(array $settings)
	{
		$capsule = new \Illuminate\Database\Capsule\Manager;
		$capsule->addConnection($settings);
		$capsule->setEventDispatcher(
			new \Illuminate\Events\Dispatcher(
				new \Illuminate\Container\Container()
			)
		);
		$capsule->setAsGlobal();
		$capsule->bootEloquent();
	}
}