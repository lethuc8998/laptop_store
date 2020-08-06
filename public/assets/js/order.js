$(document).ready(function () {
    var endMessage=setInterval(function(){
        $('#order').slideUp();
        clearInterval(endMessage);
    },8000);
});