let usernames = "";

let requestUser = new XMLHttpRequest();

requestUser.addEventListener("load", function reqListener() {
    usernames = this.responseText;
    usernames = JSON.parse(usernames);
    console.log(usernames);

});
requestUser.open("GET", "services/user-services.php");
requestUser.send();


app.service("usersService", function (User) {

    this.users = [];

    for (let i = 0; i < usernames.length; i++) {
        this.users.push(new User(usernames[i].username, "images/sample_pic.jpg", 4, 22, 2));
    }

});