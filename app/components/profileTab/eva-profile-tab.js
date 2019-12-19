"use strict";

app.component("evaProfileTab", {
    templateUrl: "components/profileTab/eva-profile-tab.html",
    controller: "ProfileController",
    bindings: {}
});


app.controller("ProfileController", function ($log, $scope, DialogService, userService) {
    $log.debug("ProfileController");
    $scope.profileSrc = () => {
        return userService.profileSrc;
    };
    $scope.profileName = () => {
        return userService.profileName;
    };
    $scope.eventcount = () => {
    return userService.eventcount;
    };

    $scope.followers = () => {
        return userService.followers;
    };
    $scope.following = () => {
        return userService.following;
    };
    $scope.profileBio = () => {
        return userService.profileBio;
    };
    $scope.events = () =>{
        return userService.events;
    };


    $scope.changeProfileSettings = function () {
        DialogService.show("eva-profile-edit").then(changes => {

        });
    }
});