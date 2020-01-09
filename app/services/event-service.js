app.service("eventService",function(Event){

   this.events = [new Event("app/images/event-temp.jpg","Notorious","Alkohol, Musik und coole Leute!!!","Wien","13.12.2019","Clubbing"),
                  new Event("app/images/event-temp.jpg","Na sicher!","NasichaEvents","Wien","20.10.2019","Clubbing"),
                  new Event("app/images/event-temp.jpg","Plastikmüll","Plastik überall.","Unterolberndorf","4.1.2020","Party"),
                  new Event("app/images/event-temp.jpg","Weihnachten","Hohoho... der Weihnachtsmann kommt auch dieses Jahr zu Ihnen. Freuen Sie sich auf viele Geschenke und eine schönen Zeit mit der Familie.","Unterolberndorf","24.12.2019","Party")];
});