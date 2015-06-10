require 'rails_helper'

RSpec.describe "admin/facilities/new", type: :view do
  before(:each) do
    assign(:admin_facility, Admin::Facility.new())
  end

  it "renders new admin_facility form" do
    render

    assert_select "form[action=?][method=?]", admin_facilities_path, "post" do
    end
  end
end
