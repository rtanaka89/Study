<?php
// ライブラリの読み込み
require '../vendor/autoload.php';

// 設定ファイルの読込
require __DIR__.'/../config.php';

// データベース接続のセットアップ
\Base\DB::registerIlluminate($db_settings);

// slimの初期化
$app = new \Slim\Slim([
	'templates.path' => TEMPLATES_DIR_PATH,
	'view' => new \Slim\Views\Twig()
]);

// slimにルートを登録
\Tinitter\Route::registration($app);

$app->post('/post/commit', '\Tinitter\Controller\Post::commit');

// 実行
$app->run();
