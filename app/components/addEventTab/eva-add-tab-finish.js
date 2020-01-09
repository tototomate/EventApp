app.component("evaAddTabFinish", {
    templateUrl: "components/addEventTab/eva-add-tab-finish.html",
    controller: "FinishAddController",
    bindings: {
        imageSrc: '@',
        eventTitle: '@',
        eventDesc: '@',
        eventLocation: '@',
        eventDate: '@',
        eventCategory: '@'
    }
});

app.controller("FinishAddController", function ($scope,$log,eventService) {

    $scope.image = imageSrc;
    $scope.title = eventTitle;
    $scope.ev_description = eventDesc;
    $scope.ev_date = eventDate;
    $scope.location = eventLocation;
    $scope.category = eventCategory;

    $scope.createEvent = function () {

        let image = imageSrc;
        let title = eventTitle;
        let description = eventDesc;
        let date = eventDate;
        let location = eventLocation;
        let category = eventCategory;

       eventService.events.push(new Event(image,title,description,date,location,category));
    }
});