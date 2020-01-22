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

    this.follow = (username) => {

        let formData = new FormData();
        formData.append("username", username);

        event.preventDefault();

        request.addEventListener("load", function reqListener(){
            console.log(this.responseText);
        });
        request.open("POST", "components/trendingEventTab/eva-profile-info.php");
        request.send(formData);
    }
});


