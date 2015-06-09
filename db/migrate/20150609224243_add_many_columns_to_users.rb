class AddManyColumnsToUsers < ActiveRecord::Migration
  def change
    add_column :users, :middle_name, :string
    add_column :users, :description, :string
    add_column :users, :rating, :float
    add_column :users, :gender, :string
    add_column :users, :address_id, :integer
    add_column :users, :email, :string

    # Phones

    add_column :users, :born_at, :date
  end
end
