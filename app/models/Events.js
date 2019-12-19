app.factory("Event",function(){


    function Event(name,location,date,description){
        /*this.event_id = event_id;
        this.loc_id = loc_id;*/
        this.name = name;
        this.location = location;
        this.date = date;
        this.description = description;
    }
    this.getName = ()=>{
        return this.name;
    };


    return Event;
});