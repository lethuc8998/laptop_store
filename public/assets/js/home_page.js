$(document).ready(function () {
    //console.log('connecthome');
    // nút next
    //console.log("hello");
    var thoi_gian_chay_slide = setInterval(function(){
            $('.vai-cai-nut .next').trigger('click');
    },10000)

    var endMessage=setInterval(function(){
        $('#change-password').slideUp();
        clearInterval(endMessage);
    },3000);
    
    $('.vai-cai-nut .next').click(function (e) { 
        e.preventDefault();
        //console.log('click');
        var sau_num =$('.vai-cai-nut .vai-dau-cham ul li.active-number').next();
        var sau=$('.vai-cai-slide .active-slide').next();
        if(sau.length==0){
            sau=$('.vai-cai-slide ._1_slide:nth-child(1)');
        }
        $('.active-slide').addClass('di-sang-trai').one('webkitAnimationEnd',function(){
            $('.di-sang-trai').removeClass('di-sang-trai');
        });
        sau.addClass('di-tu-phai-sang').one('webkitAnimationEnd',function(){
            $('.active-slide').removeClass('active-slide');
            $('.di-tu-phai-sang').addClass('active-slide');
           
            $('.di-tu-phai-sang').removeClass('di-tu-phai-sang');
        });

        // Xử lý background mấy con số hiển thị theo 
        if(sau_num.length==0){
            sau_num=$('.vai-cai-nut .vai-dau-cham ul li:nth-child(1)');
        }
        $('.vai-cai-nut .vai-dau-cham ul li.active-number').removeClass('active-number');
        sau_num.addClass('active-number');
       
    });


     // nút prev
     $('.vai-cai-nut .prev').click(function (e) { 
        e.preventDefault();
        //console.log('click');
        var truoc=$('.vai-cai-slide .active-slide').prev();
        var truoc_num =$('.vai-cai-nut .vai-dau-cham ul li.active-number').prev();
       
        if(truoc.length==0){
            truoc=$('.vai-cai-slide ._1_slide:nth-last-child(1)');
        }
        $('.active-slide').addClass('di-sang-phai').one('webkitAnimationEnd',function(){
           $('.di-sang-phai').removeClass('di-sang-phai');
        });
        truoc.addClass('di-tu-trai-sang').one('webkitAnimationEnd',function(){
            $('.active-slide').removeClass('active-slide');
          $('.di-tu-trai-sang').addClass('active-slide').removeClass('di-tu-trai-sang');
        });
         // Xử lý background mấy con số hiển thị theo 
         if(truoc_num.length==0){
            truoc_num=$('.vai-cai-nut .vai-dau-cham ul li:nth-last-child(1)');
        }
        $('.vai-cai-nut .vai-dau-cham ul li.active-number').removeClass('active-number');
        truoc_num.addClass('active-number');
    });
    // xử lý background mấy con số
    $('.vai-cai-nut .vai-dau-cham ul li').click(function (e) { 
        e.preventDefault();
        $('.vai-cai-nut .vai-dau-cham ul li.active-number').removeClass('active-number');
        $(this).addClass('active-number');

        num=$(this).index()+1;
        $('.active-slide').addClass('di-sang-trai').one('webkitAnimationEnd',function(){
            $('.di-sang-trai').removeClass('di-sang-trai');
        });
        $('.vai-cai-slide ._1_slide:nth-child('+num+')').addClass('di-tu-phai-sang').one('webkitAnimationEnd',function(){
            $('.active-slide').removeClass('active-slide');
            $('.di-tu-phai-sang').addClass('active-slide');
            $('.di-tu-phai-sang').removeClass('di-tu-phai-sang');
        });
        
    });
});