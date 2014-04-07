<?php
namespace Base;
class DB
{
	// illuminate�̃f�[�^�x�[�X�ڑ��ݒ�ƃu�[�g�A�b�v
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