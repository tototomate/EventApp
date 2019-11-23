app.component("evaHeader",{
    templateUrl: "components/trendingEventTab/eva-header.html",
    controller: "HeaderController",
    bindings:{

    }

});

app.controller("HeaderController",function(){
    this.filteroption = ["Events","Benutzer"];
});