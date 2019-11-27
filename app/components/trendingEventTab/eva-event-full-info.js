"use strict";

app.component("evaEventInfo", {
    templateUrl: "components/trendingEventTab/eva-event-full-info.html",
    controller: "InfoController",
    bindings: {
        title: '@'
    }
});

app.controller("FullInfoController", function () {
    this.eventInfo = "Lorem Ipsum ipsum lorenz";
});