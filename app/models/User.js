app.factory("User",function(){


    function User(name,img,events_created,fans,abos){

        this.name = name;
        this.img = img;
        this.events_created = events_created;
        this.fans = fans;
        this.abos = abos;
        this.getName = ()=>{
            return this.name;
        };
        this.getFans = ()=>{
            return this.fans;
        };
        this.getImg = ()=>{
            return this.img;
        };
        this.getEventsCreated = ()=>{
            return this.events_created;
        };
        this.getAbos = ()=>{
            return this.abos;
        };

    }


    return User;
});