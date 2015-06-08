$(document).ready(function() {
  var pagefunction = function() {
      /*jslint smarttabs:true */
    var colorful_style = [{
      "featureType" : "landscape",
      "stylers" : [{
        "visibility" : "off"
      }]
    }, {
      "featureType" : "transit",
      "stylers" : [{
        "visibility" : "off"
      }]
    }, {
      "featureType" : "poi.park",
      "elementType" : "labels",
      "stylers" : [{
        "visibility" : "off"
      }]
    }, {
      "featureType" : "poi.park",
      "elementType" : "geometry.fill",
      "stylers" : [{
        "color" : "#d3d3d3"
      }, {
        "visibility" : "on"
      }]
    }, {
      "featureType" : "road",
      "elementType" : "geometry.stroke",
      "stylers" : [{
        "visibility" : "off"
      }]
    }, {
      "featureType" : "landscape",
      "stylers" : [{
        "visibility" : "on"
      }, {
        "color" : "#b1bc39"
      }]
    }, {
      "featureType" : "landscape.man_made",
      "stylers" : [{
        "visibility" : "on"
      }, {
        "color" : "#ebad02"
      }]
    }, {
      "featureType" : "water",
      "elementType" : "geometry.fill",
      "stylers" : [{
        "visibility" : "on"
      }, {
        "color" : "#416d9f"
      }]
    }, {
      "featureType" : "road",
      "elementType" : "labels.text.fill",
      "stylers" : [{
        "visibility" : "on"
      }, {
        "color" : "#000000"
      }]
    }, {
      "featureType" : "road",
      "elementType" : "labels.text.stroke",
      "stylers" : [{
        "visibility" : "off"
      }, {
        "color" : "#ffffff"
      }]
    }, {
      "featureType" : "administrative",
      "elementType" : "labels.text.fill",
      "stylers" : [{
        "visibility" : "on"
      }, {
        "color" : "#000000"
      }]
    }, {
      "featureType" : "road",
      "elementType" : "geometry.fill",
      "stylers" : [{
        "visibility" : "on"
      }, {
        "color" : "#ffffff"
      }]
    }, {
      "featureType" : "road",
      "elementType" : "labels.icon",
      "stylers" : [{
        "visibility" : "off"
      }]
    }, {
      "featureType" : "water",
      "elementType" : "labels",
      "stylers" : [{
        "visibility" : "off"
      }]
    }, {
      "featureType" : "poi",
      "elementType" : "geometry.fill",
      "stylers" : [{
        "color" : "#ebad02"
      }]
    }, {
      "featureType" : "poi.park",
      "elementType" : "geometry.fill",
      "stylers" : [{
        "color" : "#8ca83c"
      }]
    }];

    // One color - Change the hue value for your desired color
    var mono_color_style = [{
      "stylers" : [{
        "hue" : "#ff00aa"
      }, {
        "saturation" : 1
      }, {
        "lightness" : 1
      }]
    }];

    /*
     * Google Maps Initialize
     */

      $this = $("#map_canvas");
      $zoom_level = ($this.data("gmap-zoom") || 11);
      $data_lat = ($this.data("gmap-lat") || 48.438644);
      $data_lng = ($this.data("gmap-lng") || -123.336072);
      $xml_src = ($this.data("gmap-src") || "xml/gmap/pins.xml");

      var colorfulStyleMap = new google.maps.StyledMapType(colorful_style, {
          name: "Colorful"
      });

      function xmlLoadMap() {
        var centerLatLng = new google.maps.LatLng($data_lat, $data_lng),
        mapOptions = {
            zoom: $zoom_level,
            center: centerLatLng,
            //disableDefaultUI: true,
            //mapTypeId : google.maps.MapTypeId.ROADMAP
            mapTypeControlOptions: {
                mapTypeIds: [google.maps.MapTypeId.TERRAIN, 'colorful_style', 'greyscale_style',
                    'monochrome_style', 'metro_style', 'nightvision_style', 'nightvision_highlight_style',
                    'old_paper_style', 'mono_color_style'
                ]
            }
        },

        bounds = new google.maps.LatLngBounds(),
        infowindow = new google.maps.InfoWindow(),
        map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);

        map.mapTypes.set('colorful_style', colorfulStyleMap);

        //map.setMapTypeId(google.maps.MapTypeId.TERRAIN);
        map.setMapTypeId('colorful_style');

        $.get($xml_src, function(data) {
          // create the Bounds object
          var bounds = new google.maps.LatLngBounds();
          $(data).find("marker").each(function(){

            var eachMarker = jQuery(this),
              // grab the address from XML
              theAddress = eachMarker.find("address").text(),
              mygc = new google.maps.Geocoder(theAddress);

            mygc.geocode({'address' : theAddress}, function(results, status) {

              var mLat = results[0].geometry.location.lat(),
                Long = results[0].geometry.location.lng(),

                marker = new google.maps.Marker({
                  position : new google.maps.LatLng(mLat, Long),
                  map : map,
                  icon : ('img/' + eachMarker.find("icons").text() + '.png'),
                  scrollwheel : false,
                  streetViewControl : true,
                  title : eachMarker.find("name").text()
                }),

                link = "link";

              google.maps.event.addListener(marker, 'click', function() {// click
                // Setting the content of the InfoWindow
                var contentString = '<div id="info-map" style="width:300px; height:85px; padding:0px;"><div>' + '<div style="display:inline-block; width:86px; verticle-align:top; float:left;"><img src=' + eachMarker.find("image").text() + ' class="thumbnail" style="width:80%; verticle-align:top;" /></div>' + '<div style="display:inline-block; width:200px; float:left;"><h4>' + eachMarker.find("name").text() + '</h4><b>' + eachMarker.find("address").text() + '</b><br/>' + '<p><a href="' + eachMarker.find("link").text() + '" class="btn btn-xs btn-default pull-right"><i class="fa fa-fw fa-map-marker"></i>More Info</a></p>' + '</div></div></div>';
                infowindow.setContent(contentString);
                infowindow.open(map, marker);

                google.maps.event.addListener(map, 'click', function() {
                  infowindow.close()
                })
              });
            });// end geocode
          });// end find marker loop
        }); // end get data

      } // end xmlLoadMap (closing ; added by Adrian Estergaard)

      xmlLoadMap();
  };

  // end pagefunction

  // run pagefunction on load

  $(window).unbind('gMapsLoaded');
  $(window).bind('gMapsLoaded', pagefunction);
  window.loadGoogleMaps();
});
