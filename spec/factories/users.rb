FactoryGirl.define do
  factory :user do
    first_name { Faker::Name.first_name }
    last_name { Faker::Name.last_name }
    email { Faker::Internet.email }
    password { 'secret1234' }
    password_confirmation { 'secret1234' }
    privilege_level { 'member' }
  end
end
