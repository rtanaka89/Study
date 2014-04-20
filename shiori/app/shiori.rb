require 'sinatra/base'
require 'active_record'
require 'will_paginate'
require_relative 'models/bookmark'

class Shiori < Sinatra::Base

	register WillPaginate::Sinatra

	set :public_folder, File.expand_path(File.join(root, '..', 'public'))
	
	#View�ŗ��p����w���p�[���\�b�h�Q
	helpers do
		def h(text)
			Rack::Utils.escape_html(text)
		end
	end

	configure do
		db_path = File.expand_path(File.join(root, '..', 'db', 'sqlite.db'))
		ActiveRecord::Base.establish_connection(
			adapter: 'sqlite3',
			database: db_path
		)
	end

	get '/' do
		#Bookmark.create!(url: 'http://example.com')
		@bookmarks = Bookmark.order('id DESC').page(params[:page])
		erb :index
	end
	
	get '/new' do
		erb :new
	end
	
	post '/create' do
		begin
			# �f�[�^��ۑ������ꍇ��'/'�փ��_�C���N�g
			Bookmark.create!(url: params[:url])
			redirect '/'
		rescue ActiveRecord::RecordInvalid => e
			# �f�[�^�̕ۑ��Ɏ��s������ēx�o�^��ʂ�`��
			@bookmark = e.record
			erb :new
		end
	end
end
