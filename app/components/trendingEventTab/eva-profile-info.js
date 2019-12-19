"use strict";

app.component("evaProfileInfo", {
    templateUrl: "components/trendingEventTab/eva-profile-info.html",
    controller: "ProfileInfoController",
    bindings: {
        user: '<'

    }
});

app.controller("ProfileInfoController", function ($log,$scope) {
    $log.debug("ProfileInfoController");
    console.log(user);
});


