authorization do 

	role :admin do
		has_permission_on [:posts, :comments], :to => [:index, :show, :new, :create, :edit, :update, :destroy]
	end

	role :guest do
		has_permission_on [:posts, :comments], :to => [:index, :show, :new, :create, :edit, :update, :destroy]
	end

	role :member do
		has_permission_on :posts, :to => [:index, :show, :edit] do
			if_attribute :user => is { user }
		end
		has_permission_on :comments, :to => [:show] do
			if_attribute :user => is { user }
		end
	end


	
end