
      document.addEventListener('DOMContentLoaded', drawMap); 
      function drawMap() {
              var pgh = new google.maps.LatLng(40.462272, -79.92537449999999);

              // Initialize 
              var mapOptions = {
                center: new google.maps.LatLng(40.4621583, -79.9255002),
                zoom: 15,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                disableDefaultUI: true,
                scrollwheel: false
              };
              var map = new google.maps.Map(document.getElementById("map-canvas"),
                  mapOptions);

              // Set Markers
              var pgh_marker = new google.maps.Marker({
                  position: pgh,
                  map: map,
                  title:"111 N. Whitfield, Third Floor, Pittsburgh, PA 15206",
                      animation: google.maps.Animation.DROP,
              });
      }