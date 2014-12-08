class CreatePosts < ActiveRecord::Migration
  def change
    create_table :posts do |t|
      t.string :title
      t.string :image
      t.string :content
      t.string :source
      t.string :author_id

      t.timestamps
    end
  end
end
