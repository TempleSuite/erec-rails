require 'rails_helper'

RSpec.describe "admin/facilities/index", type: :view do
  before(:each) do
    assign(:admin_facilities, [
      Admin::Facility.create!(),
      Admin::Facility.create!()
    ])
  end

  it "renders a list of admin/facilities" do
    render
  end
end
