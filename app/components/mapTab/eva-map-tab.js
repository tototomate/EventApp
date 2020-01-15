"use strict";

app.component("evaMapTab", {
    templateUrl: "components/mapTab/eva-map-tab.html",
    controller: "MapController",
    bindings: {}
});

app.controller("MapController", function ($scope) {
    /*  this.$onInit = () =>{
          initialze();
      }

      function initialze() {
          var cities = [
              {
                  place: 'Vienna',
                  desc: '',
                  lat: 48.210033,
                  long: 16.363449
              },
              {
                  place: 'Hirschtetten',
                  desc: '',
                  lat: 48.2514,
                  long: 16.4773
              }
          ];


          var mapOptions = {
              zoom: 8,
              center: new google.maps.LatLng(48, 16),
              mapTypeId: google.maps.MapTypeId.ROADMAP
          }

          $scope.map = new google.maps.Map(document.getElementById('map'), mapOptions);

          $scope.markers = [];

          var infoWindow = new google.maps.InfoWindow();

          var createMarker = function (info) {

              var marker = new google.maps.Marker({
                  map: $scope.map,
                  position: new google.maps.LatLng(info.lat, info.long),
                  title: info.place
              });
              marker.content = '<div class="infoWindowContent">' + info.desc + '<br />' + info.lat + ' E,' + info.long + ' N, </div>';

              google.maps.event.addListener(marker, 'click', function () {
                  infoWindow.setContent('<h2>' + marker.title + '</h2>' +
                      marker.content);
                  infoWindow.open($scope.map, marker);
              });

              $scope.markers.push(marker);

          }

          for (let i = 0; i < cities.length; i++) {
              createMarker(cities[i]);
          }


          $scope.openInfoWindow = function (e, selectedMarker) {
              e.preventDefault();
              google.maps.event.trigger(selectedMarker, 'click');
          }
      }
      function getLocation() {
          if (navigator.geolocation) {
              navigator.geolocation.getCurrentPosition(showPosition);
          } else {
             return "Geolocation is not supported by this browser.";
          }
      }

      function showPosition(position) {

      }


  */



});


