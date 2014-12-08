class DashboardController < ApplicationController
	def index
		@user = User.find(params[:user_id])
		@posts = Post.all
	end
end
