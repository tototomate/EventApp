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

    this.visibleOnHover = false;

    this.infoValue = () =>{

        let focusedEvent = document.querySelector("event");
        element.scrollIntoView({ behavior: 'smooth', block: 'end'});

        console.log(this.event);
        console.log(this.event);
    }
});