$(document).ready(function () {
    var endMessage=setInterval(function(){
        $('#change-password').slideUp();
        clearInterval(endMessage);
    },3000);
});