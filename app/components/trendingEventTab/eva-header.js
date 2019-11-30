app.component("evaHeader",{
    templateUrl: "components/trendingEventTab/eva-header.html",
    controller: "HeaderController",
    bindings:{

    }

});

app.controller("HeaderController",function(){
    this.eventfilter = () =>{
        if(this.filter1==="Events"){
            return true;
        }
    }
    this.filteroption = ["Events","Benutzer"];
    this.eventfilteroptions = ["Datum", "Beliebtheit", "Distanz", "Musikgenre", "Preis"];
    this.furtherfilter = () =>{
        return (this.filter1)?"Events":"";
    }
});