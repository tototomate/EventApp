"use strict";

app.component("evaMain", {
    templateUrl: "components/eva-main-component.html",
    controller: "EvaMainController",
    bindings: {}
});

app.controller("EvaMainController", function ($scope) {
    $scope.message = 'Everyone come and see how good I look!';
});

app.controller("EvaMainController", function ($scope) {
    $scope.message = 'Everyone come and see how good I look!';
});

app.controller("ProfileController", function ($scope) {
    $scope.message = 'Look! Im the about page.';
});


app.config(function($routeProvider) {
   $routeProvider
       .when('/evaAddTab', {
           templateUrl : 'components/evaAddTab.html',
           controller  : "page"
       }).when('/evaMapTab', {
           templateUrl : 'components/evaMapTab.html',
           controller  : "page"
       }).when('/evaEventTab', {
           templateUrl : 'components/evaEventTab.html',
           controller  : "page"
       }).when('/evaProfileTab', {
           templateUrl : 'components/eva-profile-tab.html',
           controller  : "ProfileController"
       });
});
