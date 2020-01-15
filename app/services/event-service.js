
    let getEvent = "";

    let requestEvents = new XMLHttpRequest();

    requestEvents.addEventListener("load", function reqListener() {
        getEvent = this.responseText;
        console.log(getEvent);
        getEvent = JSON.parse(getEvent);
        console.log(getEvent);
    });

    requestEvents.open("GET", "services/event-service.php");
    requestEvents.send();



app.service("eventService", function (Event) {

    this.events = [];


    for (let i = 0; i < getEvent.length; i++) {
        this.events.push(new Event("app/images/event-temp.jpg", getEvent[i].name, getEvent[i].description, getEvent[i].location, getEvent[i].date, getEvent[i].category));
    }

    /*this.events = [new Event("app/images/event-temp.jpg","Notorious","Alkohol, Musik und coole Leute!!!","Wien","13.12.2019","Clubbing"),
                   new Event("app/images/event-temp.jpg","Na sicher!","NasichaEvents","Wien","20.10.2019","Clubbing"),
                   new Event("app/images/event-temp.jpg","Plastikmüll","Plastik überall.","Unterolberndorf","4.1.2020","Party"),
                   new Event("app/images/event-temp.jpg","Weihnachten","Hohoho... der Weihnachtsmann kommt auch dieses Jahr zu Ihnen. Freuen Sie sich auf viele Geschenke und eine schönen Zeit mit der Familie.","Unterolberndorf","24.12.2019","Party")];
 */
});