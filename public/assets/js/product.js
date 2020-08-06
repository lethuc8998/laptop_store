$(document).ready(function () {
    var endMessage=setInterval(function(){
        $('#product').slideUp();
        clearInterval(endMessage);
    },8000);
});