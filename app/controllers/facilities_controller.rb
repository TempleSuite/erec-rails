class FacilitiesController < ApplicationController
  before_filter :find_facilities, only: :show

  def index
  #  @facility = Facility.all
  end

  def show
  end

  private

  def find_facilities
 #   @facility = Facility.find(params[:id])
  end
end
