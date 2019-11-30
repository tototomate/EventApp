"use strict";

app.component("evaEventInfo", {
    templateUrl: "components/trendingEventTab/eva-event-info.html",
    controller: "InfoController",
    bindings: {
        title: '@'
    }
});

app.controller("InfoController", function () {
    this.infoValue = () =>{
        this.infovalue = !this.infovalue;
    }
});