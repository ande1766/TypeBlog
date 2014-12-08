class AddColumnToDashboards < ActiveRecord::Migration
  def change
    add_column :dashboards, :user_id, :integer
    add_index :dashboards, :user_id
  end
end
