app.component("evaAddDate", {
    templateUrl: "components/addEventTab/eva-add-date.html",
    controller: "AddDateController",
    bindings: {

    }
});

app.controller("AddDateController", function ($scope,$log,eventService) {
    $scope.eventDate = '';

    $scope.saveData = function () {
        uploadedData = document.getElementById('input-field').value;

        if(uploadedData !== "") {
            eventDate = uploadedData;
        } else {
            eventDate = Date.now();
        }

        console.log(eventDate);
    }

    /*$scope.previousInput = uploadedData;*/
});