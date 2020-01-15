app.component("evaHeader",{
    templateUrl: "components/trendingEventTab/eva-header.html",
    controller: "HeaderController",
    bindings:{
        filter:'&'
    }


});

app.controller("HeaderController",function($scope){
    $scope.filteroption = ["Events","Benutzer"];

    $scope.changeFilter = ()=>{
        this.filter($scope.eventsearch);
    };
    $scope.change = function ($event,category) {
        let previous = document.querySelector(".focus-opt");
        angular.element(previous).removeClass("focus-opt");
        angular.element($event.currentTarget).addClass('focus-opt');

        if(category === 0){
            $scope.eventsearch = false;
            $scope.changeFilter();
            console.log("Trigger1");

        }else{
            $scope.eventsearch = true;
            $scope.changeFilter();
            console.log("Trigger1");
        }

        let transmitCategory = category;

    };

});

