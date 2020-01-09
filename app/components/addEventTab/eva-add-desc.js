app.component("evaAddDesc", {
    templateUrl: "components/addEventTab/eva-add-desc.html",
    controller: "AddDescController",
    bindings: {

    }
});

app.controller("AddDescController", function ($scope,eventService) {
    $scope.eventDesc = '';

    $scope.saveData = function () {
        uploadedData = document.getElementById('input-field').value;

        if(uploadedData !== "") {
            eventDesc = uploadedData;
        } else {
            eventDesc = 'No description added';
        }

        console.log(eventDesc);
    };

   /* $scope.previousInput = uploadedData;*/
});