$(document).ready(function () {
    var endMessage=setInterval(function(){
        $('#message').slideUp();
        clearInterval(endMessage);
    },8000);
});