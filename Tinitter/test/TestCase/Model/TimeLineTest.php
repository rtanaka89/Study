<?php
namespace TestCase\Controller;

class TimeLineTest extends \Tinitter\Test\Base
{
	// タイトルが設定されているか
	public function testTitle()
	{
		$dom = $this->req_dom('/');
		$this->assertEquals('Tinitter', $dom->find('title', 0)->text);
	}
}