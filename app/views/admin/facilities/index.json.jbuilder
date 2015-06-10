json.array!(@admin_facilities) do |admin_facility|
  json.extract! admin_facility, :id
  json.url admin_facility_url(admin_facility, format: :json)
end
