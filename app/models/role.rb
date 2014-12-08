class Role < ActiveRecord::Base
	has_and_belongs_to_many :users

	def set_role
	 	@role = User.find(params[:id])
	end
end
