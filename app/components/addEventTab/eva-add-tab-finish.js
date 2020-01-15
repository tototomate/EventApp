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

app.controller("FinishAddController", function ($scope,$log,eventService, Event) {

    $scope.image = imageSrc;
    $scope.title = eventTitle;
    $scope.ev_description = eventDesc;
    $scope.ev_date = eventDate;
    $scope.location = eventLocation;
    $scope.category = eventCategory;

    $scope.createEvent = () =>{

        let image = imageSrc;
        let title = eventTitle;
        let description = eventDesc;
        let date = eventDate;
        let location = eventLocation;
        let category = eventCategory;

       eventService.events.push(new Event(image,title,description,date,location,category));


        let formData = new FormData();
        formData.append("image", image);
        formData.append("title", title);
        formData.append("description", description);
        formData.append("date", date);
        formData.append("location", location);
        formData.append("category", category);

        let request = new XMLHttpRequest();

        event.preventDefault();

        request.addEventListener("load", function reqListener(){
            console.log(this.responseText);
        });
        request.open("POST", "components/addEventTab/eva-add-tab-finish.php");
        request.send(formData);

    }
});