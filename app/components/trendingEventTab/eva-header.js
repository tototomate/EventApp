app.component("evaHeader",{
    templateUrl: "components/trendingEventTab/eva-header.html",
    controller: "HeaderController",
    bindings:{

    }


});


let filter = 0;

app.controller("HeaderController",function($scope){
    $scope.filteroption = ["Events","Benutzer"];

    $scope.change = function ($event,category) {
        let previous = document.querySelector(".focus-opt");
        angular.element(previous).removeClass("focus-opt");
        angular.element($event.currentTarget).addClass('focus-opt');

        if(category === 0){
            $scope.eventsearch = false;
            filter = 0;


        }else{
            $scope.eventsearch = true;
            filter = 1;
        }

        let transmitCategory = category;

    };

});


function pressed(e) {
    if ((window.event ? event.keyCode : e.which) === 13) {

        let formData = new FormData();
        formData.append("filter", filter);
        formData.append("category", document.getElementById("category").value);
        formData.append("suchbegriff", document.getElementById("suchbegriff").value);

        let request = new XMLHttpRequest();

        event.preventDefault();

        request.addEventListener("load", function reqListener(){
            location.reload();
        });
        request.open("POST", "components/trendingEventTab/eva-header.php");
        request.send(formData);

    }
}