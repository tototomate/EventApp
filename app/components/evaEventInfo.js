"use strict";

app.component("evaEventInfo", {
    templateUrl: "components/evaEventInfo.html",
    controller: "evaEventInfoController",
    bindings: {
        title: '@'
    }
});

app.controller("evaEventInfoController", function () {
    this.eventInfo = "Lorem Ipsum ipsum lorenz";
});