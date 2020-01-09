app.component("evaAddPic", {
    templateUrl: "components/addEventTab/eva-add-pic.html",
    controller: "AddPicController",
    bindings: {
    }
});

app.controller("AddPicController", function ($scope,eventService,$log) {

    $scope.imageSrc = '';

    $scope.saveData = function () {
        uploadedData = document.getElementById('file-upload').value;

        if(uploadedData !== "") {
            imageSrc = uploadedData;
        } else {
            imageSrc = 'app/images/event-temp.jpg';
        }

        console.log(imageSrc);
    }
});