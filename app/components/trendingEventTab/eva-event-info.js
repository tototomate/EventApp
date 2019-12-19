"use strict";

app.component("evaEventInfo", {
    templateUrl: "components/trendingEventTab/eva-event-info.html",
    controller: "InfoController",
    bindings: {
        event: '<'
    }
});

app.controller("InfoController", function ($log) {
    $log.debug("InfoController");

    this.infoValue = () =>{

        console.log(this.event);
        console.log(this.event);
        console.log("Trigger");
        this.infovalue = !this.infovalue;
    }
});