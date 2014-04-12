<?php
namespace Tinitter\Model;
class Post extends \Illuminate\Database\Eloquent\Model
{
	// ページ指定で投稿の取得
	static function getByPage($per_page, $page_num)
	{
		// スキップする件数を計算
		$offset = $per_page * ($page_num-1);
		
		// 投稿を取得、次のページの存在判定用に1件多く取得
		$post_list = static::orderBy('id', 'DESC')->take($per_page+1)->skip($offset)->get()->all();
		
		// 次のページの存在をチェック
		if( count($post_list) > $per_page ) {
			array_pop($post_list); // 確認用の1件を捨てる
			$next_page_is_exist = true;
		} else {
			$next_page_is_exist = false;
		}
		
		return [$post_list, $next_page_is_exist];
	}
}