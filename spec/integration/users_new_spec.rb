require 'rails_helper'

feature 'Visitor signs up' do
  scenario 'with valid email and password' do
    valid_user = attributes_for(:user)

    visit new_user_path
    fill_in 'user_email', with: valid_user[:email]
    fill_in 'user_password', with: valid_user[:password]
    fill_in 'user_password_confirmation', with: valid_user[:password]

    fill_in 'user_first_name', with: valid_user[:first_name]
    fill_in 'user_last_name', with: valid_user[:last_name]
    fill_in 'user_gender', with: 'Male'

    click_button 'Create User'

    expect(page).to have_content 'Verified Member'
  end
end
