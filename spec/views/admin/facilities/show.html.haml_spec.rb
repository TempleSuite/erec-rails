require 'rails_helper'

RSpec.describe "admin/facilities/show", type: :view do
  before(:each) do
    @admin_facility = assign(:admin_facility, Admin::Facility.create!())
  end

  it "renders attributes in <p>" do
    render
  end
end
