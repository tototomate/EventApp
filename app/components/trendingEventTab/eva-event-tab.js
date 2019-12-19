"use strict";

app.component("evaEventTab", {
    templateUrl: "components/trendingEventTab/eva-event-tab.html",
    controller: "EventController",
    bindings: {
        event: '<'
    }
});

app.controller("EventController", function ($scope,eventService,usersService,$log) {
    $log.debug("EventController");
    $scope.veranstalter = ()=>{
        return eventService.events;
    };
    $scope.users = () =>{

        return usersService.users;
    };
    $scope.events = () =>{
        return eventService.events;
    }
});