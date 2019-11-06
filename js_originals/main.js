$(document).ready(function(){

    var isDesktop = false,
        isTablet = false,
        isMobile = false,
        isMobileSmall = false;

    function swapSliders(showSlider, hideSlider) {
        $(hideSlider).addClass("hide");
        $(showSlider).removeClass("hide");
        if($(hideSlider).hasClass("slick-initialized")){
            $(hideSlider).slick('unslick');
        }
        if(!$(showSlider).hasClass("slick-initialized")){
            $(showSlider).on('init', function(event, slick){
                $(showSlider).removeClass("slick-loading");
            });
            $(showSlider).slick({
                dots: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                cssEase: 'ease', 
                speed: 600,
                autoplay: true,
                autoplaySpeed: 3000,
                arrows: true,
                prevArrow: $(".b-main-slider").parent().find(".desktop-controls .slick-prev"),
                nextArrow: $(".b-main-slider").parent().find(".desktop-controls .slick-next"),
                responsive: [
                    {
                      breakpoint: 665,
                      settings: {
                        prevArrow: $(".b-main-slider").parent().find(".mobile-arrow-left"),
                        nextArrow: $(".b-main-slider").parent().find(".mobile-arrow-right"),
                        appendDots: $(".b-main-slider").parent().find(".mobile-dots"),
                      }
                    }
                ]
            });
        }
    }

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

        if( myWidth > 1024 ){
            isDesktop = true;
            isTablet = false;
            isMobile = false;
            isMobileSmall = false;
        }else if( myWidth > 767 ){
            isDesktop = false;
            isTablet = true;
            isMobile = false;
            isMobileSmall = false;
        }else{
            isDesktop = false;
            isTablet = false;
            isMobile = true;
            isMobileSmall = (myWidth <= 665);
        }

        $(".b-menu-mobile-window").css({"height": (myHeight - 82)+"px"});

        toggleTile();

        if(isMobile){
            swapSliders(".b-main-slider-mobile",".b-main-slider");
        }else{
            swapSliders(".b-main-slider",".b-main-slider-mobile");
        }

        if(isMobileSmall){
            $(".mobile-slider").each(function() {//поставить слайдеры
                if(!$(this).hasClass("slick-initialized")){
                    $(this).not('.slick-initialized').slick({
                        dots: true,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        cssEase: 'ease', 
                        speed: 600,
                        arrows: true,
                        prevArrow: $(this).parent().find(".mobile-arrow-left"),
                        nextArrow: $(this).parent().find(".mobile-arrow-right"),
                        appendDots: $(this).parent().find(".mobile-dots")
                    });
                    if($(this).parent().hasClass("b-news-days-list")){
                        var $slider = $(this);
                        $slider.on('beforeChange', function(event, slick, currentSlide, nextSlide){
                            var $current = $(slick.$slides.get(nextSlide));
                            if($current.hasClass("b-news-days-today")){
                                $current.closest(".b-news-days-list").find(".mobile-controls").addClass("white-controls");
                            }else{
                                $current.closest(".b-news-days-list").find(".mobile-controls").removeClass("white-controls");
                            }
                        });
                    }
                }
            });
        }else{
            $(".mobile-slider").each(function() {//удалить слайдеры
                if($(this).hasClass("slick-initialized")){
                    $(this).slick('unslick');
                }
            });
        }

        // newsDaysRightHeight();
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

    $(".b-answer").each(function () {
        $(this).slideUp(0);
    });

    $(".b-questions-item-ref").click(function () {
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

    $(document).on("change", ".select-experts", function(){
        var $block = $(this).find("option:selected").attr("data-block");
        $(".form-toggle-blocks").each( function(){
            $(this).addClass("hide");
            $(this).find("input, select, textarea").prop({"disabled": true})
        });
        $($block).removeClass("hide").find("input, select, textarea").prop({"disabled": false});
    });

    $('.b-nav > li > a, .b-nav > li > ul > li > a, .b-nav > li > ul > li > ul > li > a').hover(
        function(){
            $(this).addClass("hover");
            $(this).closest("ul").addClass("hover-children");
        },
        function(){
            $(this).removeClass("hover");
            $(this).closest("ul").removeClass("hover-children");
        }
    );

    $(document).on("click", ".b-btn-menu-desktop", function(){
        $(this).toggleClass("open");
        $(".b-header-menu-window").toggleClass("open");
    });
    $(document).on("click", ".b-btn-menu-mobile", function(){
        if(!$(this).hasClass("open")){//открываем
            // $("body, html").animate({scrollTop : 0}, 200);
            $(this).addClass("open");
            $(".b-menu-mobile-window").addClass("open");
            $("body").addClass("no-scroll");
        }else{//закрываем
            $(this).removeClass("open");
            $(".b-menu-mobile-window").removeClass("open");
            $("body").removeClass("no-scroll");
            $(".sub-section-slide, .sub-sub-section-slide").removeClass("open");
        }
    });

    $(document).on("click", ".b-menu-mobile-list a, .sub-section-slide a", function(){
        if($(this).siblings(".open-section").length > 0){//если есть вложенные секции
            var $section = $(this).siblings(".open-section"),
                depth = $section.attr("data-depth"),
                $items = $section.children("li"),
                $clone = $items.clone();
            if(depth == "1"){
                fillSection(".sub-section-slide", $(this).text(), $clone);
            }else{
                fillSection(".sub-sub-section-slide", $(this).text(), $clone);
            }
            return false;
        }
    });
    function fillSection($block, text, $items) {
        $($block).html("");
        $($block).append("<h4 class='mobile-window-back'>"+text+"</h4>");
        $($block).append("<ul></ul>");
        $($block).addClass("open").children("ul").append($items);
        $(".mobile-window-back").click(function(){
            $(this).parent().removeClass("open");
        });
    }
    // $(document).on("click", ".mobile-window-back", function(){
    //     $(this).parent().removeClass("open");
    // });

    $(document).on("click", ".b-header-show-more", function(){
        if(!$(".b-header-inner-right").hasClass("open")){
            $(".b-header-inner-right, .b-header-show-more").addClass("open");
        }else{
            $(".b-header-inner-right, .b-header-show-more").removeClass("open");
        }
    });

    var swipeh = new MobiSwipe("b-menu-mobile-window");
    swipeh.direction = swipeh.HORIZONTAL;
    swipeh.onswiperight = function(){
        if($(".sub-sub-section-slide").hasClass("open")){
            $(".sub-sub-section-slide").removeClass("open");
        }else{
            $(".sub-section-slide").removeClass("open");
        }
    };

    var calendarAjax;
    $(document).on("click", ".b-calendar-page-left .b-calendar a", function(){
        if(calendarAjax){
            calendarAjax.abort();
        }
        var $this = $(this);
        $(".b-calendar-page-left .b-calendar a").removeClass("selected");
        $this.addClass("selected");
        calendarAjax = $.ajax({
            type: "GET",
            url: "../send/getNewsByDate.php",
            data: "date="+$(this).attr("data-date"),
            success: function(data){
                var $html = $(data);

                var $title = $html.find("h2.b-title").html();
                $(".b-calendar-page-right h2").html($title);
                var $news = $html.find(".b-news-list").html();
                $(".b-calendar-page-right .b-news-list").html($news);
                var $nav = $html.find(".b-page-nav").html();
                $(".b-calendar-page-right .b-page-nav").html($nav);
            },
            complete: function(){
                calendarAjax = false;
            },
            error: function(){
                $this.removeClass("selected");
            },
        });
        return false;
    });
    
    // поиск в хедере
    $(document).on("click", ".b-header-search-btn", function(){
        setTimeout(function() {
            $(".b-header-search-input").focus();
        }, 100);
        $(".b-header-search").addClass("open");
        $(this).addClass("hide");
        $(".b-header-search-form button").removeClass("hide");
        return false;
    });
    $(document).on("submit", ".b-header-search-form", function(){
        var $input = $(this).find(".b-header-search-input");
        if(!$input.val()){
            $input.addClass("error").focus();
            return false;
        }
    });
    $(document).mouseup(function (e){
        var cont = $(".b-header-search");
        if (!cont.is(e.target) && cont.has(e.target).length === 0) {
            $(".b-header-search").removeClass("open");
            $(".b-header-search-btn").removeClass("hide");
            $(".b-header-search-form button").addClass("hide");
        }
    });
    $(document).on("input", ".b-footer-search-form .input-search, .b-header-search-input", function(){
        $(this).removeClass("error");
    });
    // поиск в футере
    $(document).on("submit", ".b-footer-search-form", function(){
        var $input = $(this).find(".input-search");
        if(!$input.val()){
            $input.addClass("error").focus();
            return false;
        }
    });

    $(window).scroll(function (){
        if($(this).scrollTop() > 0){
            $(".b-header-top").addClass("fixed");
        }else{
            $(".b-header-top").removeClass("fixed");
        }
        if($(this).scrollTop() > (+$(".b-header").outerHeight()) + (+$(".b-header-inner").outerHeight()) - (+$(".b-header-top").outerHeight())){
            $(".b-nav-mobile").addClass("open");
        }else{
            $(".b-nav-mobile").removeClass("open");
        }
    });

    $(document).on("click", ".b-nav-mobile .main-section a", function(){
        if($(".b-nav-mobile .items li").length > 0){//если есть вложенные секции
            if(!$(".b-nav-mobile").hasClass("visible-sub")){
                $(".b-nav-mobile").addClass("visible-sub");
            }else{
                $(".b-nav-mobile").removeClass("visible-sub");
            }
            return false;
        }
    });

    $(document).on("click", ".b-nav-mobile .items > li > a", function(){
        if($(this).siblings("ul").length > 0){//если есть вложенные секции
            if(!$(".b-nav-mobile").hasClass("visible-sub-sub")){
                $(".b-nav-mobile").addClass("visible-sub-sub");
            }else{
                $(".b-nav-mobile").removeClass("visible-sub-sub");
            }
            return false;
        }
    });

    $(".b-select-chosen select").chosen({
        width: "100%",
        disable_search_threshold: 10000
    });

    $('.b-select-chosen select').on('chosen:showing_dropdown', function(evt, params) {
        $(this).parents(".b-select").addClass("open");
    });
    $('.b-select-chosen select').on('chosen:hiding_dropdown', function(evt, params) {
        $(this).parents(".b-select").removeClass("open");
    });

    if( typeof autosize == "function" )
        autosize(document.querySelectorAll('textarea'));

    ripple.init();
    $('.b-btn').on('click touchstart', ripple.click);

    // $('.b-news-days-right-bottom').height($('.b-news-days-right').height() - $('.b-news-days-right-top').innerHeight());

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

    function toggleTile(){
        if (myWidth < 1170 && $('#top-cont').find('.b-news-days-right-top').length) {
            var html = $('#top-cont').html();
            $('#top-cont').html('');
            $('#bottom-cont').html(html);
        }

        if (myWidth >= 1170 && $('#bottom-cont').find('.b-news-days-right-top').length) {
            var html = $('#bottom-cont').html();
            $('#bottom-cont').html('');
            $('#top-cont').html(html);
        }
    }

});

var ripple = {
    click: function(event){

    var $this = $(this);

    var rippleColor = "";
    if($this.hasClass("b-btn-tr")){
        rippleColor = "#48569D";
    }else if($this.hasClass("b-btn-blue")){
        rippleColor = "#344182";
    }else{
        rippleColor = "#FFFFFF";
    }

    var $ripples = $this.find('.button-ripple_ripples'),
    btnOffset = $this.offset(),
    inputX = ( event.type === 'click' ) ? event.pageX : event.originalEvent.touches[0].pageX,
    inputY = ( event.type === 'click' ) ? event.pageY : event.originalEvent.touches[0].pageY,
    xPos = inputX - btnOffset.left,
    yPos = inputY - btnOffset.top;

    $ripples.append('<span class="button-ripple_ripple"></span>');

    var $ripple = $ripples.find('.button-ripple_ripple');

    $ripple.on(animationEnd, function(){ $(this).remove(); });

    $ripples[0].style.webkitTransform = 'translate3d(' + xPos + 'px,' + yPos + 'px,0)';
    $ripples[0].style.transform = 'translate3d(' + xPos + 'px,' + yPos + 'px,0)';

    $ripple.css({ backgroundColor: rippleColor });

    },
    init: function(){
        $('.b-btn .b-btn-content').wrapInner('<span class="button-ripple_content"></span>');
        $('.b-btn .b-btn-content').append('<div class="button-ripple_ripples"></div>')
    }
};

var animation = {
    // Determines proper transition property per browser
    whichAnimationEvent: function(){
        var t;
        var el = document.createElement('fakeelement');
        var transitions = {
            'OAnimation':'oanimationend',
            'MozAnimation':'animationend',
            'WebkitAnimation':'webkitAnimationEnd',
            'animation':'animationend'
        };
        for(t in transitions){
            if( el.style[t] !== undefined ){
                return transitions[t];
            }
        }
    }
};

var animationEnd = animation.whichAnimationEvent(); 

// window.onload = function(){

//     function newsDaysRightHeight(){

//         blockHeight = $('.b-news-days-right-top').outerHeight(true) + $('.b-news-days-right-bottom').outerHeight(true);

//         if (($('.b-news-days-list').outerHeight(true) > blockHeight) && myWidth > 1170 ) {
//             var height = $('.b-news-days-right-top').outerHeight(true);
//             $('.b-news-days-right-bottom').css('height', 'calc(100% - '+height+'px)');
//         }
//     }

//     newsDaysRightHeight();
// };


