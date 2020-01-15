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
       .when('/evaAddTabStart', {
           templateUrl : 'components/addEventTab/eva-add-tab-start.html',
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
       }).when('/evaAddPic', {
           templateUrl : 'components/addEventTab/eva-add-pic.html',
           controller  : "AddPicController"
       }).when('/evaAddTitle', {
           templateUrl : 'components/addEventTab/eva-add-title.html',
           controller  : "AddTitleController"
       }).when('/evaAddDesc', {
           templateUrl : 'components/addEventTab/eva-add-desc.html',
           controller  : "AddDescController"
       }).when('/evaAddLocation', {
           templateUrl : 'components/addEventTab/eva-add-location.html',
           controller  : "AddLocationController"
               }).when('/evaAddCategory', {
           templateUrl : 'components/addEventTab/eva-add-category.html',
           controller  : "AddCategoryController"
       }).when('/evaAddDate', {
           templateUrl : 'components/addEventTab/eva-add-date.html',
           controller  : "AddDateController"
       }).when('/evaAddTabFinish', {
           templateUrl : 'components/addEventTab/eva-add-tab-finish.html',
           controller  : "FinishAddController"
       }).when('/evaAddTabStart', {
           templateUrl : 'components/addEventTab/eva-add-tab-start.html',
           controller  : "StartAddController"
       }).otherwise({
            redirectTo: "/evaEventTab",
            controller  : "ProfileController"
   });
});
