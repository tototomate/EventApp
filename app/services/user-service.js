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
    this.events=[];
});