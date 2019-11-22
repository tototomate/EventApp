"use strict";

app.component("evaProfileTab",{
    templateUrl:"components/profileTab/eva-profile-tab.html",
    controller:"ProfileController",
    bindings:{

    }
});


app.controller("ProfileController", function($scope){
    $scope.profileSrc = "images/logo-eva-4.png";
    $scope.profileName= "triff.";
    $scope.eventcount= 4;
    $scope.followers = 765;
    $scope.following = 672;
    $scope.profileBio = "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.";
    $scope.events=["Notorious",
        "prestige","Moritzevent","Fabianevent"];
    /*Alle erstellten Events aufgelistet*/
    /*$scope.events*/
});