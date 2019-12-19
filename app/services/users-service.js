app.service("usersService",function(User){
    this.users = [
        new User("Moritz","images/sample_pic.jpg",4,22,2),
        new User("Fabian","images/sample_pic.jpg",4,234,2),
        new User("Fabian","images/sample_pic.jpg",4,234,2)
    ];
});