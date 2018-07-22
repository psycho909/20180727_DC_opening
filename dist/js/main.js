var toggle=true;
$('.nav-button').on('click',function(){
    var liHeight=($('.nav-box li').outerHeight(true))*($('.nav-box li').length);
    if(toggle){
        $('.nav-box').css('height',liHeight+'px')
        toggle=false;
        console.log(1)
    }else{
        $('.nav-box').css('height',0+'px')
        toggle=true;
        console.log(2)
    }
})
$(window).resize(function(){
    if($(window).width() >= 768){
        $('.nav-box').css('height','auto')
    }else{
        $('.nav-box').css('height','0')
        toggle=true
    }
})
$('#select-page').on('change',function(){
    var data=$(this).val();
    location.href=data;
    console.log(data)
})
var swiper = new Swiper('.swiper-container', {
    loop: true,
    grabCursor: true,
    slidesPerView: 4,
    spaceBetween: 30,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        1024: {
            slidesPerView: 4,
            spaceBetween: 30,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        414: {
            slidesPerView: 1,
            spaceBetween: 10,
        }
    }
});