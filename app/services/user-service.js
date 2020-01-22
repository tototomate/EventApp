let request = new XMLHttpRequest();

let object;

request.addEventListener("load", function reqListener(){
    object = JSON.parse(this.responseText);
});
request.open("GET", "services/user-service.php");
request.send();

app.service("userService",function(Event,$timeout){
    (function reload(){
        $timeout(reload,2000);
    })();

    this.profileSrc = "images/sample_pic.jpg";

    this.profileName= object['username'];
    this.eventcount= object['eventsCount'];
    this.followers = object['followers'];
    this.following = object['abos'];
    this.events=[new Event(object['events[1]'], object['events[2]'], object['events[3]'], object['events[4]'])];

});