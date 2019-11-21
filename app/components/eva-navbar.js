"use strict";

app.component("evaNavbar", {
    templateUrl: "components/eva-navbar.html",
    controller: "NavbarController",
    bindings: {}
});

app.controller("NavbarController", function () {
    this.change = function ($event) {
        var previous = document.querySelector(".focus");
        angular.element(previous).removeClass("focus");
        angular.element($event.currentTarget).addClass('focus');
    };
});
/*app.config(function ($routeProvider) {
    $routeProvider
        .when('/eventAdd', {
            templateUrl : 'components/about.html',
            pageTitle :"About",
            controller  : "page"
        })
        .when('/eventMap', {
            templateUrl : 'components/about.html',
            pageTitle :"About",
            controller  : "page"
        })
        .when('/eventTrend', {
            templateUrl : 'components/about.html',
            pageTitle :"About",
            controller  : "page"
        })
        .when('/eventProfile', {
            templateUrl : 'components/eva-profile-tab.html',
            pageTitle :"Profile",
            controller  : "ProfileController"
        });
});

app.run(['$location', '$rootScope', function($location, $rootScope) {

    $rootScope.$on('$routeChangeSuccess', function (event, current, previous)
    {
        $rootScope.title = current.$$route.pageTitle;
    });
}]);

app.controller("page",function ($scope, $location)
{
    //page is loaded
});

app.controller("EvaNavbarController",function ($scope, $location)
{
    //Navigational Controller
    $scope.isActive = function (viewLocation) {
        return viewLocation === $location.path();
    };
});*/