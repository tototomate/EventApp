app.component("evaAddTitle", {
    templateUrl: "components/addEventTab/eva-add-title.html",
    controller: "AddTitleController",
    bindings: {
    }
});

app.controller("AddTitleController", function ($scope,eventService,$log) {

    $scope.eventTitle = '';

    $scope.saveData = function () {
        uploadedData = document.getElementById('input-field').value;

        if(uploadedData !== "") {
            eventTitle = uploadedData;
        } else {
            eventTitle = 'template';
        }

        console.log(eventTitle);
    }
   /* $scope.previousInput = uploadedData;*/
});