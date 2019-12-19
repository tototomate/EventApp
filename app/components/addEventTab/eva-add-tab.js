app.component("evaAddTab", {
    templateUrl: "components/addEventTab/eva-add-tab.html",
    controller: "AddController",
    bindings: {

    }
});

app.controller("AddController", function ($scope,eventService) {

    /*$scope.event = {};
*/
    $scope.addEvent = function() {
        alert('triiger');

        let event_title = document.getElementsByName('event-title').value;
        let event_img = document.getElementById('fileupload').value;
        let event_desc = document.getElementsByName('event-desc').value;
        let event_location = document.getElementsByName('event_location').value;
        let event_date = document.getElementsByName('event_date').value;

        eventService.events.push(new Event(event_title,event_location,event_date,event_desc));
    };

   /* $scope.showPublicOptions = true;
    $scope.showPrivateOptions = false;
    $scope.showExclusiveOptions = false;

    $scope.changeOptions = function ($publicityOption) {
        if($publicityOption === 0) {
            $scope.showPublicOptions = false;
        } else if($publicityOption === 1) {
            $scope.showPrivateOptions = false;
        } else if($publicityOption === 2) {
            $scope.showExclusiveOptions = false;
        }
    }*/
});