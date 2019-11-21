"use strict";

app.component("evaEventTab", {
    templateUrl: "components/trendingEventTab/eva-event-tab.html",
    controller: "EventController",
    bindings: {

    }
});

app.controller("EventController", function ($scope) {
    $scope.veranstalter = ["Notorious",
        "prestige",
        "A.M.O",
        "Dirtytainment"];
});