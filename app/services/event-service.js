
    let getEvent = "";

    let requestEvents = new XMLHttpRequest();


    requestEvents.addEventListener("load", function reqListener() {
        getEvent = this.responseText;
        //console.log(getEvent);
        getEvent = JSON.parse(getEvent);
        //console.log(getEvent);
    });

    requestEvents.open("GET", "services/event-service.php");
    requestEvents.send();



app.service("eventService", function (Event) {

    this.events = [];


   for (let i = 0; i < getEvent.length; i++) {
        this.events.push(new Event("app/images/event-temp.jpg", getEvent[i].name, getEvent[i].description, getEvent[i].location, getEvent[i].date, getEvent[i].category));
    }
});