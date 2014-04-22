require 'spec_helper'

describe '/' do
	context 'レコードが１件の場合' do
		before do
			Bookmark.create!(
				url: 'http://localhost/rspec_test')
		end
	
		it '登録したBookmarkのURLが出力されている' do
			visit '/'
			expect(page.status_code).to eq 200
			expect(page.find(
				'//table/tbody/tr/td/a')['href']).to eq 'http://localhost/rspec_test'
		end
	end
end
