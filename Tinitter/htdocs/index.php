<?php
// ���C�u�����̓ǂݍ���
require '../vendor/autoload.php';

// �ݒ�t�@�C���̓Ǎ�
require __DIR__.'/../config.php';

// �f�[�^�x�[�X�ڑ��̃Z�b�g�A�b�v
\Base\DB::registerIlluminate($db_settings);

// slim�̏�����
$app = new \Slim\Slim([
	'templates.path' => TEMPLATES_DIR_PATH,
	'view' => new \Slim\Views\Twig()
]);

// slim�Ƀ��[�g��o�^
\Tinitter\Route::registration($app);

// ���s
$app->run();
