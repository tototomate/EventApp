app.component("evaAddLocation", {
    templateUrl: "components/addEventTab/eva-add-location.html",
    controller: "AddLocationController",
    bindings: {

    }
});

app.controller("AddLocationController", function ($scope,$log,eventService) {
    $scope.eventLocation = '';

    $scope.saveData = function () {
        uploadedData = document.getElementById('input-field').value;

        if(uploadedData !== "") {
            eventLocation = uploadedData;
        } else {
            eventLocation = 'No location added';
        }

        console.log(eventLocation);
    }

   /* $scope.previousInput = uploadedData;*/
});