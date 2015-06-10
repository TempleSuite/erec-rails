class CreateFacilities < ActiveRecord::Migration
  def change
    create_table :facilities do |t|
      t.string :description
      t.string :title
      t.string :short_location
      t.integer :capacity
      t.float :rating

      t.timestamps null: false
    end
  end
end
