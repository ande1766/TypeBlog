class Post < ActiveRecord::Base
	has_many :comments

	has_attached_file :photo, :styles => {:med => "600x200" },
	:url => "/assets/images/:id/:style/:basename.:extension",
	:path => ":rails_root/public/assets/images/:id/:style/:basename.:extension"

	validates_attachment_content_type :photo, :content_type => ["image/jpg", "image/jpeg", "image/png", "image/gif"]
	
end
