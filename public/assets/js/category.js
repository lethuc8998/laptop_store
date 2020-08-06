$(document).ready(function () {
    var endMessage=setInterval(function(){
        $('#category').slideUp();
        clearInterval(endMessage);
    },8000);
});