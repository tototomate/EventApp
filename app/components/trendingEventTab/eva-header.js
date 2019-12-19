app.component("evaHeader",{
    templateUrl: "components/trendingEventTab/eva-header.html",
    controller: "HeaderController",
    bindings:{

    }


});

app.controller("HeaderController",function($scope){
    $scope.filteroption = ["Events","Benutzer"];

    $scope.change = function ($event,category) {
        let previous = document.querySelector(".focus-opt");
        angular.element(previous).removeClass("focus-opt");
        angular.element($event.currentTarget).addClass('focus-opt');

        let transmitCategory = category;

    };

});

