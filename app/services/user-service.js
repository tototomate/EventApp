app.service("userService",function(Event,$timeout){
    (function reload(){
        $timeout(reload,2000);
    })();
    this.profileSrc = "images/sample_pic.jpg";
    this.profileName= "triff.";
    this.eventcount= 4;
    this.followers = 765;
    this.following = 672;
    this.profileBio = "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.";
    this.events=[new Event("Notorious","Wien","13.12.2019","Alkohol, Musik und coole Leute!!!"),
        new Event("NasichaEvents","Wien","20.10.2019","Na sicher!"),
        new Event("Plastikmüll","Unterolberndorf","4.1.2020","Plastik überall."),
        new Event("Weihnachten","Unterolberndorf","24.12.2019","Hohoho... der Weihnachtsmann kommt auch dieses Jahr zu Ihnen. Freuen Sie sich auf viele Geschenke und eine schönen Zeit mit der Familie.")];
});