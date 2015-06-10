require "rails_helper"

RSpec.describe Admin::FacilitiesController, type: :routing do
  describe "routing" do

    it "routes to #index" do
      expect(:get => "/admin/facilities").to route_to("admin/facilities#index")
    end

    it "routes to #new" do
      expect(:get => "/admin/facilities/new").to route_to("admin/facilities#new")
    end

    it "routes to #show" do
      expect(:get => "/admin/facilities/1").to route_to("admin/facilities#show", :id => "1")
    end

    it "routes to #edit" do
      expect(:get => "/admin/facilities/1/edit").to route_to("admin/facilities#edit", :id => "1")
    end

    it "routes to #create" do
      expect(:post => "/admin/facilities").to route_to("admin/facilities#create")
    end

    it "routes to #update" do
      expect(:put => "/admin/facilities/1").to route_to("admin/facilities#update", :id => "1")
    end

    it "routes to #destroy" do
      expect(:delete => "/admin/facilities/1").to route_to("admin/facilities#destroy", :id => "1")
    end

  end
end
