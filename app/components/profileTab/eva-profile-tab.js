"use strict";

app.component("evaProfileTab",{
    templateUrl:"components/profileTab/eva-profile-tab.html",
    controller:"ProfileController",
    bindings:{

    }
});


app.controller("ProfileController", function($scope){
    $scope.profileSrc = "images/logo-eva-4.png";
    $scope.profileName= "Eva-App";
    $scope.followers = 1224;
    $scope.following = 100;
    $scope.profileBio = "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.";
    $scope.achievments = ["images/achievements/achievement1.png",
                        "images/achievements/achievment2.jpg",
                        "images/achievements/achievment3.png",
                        "images/achievements/achievment4.png"];
});