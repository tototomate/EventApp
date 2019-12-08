"use strict";

app.component("evaMain", {
    templateUrl: "components/eva-main.html",
    controller: "MainController",
    bindings: {}
});

app.controller("MainController", function ($scope) {
    $scope.message = 'Everyone come and see how good I look!';
});


app.config(function($routeProvider) {
   $routeProvider
       .when('/evaAddTab', {
           templateUrl : 'components/addEventTab/eva-add-tab.html',
           controller  : "AddController"
       }).when('/evaMapTab', {
           templateUrl : 'components/mapTab/eva-map-tab.html',
           controller  : "MapController"
       }).when('/evaEventTab', {
           templateUrl : 'components/trendingEventTab/eva-event-tab.html',
           controller  : "EventController"
       }).when('/evaProfileTab', {
           templateUrl : 'components/profileTab/eva-profile-tab.html',
           controller  : "ProfileController"
       }).when('/evaEventFullInfo', {
            templateUrl : 'components/trendingEventTab/eva-event-full-info.html',
            controller  : "FullInfoController"
       }).otherwise({
            redirectTo: "/evaEventTab",
            controller  : "ProfileController"
   });
});
