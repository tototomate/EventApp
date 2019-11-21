"use strict";

app.component("evaEventTab", {
    templateUrl: "components/evaEventTab.html",
    controller: "eventEventController",
    bindings: {

    }
});

app.controller("eventEventController", function ($scope) {
    $scope.veranstalter = ["Notorious",
        "prestige",
        "A.M.O",
        "Dirtytainment"];
});