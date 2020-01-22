let data = "";

let requestUser = new XMLHttpRequest();

requestUser.addEventListener("load", function reqListener() {
    data = this.responseText;
    console.log(data);
    data = JSON.parse(data);
    console.log(data);

});
requestUser.open("GET", "services/users-services.php");
requestUser.send();


app.service("usersService", function (User) {

    this.users = [];

        for (let i = 0; i < data['user'].length; i++) {
            this.users.push(new User(data['user'][i].username, "images/sample_pic.jpg",
                data['eventsCount'][i], data['followers'][i], data['abos'][i]));
        }

});