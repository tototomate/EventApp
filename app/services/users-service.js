let usernames = "";

let request = new XMLHttpRequest();

request.addEventListener("load", function reqListener() {
    usernames = this.responseText;
    if (usernames.includes(",")) {
        usernames = usernames.split(",");
    }
    console.log(JSON.stringify(usernames));

});
request.open("GET", "services/user-services.php");
request.send();


app.service("usersService", function (User) {

    this.users = [];


    for (let i = 0; i < usernames.length; i++) {
        this.users.push(new User(usernames[i], "images/sample_pic.jpg", 4, 22, 2));
    }

});