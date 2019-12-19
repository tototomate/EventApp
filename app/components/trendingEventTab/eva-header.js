app.component("evaHeader",{
    templateUrl: "components/trendingEventTab/eva-header.html",
    controller: "HeaderController",
    bindings:{

    }


});

app.controller("HeaderController",function(){
    this.filteroption = ["Events","Benutzer"];

    this.change = function ($event,category) {
        let previous = document.querySelector(".focus-opt");
        angular.element(previous).removeClass("focus-opt");
        angular.element($event.currentTarget).addClass('focus-opt');

        let transmitCategory = category;

    };

});

