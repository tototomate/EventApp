"use strict";

app.component("evaEventTab", {
    templateUrl: "components/trendingEventTab/eva-event-tab.html",
    controller: "EventController",
    bindings: {

    }
});

app.controller("EventController", function ($scope) {
    $scope.veranstalter = ["Notorious",
        "prestige","Moritzevent","Fabianevent","Cooles Event"];

    $scope.user = class {
        constructor(profile_pic,name,events_created, fans, abos) {
            this.profile_pic = profile_pic;
            this.name = name;
            this.events_created = events_created;
            this.fans = fans;
            this.abos = abos;
        }

        getProfilePic() {
            return this.profile_pic;
        };

        getName() {
            return this.name;
        };

        getEventsCreated() {
            return this.events_created;
        };

        getFans() {
            return this.fans;
        };

        getAbos() {
            return this.abos;
        };
    };


    $scope.userSearchResults = [
        new $scope.user("images/logo-eva-4.png","the don","31","5000","324"),
        new $scope.user("images/logo-eva-4.png","the real Dagobert Duck","9","4251","2000"),
        new $scope.user("images/logo-eva-4.png","the OG Simpson","15","4112","500"),
        new $scope.user("images/logo-eva-4.png","the OG Simpson","15","4112","500")
    ];


});
