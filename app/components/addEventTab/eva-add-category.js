app.component("evaAddCategory", {
    templateUrl: "components/addEventTab/eva-add-category.html",
    controller: "AddCategoryController",
    bindings: {

    }
});

app.controller("AddCategoryController", function ($scope,eventService) {
    $scope.eventCategory = '';

    $scope.saveData = function () {
        uploadedData = document.getElementById('input-field').value;

        if(uploadedData !== "") {
            eventCategory = uploadedData;
        } else {
            eventCategory = 'Clubbing';
        }

        console.log(eventCategory);
    };

    /*$scope.previousInput = uploadedData;*/
});