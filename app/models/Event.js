app.factory("Event",function(){

    function Event(image,name,description,location,date,category, likes){
        this.image = image;
        this.name = name;
        this.description = description;
        this.location = location;
        this.date = date;
        this.category = category;
        this.likes = likes;
    }

    this.getName = ()=>{
        return this.name;
    };

    return Event;
});