app.component("evaProfileEdit", {
    templateUrl: "components/profileTab/eva-profile-edit.html",
    controller: "ProfileEditController",
    bindings: {
        description: '&'
    }
});

app.controller("ProfileEditController", function ($log, $scope, DialogService, userService) {
    $log.debug("ProfileEditController");
    this.save = () => {
        DialogService.submit();
    };
    this.cancel = () => {
        DialogService.cancel();
    };


    $scope.escape = (text) => {
        if (typeof text !== 'undefined') {
            return text.replace(/[^A-Za-z0-9\_]/, "\\$&");
        }


    };
    $scope.changePicture = () => {
        $scope.changePictureValue = true;
    };
    $scope.changeUsername = () => {
        $scope.changeUsernameValue = true;
    };
    $scope.changePassword = () => {
        $scope.changePasswordValue = true;
    };
    $scope.changeDescription = () => {
        $scope.changeDescriptionValue = true;
    };

    $scope.nochangePicture = () => {
        $scope.changePictureValue = false;
    };
    $scope.nochangeUsername = () => {
        $scope.changeUsernameValue = false;
    };
    $scope.nochangePassword = () => {
        $scope.changePasswordValue = false;
    };
    $scope.nochangeDescription = () => {
        $scope.changeDescriptionValue = false;
    };
    $scope.saveable = () => {
        return (this.changeUsernameValue || this.changePasswordValue || this.changePictureValue || this.changeDescriptionValue);
    };

    $scope.submitDescriptionForm = () => {
        /*console.log($scope.DescriptionForm.descriptionvalue);

         */
        userService.profileBio = $scope.DescriptionForm.descriptionvalue;
        $scope.changeDescriptionValue = false;
        $scope.DescriptionForm.descriptionvalue = "";

    };
    $scope.submitPasswordForm = () => {

        let formData = new FormData();
        formData.append("password", $scope.PasswordForm.password);

        let request = new XMLHttpRequest();

        event.preventDefault();

        request.addEventListener("load", function reqListener(){
            console.log(this.responseText)
        });
        request.open("POST", "components/profileTab/eva-profile-edit.php");
        request.send(formData);

    };
    $scope.submitTokenForm = () => {

        /* Backendzeugs */
    };
    $scope.submitUsernameForm = () => {

        let formData = new FormData();
        formData.append("username", $scope.UsernameForm.usernamevalue);

        let request = new XMLHttpRequest();

        event.preventDefault();

        request.addEventListener("load", function reqListener(){
            console.log(this.responseText)
        });
        request.open("POST", "components/profileTab/eva-profile-edit.php");
        request.send(formData);


        userService.profileName = $scope.UsernameForm.usernamevalue;
        $scope.changeUsernameValue = false;
        $scope.UsernameForm.usernamevalue = "";
    };
    $scope.submitPictureForm = () => {
        console.log($scope.PictureForm.dateivalue);
        userService.profileSrc = $scope.PictureForm.dateivalue;
        $scope.changePictureValue = false;
        $scope.PictureForm.dateivalue = "";
    }
});