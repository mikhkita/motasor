$(document).ready(function(){
    function resize(){
       if( typeof( window.innerWidth ) == 'number' ) {
            myWidth = window.innerWidth;
            myHeight = window.innerHeight;
        } else if( document.documentElement && ( document.documentElement.clientWidth || 
        document.documentElement.clientHeight ) ) {
            myWidth = document.documentElement.clientWidth;
            myHeight = document.documentElement.clientHeight;
        } else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
            myWidth = document.body.clientWidth;
            myHeight = document.body.clientHeight;
        }
        // if(myWidth < 1170){
        //     if(!$(".b-news-days-right-tablet .b-news-days-right").length){
        //         $(".b-news-days-right-tablet").append($(".b-news-days .b-about-top-right"));
        //     }
        // }else{
        //     if(!$(".b-news-days .b-news-days-right").length){
        //         $(".b-news-days").append($(".b-news-days-right-tablet .b-about-top-right"));
        //     }
        // }
    }
    $(window).resize(resize);
    resize();

    $.fn.placeholder = function() {
        if(typeof document.createElement("input").placeholder == 'undefined') {
            $('[placeholder]').focus(function() {
                var input = $(this);
                if (input.val() == input.attr('placeholder')) {
                    input.val('');
                    input.removeClass('placeholder');
                }
            }).blur(function() {
                var input = $(this);
                if (input.val() == '' || input.val() == input.attr('placeholder')) {
                    input.addClass('placeholder');
                    input.val(input.attr('placeholder'));
                }
            }).blur().parents('form').submit(function() {
                $(this).find('[placeholder]').each(function() {
                    var input = $(this);
                    if (input.val() == input.attr('placeholder')) {
                        input.val('');
                    }
                });
            });
        }
    }
    $.fn.placeholder();

    $(".b-main-slider").slick({
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        cssEase: 'ease', 
        speed: 500,
        arrows: true,
        prevArrow: '<div class="slick-prev slick-arrow"><div class="icon-arrow-left"></div></div>',
        nextArrow: '<div class="slick-next slick-arrow"><div class="icon-arrow-right"></div></div>',
    });

    $(".b-answer").each(function () {
        $(this).slideUp(0);
    });

    $(".b-open-answer").click(function () {
        var $block = $(this).parent().find(".b-answer");
        $block.slideToggle(500);
        return false;
    });

    $(document).on("input change", ".b-input input", function(){
        if($(this).val() !== ""){
            $(this).parent().children(".icon-clear").addClass("show");
        }else{
            $(this).parent().children(".icon-clear").removeClass("show");
        }
    });

    $(document).on("click", ".b-input .icon-clear", function(){
        $(this).parent().children("input").val("").change();
        $(this).removeClass("show");
    });

    $(document).on("input", ".divide", function(){
        var value = $(this).val();
        $(this).val(String(value).replace(/[^0-9.]/g,'').replace(/(\d)(?=(\d{3})+([^\d]|$))/g, '$1 '));
    });

    // // Первая анимация элементов в слайде
    // $(".b-step-slide[data-slick-index='0'] .slider-anim").addClass("show");

    // // Кастомные переключатели (тумблеры)
    // $(".b-step-slider").on('beforeChange', function(event, slick, currentSlide, nextSlide){
    //     $(".b-step-tabs li.active").removeClass("active");
    //     $(".b-step-tabs li").eq(nextSlide).addClass("active");
    // });

    // // Анимация элементов в слайде
    // $(".b-step-slider").on('afterChange', function(event, slick, currentSlide, nextSlide){
    //     $(".b-step-slide .slider-anim").removeClass("show");
    //     $(".b-step-slide[data-slick-index='"+currentSlide+"'] .slider-anim").addClass("show");
    // });


    
	// var myPlace = new google.maps.LatLng(55.754407, 37.625151);
 //    var myOptions = {
 //        zoom: 16,
 //        center: myPlace,
 //        mapTypeId: google.maps.MapTypeId.ROADMAP,
 //        disableDefaultUI: true,
 //        scrollwheel: false,
 //        zoomControl: true
 //    }
 //    var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions); 

 //    var marker = new google.maps.Marker({
	//     position: myPlace,
	//     map: map,
	//     title: "Ярмарка вакансий и стажировок"
	// });

});