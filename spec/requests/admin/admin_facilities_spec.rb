require 'rails_helper'

RSpec.describe "Admin::Facilities", type: :request do
  describe "GET /admin_facilities" do
    it "works! (now write some real specs)" do
      get admin_facilities_path
      expect(response).to have_http_status(200)
    end
  end
end
