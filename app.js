$('.humburger').click(function(){
    $(this).toggleClass('open'); 
    $(".sp_nav").toggleClass('open'); 
})

$(document).ready(function(){
    $('.gallery_slider').slick({
        dots: true,
        infinite: true,
        slidesToShow: 1,
        arrows:false,
        autoplay:true,
        fade:true
    });
})