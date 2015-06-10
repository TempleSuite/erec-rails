require 'rails_helper'

RSpec.describe "admin/facilities/edit", type: :view do
  before(:each) do
    @admin_facility = assign(:admin_facility, Admin::Facility.create!())
  end

  it "renders the edit admin_facility form" do
    render

    assert_select "form[action=?][method=?]", admin_facility_path(@admin_facility), "post" do
    end
  end
end
