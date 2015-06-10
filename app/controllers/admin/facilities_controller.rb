class Admin::FacilitiesController < ApplicationController
  before_action :set_facility, only: [:show, :edit, :update, :destroy]

  # GET /admin/facilities
  # GET /admin/facilities.json
  def index
    @facilities = Facility.all
  end

  # GET /admin/facilities/1
  # GET /admin/facilities/1.json
  def show
  end

  # GET /admin/facilities/new
  def new
    @facility = Facility.new
  end

  # GET /admin/facilities/1/edit
  def edit
  end

  # POST /admin/facilities
  # POST /admin/facilities.json
  def create
    @facility = Facility.new(facility_params)

    respond_to do |format|
      if @facility.save
        format.html { redirect_to [:admin, @facility], notice: 'Facility was successfully created.' }
        format.json { render :show, status: :created, location: [:admin, @facility] }
      else
        format.html { render :new }
        format.json { render json: @facility.errors, status: :unprocessable_entity }
      end
    end
  end

  # PATCH/PUT /admin/facilities/1
  # PATCH/PUT /admin/facilities/1.json
  def update
    respond_to do |format|
      if @facility.update(facility_params)
        format.html { redirect_to [:admin, @facility], notice: 'Facility was successfully updated.' }
        format.json { render :show, status: :ok, location: [:admin, @facility] }
      else
        format.html { render :edit }
        format.json { render json: @facility.errors, status: :unprocessable_entity }
      end
    end
  end

  # DELETE /admin/facilities/1
  # DELETE /admin/facilities/1.json
  def destroy
    @facility.destroy
    respond_to do |format|
      format.html { redirect_to admin_facilities_url, notice: 'Facility was successfully destroyed.' }
      format.json { head :no_content }
    end
  end

  private
    # Use callbacks to share common setup or constraints between actions.
    def set_facility
      @facility = Facility.find(params[:id])
    end

    # Never trust parameters from the scary internet, only allow the white list through.
    def facility_params
      params.require(:facility).permit(:name)
    end
end
