$(document).ready(function () {
    console.log("connect");
    var endMessage=setInterval(function(){
        $('#message').slideUp();
        clearInterval(endMessage);
    },3000);
});