"use strict";

app.component("evaProfileInfo", {
    templateUrl: "components/trendingEventTab/eva-profile-info.html",
    controller: "ProfileInfoController",
    bindings: {
        u_name: '@',
        u_img: '@',
        u_events_created: '@',
        u_fans: '@',
        u_abos: '@'
    }
});

app.controller("ProfileInfoController", function ($scope) {

});


