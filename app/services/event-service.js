app.service("eventService",function(Event){
   this.events = [new Event("Notorious","Wien","13.12.2019","Alkohol, Musik und coole Leute!!!"),
       new Event("NasichaEvents","Wien","20.10.2019","Na sicher!"),
       new Event("Plastikmüll","Unterolberndorf","4.1.2020","Plastik überall."),
       new Event("Weihnachten","Unterolberndorf","24.12.2019","Hohoho... der Weihnachtsmann kommt auch dieses Jahr zu Ihnen. Freuen Sie sich auf viele Geschenke und eine schönen Zeit mit der Familie.")];
});