class CreateAdminFacilities < ActiveRecord::Migration
  def change
    create_table :admin_facilities do |t|

      t.timestamps null: false
    end
  end
end
