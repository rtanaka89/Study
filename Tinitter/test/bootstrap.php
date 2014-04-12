<?php
session_start();

require  '../vendor/autoload.php';
require  '../config.php';

// テスト用データベースの設定
$db_settings = array(
	'driver' => 'sqlite',
	// メモリ内にテスト用データベースを作成する
	'database' => ":memory:",
);

// データベースを初期化するSQLを指定する
define("TEST_SCHEMA_SQL", __DIR__."/../schema.sqlite3.sql");

\Base\DB::registerIlluminate($db_settings);