$(document).ready(function(){

    var isDesktop = false,
        isTablet = false,
        isMobile = false,
        isMobileSmall = false;

    $('.b-main-slider').slick({
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        cssEase: 'ease', 
        speed: 600,
        autoplay: false,
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

    // function swapSliders(showSlider, hideSlider) {
    //     $(hideSlider).addClass("hide");
    //     $(showSlider).removeClass("hide");
    //     if($(hideSlider).hasClass("slick-initialized")){
    //         $(hideSlider).slick('unslick');
    //     }
    //     if(!$(showSlider).hasClass("slick-initialized")){
    //         $(showSlider).on('init', function(event, slick){
    //             $(showSlider).removeClass("slick-loading");
    //         });
    //         $(showSlider).slick({
    //             dots: true,
    //             slidesToShow: 1,
    //             slidesToScroll: 1,
    //             infinite: true,
    //             cssEase: 'ease', 
    //             speed: 600,
    //             autoplay: false,
    //             autoplaySpeed: 3000,
    //             arrows: true,
    //             prevArrow: $(".b-main-slider").parent().find(".desktop-controls .slick-prev"),
    //             nextArrow: $(".b-main-slider").parent().find(".desktop-controls .slick-next"),
    //             responsive: [
    //                 {
    //                   breakpoint: 665,
    //                   settings: {
    //                     prevArrow: $(".b-main-slider").parent().find(".mobile-arrow-left"),
    //                     nextArrow: $(".b-main-slider").parent().find(".mobile-arrow-right"),
    //                     appendDots: $(".b-main-slider").parent().find(".mobile-dots"),
    //                   }
    //                 }
    //             ]
    //         });
    //     }
    // }

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

        $('.datepicker-calendar').css({"height": "auto"});

        toggleTile();
        resizeSlider();

        // if(isMobile){
        //     swapSliders(".b-main-slider-mobile",".b-main-slider");
        // }else{
        //     swapSliders(".b-main-slider",".b-main-slider-mobile");
        // }

        if(isMobileSmall){
            if($(".b-employee-desktop .b-employee-text").length){
                $('.b-employee-mobile').append($(".b-employee-desktop .b-employee-text"));
            }
            $(".mobile-slider").each(function() {//поставить слайдеры
                if(!$(this).hasClass("slick-initialized")){
                    var $this = $(this);
                    $(this).not('.slick-initialized').slick({
                        dots: true,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        initialSlide: 1,
                        infinite: true,
                        cssEase: 'ease', 
                        speed: 600,
                        arrows: true,
                        adaptiveHeight: true,
                        prevArrow: $(this).parent().find(".mobile-arrow-left"),
                        nextArrow: $(this).parent().find(".mobile-arrow-right"),
                        appendDots: $(this).parent().find(".mobile-dots")
                    });
                    $(".mobile-controls").addClass("white-controls");
                    $(".b-mobile-filter .active").removeClass("active");
                    $(".b-mobile-filter .today").addClass("active");
                    if($(this).parent().hasClass("b-news-days-list")){
                        var $slider = $(this);
                        $slider.on('beforeChange', function(event, slick, currentSlide, nextSlide){
                            var $current = $(slick.$slides.get(nextSlide));

                            if($current.hasClass("b-news-days-today")){
                                $current.closest(".b-news-days-list").find(".mobile-controls").addClass("white-controls");
                            }else{
                                $current.closest(".b-news-days-list").find(".mobile-controls").removeClass("white-controls");
                            }
                            $(".b-mobile-filter .active").removeClass("active");
                            $(".b-mobile-filter a").eq(nextSlide).addClass("active");
                        });
                    }

                    $(".b-mobile-filter a").unbind("click");
                    $(".b-mobile-filter a").bind("click", function(){
                        $this.slick("slickGoTo", $(this).index());
                        return false;
                    });
                }
            });
        }else{
            if($(".b-employee-mobile .b-employee-text").length){
                $('.b-employee-desktop').append($(".b-employee-mobile .b-employee-text"));
            }
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

    $(".b-accordeon-body").each(function () {
        $(this).slideUp(0);
    });

    $(".b-accordeon-head").click(function () {
        
        if ($(this).hasClass('open')) {
            $(this).removeClass('open');
        } else {
            if ($(this).parents('.b-accordeon-form')) {
                var $this = $(this);
                setTimeout(function(){
                    $this.parents('.b-accordeon-form').find('input:not([type=hidden]), textarea').eq(0).focus();
                }, 100);
            }
            $(this).addClass('open');
        }

        var $block = $(this).parent().find(".b-accordeon-body");
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

    // $(document).on("input", ".divide", function(){
    //     var value = $(this).val();
    //     $(this).val(String(value).replace(/[^0-9.]/g,'').replace(/(\d)(?=(\d{3})+([^\d]|$))/g, '$1 '));
    // });

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

    // Мобильное меню
    // var mobileMenu = "<ul class='b-menu-mobile-list'>";
    // $(".b-header-menu-window .menu-window-item").each(function () {
    //     $(this).children(".section").each(function () {
    //         mobileMenu += "<li>";
    //         $(this).children("li").each(function () {
    //             mobileMenu += ($(this).children("a").length) ? $(this).children("a")[0].outerHTML : "";
    //             $(this).children(".sub-section").each(function () {
    //                 mobileMenu += "<ul class='open-section' data-depth='1'>";
    //                 $(this).children("li").each(function () {
    //                     mobileMenu += "<li>";
    //                     mobileMenu += ($(this).children("a").length) ? $(this).children("a")[0].outerHTML : "";
    //                     $(this).children(".sub-sub-section").each(function () {
    //                         mobileMenu += "<ul class='open-section' data-depth='2'>";
    //                         mobileMenu += $(this).html();
    //                         mobileMenu += "</ul>";
    //                     });
    //                     mobileMenu += "</li>";
    //                 });
    //                 mobileMenu += "</ul>";
    //             });
    //         });
    //         mobileMenu += "</li>";
    //     });
    // });
    // mobileMenu += "</ul>";
    // //var mobileMenuClear = $(mobileMenu).removeClass();
    // console.log(mobileMenu);
    // $(".b-menu-mobile-list-cont").prepend(mobileMenu);

    //сгенерить id
    var curID = 1;
    $(".b-header-menu-window a").each(function () {
        $(this).attr("data-id", "m-ref-"+curID);
        if($(this).next("ul").length){
            $(this).next("ul").attr("data-id", "m-ref-"+curID);
        }
        curID++;
    });
    //генерим первый уровень
    $(".b-header-menu-window .main-item").each(function () {
        var $link = $(this)[0].outerHTML;
        $(".b-menu-mobile-list").append("<li>"+$link+"</li>");
        $(".b-menu-mobile-list a[data-id="+$(this).attr("data-id")+"]").click(function(){
            if(openMobileSubmenu($(this).attr("data-id"), $(this).text())){
                return false;
            }
        });
    });

    function openMobileSubmenu(id, textItem) {
        if($(".b-header-menu-window ul[data-id="+id+"]").length){
            //генерим контейнер (будет последним)
            $(".slide-cont-list").append("<div class='slide-cont'></div>");
            var $cont = $(".slide-cont-list .slide-cont").last();
            $cont.append("<h4 class='mobile-window-back'>"+textItem+"</h4>");
            $cont.append("<ul></ul>");
            var $ul = $cont.children("ul");
            $(".b-header-menu-window ul[data-id="+id+"] > li > a").each(function() {
                $ul.append("<li>"+$(this)[0].outerHTML+"</li>");
                $ul.find("a[data-id="+$(this).attr("data-id")+"]").click(function(){
                    if(openMobileSubmenu($(this).attr("data-id"), $(this).text())){
                        return false;
                    }
                });
            });
            setTimeout(function () {
                $cont.addClass("open");
            }, 10);

            $(".mobile-window-back").click(function(){
                var $target = $(this).parent();
                $target.removeClass("open");
                setTimeout(function () {
                    $target.remove();
                }, 200);
            });
            return true;
        }else{
            return false;
        }
    }

    // $(document).on("click", ".b-menu-mobile-list a, .sub-section-slide a", function(){
    //     if($(this).siblings(".open-section").length > 0){//если есть вложенные секции
    //         var $section = $(this).siblings(".open-section"),
    //             depth = $section.attr("data-depth"),
    //             $items = $section.children("li"),
    //             $clone = $items.clone();
    //         if(depth == "1"){
    //             fillSection(".sub-section-slide", $(this).text(), $clone);
    //         }else{
    //             fillSection(".sub-sub-section-slide", $(this).text(), $clone);
    //         }
    //         return false;
    //     }
    // });
    // function fillSection($block, text, $items) {
    //     $($block).html("");
    //     $($block).append("<h4 class='mobile-window-back'>"+text+"</h4>");
    //     $($block).append("<ul></ul>");
    //     $($block).addClass("open").children("ul").append($items);
    //     $(".mobile-window-back").click(function(){
    //         $(this).parent().removeClass("open");
    //     });
    // }
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
        var $target = $(".slide-cont.open").last();
        $target.removeClass("open");
        setTimeout(function () {
            $target.remove();
        }, 200);
    };
    
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
        if($(".b-header-search").hasClass("open")){
            var cont = $(".b-header-search");
            if (!cont.is(e.target) && cont.has(e.target).length === 0) {
                $(".b-header-search").removeClass("open");
                $(".b-header-search-btn").removeClass("hide");
                $(".b-header-search-form button").addClass("hide");
            }
        }
        if($(".b-header-menu-window").hasClass("open")){
            var cont = $(".b-header-menu-window, .b-btn-menu-desktop");
            if (!cont.is(e.target) && cont.has(e.target).length === 0) {
                $(".b-header-menu-window, .b-btn-menu-desktop").removeClass("open");
            }
        }
    });
    $(document).keydown(function (e){
        e = e || window.event;
        if ("key" in e) {
            isEscape = (e.key === "Escape" || e.key === "Esc");
        } else {
            isEscape = (e.keyCode === 27);
        }
        if(isEscape){
            $(".b-header-search, .b-header-menu-window, .b-btn-menu-desktop").removeClass("open");
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

    $(window).scroll(function(){

        var scrollTop = (document.documentElement && document.documentElement.scrollTop) || document.body.scrollTop;
        var scrollBottom = document.documentElement.clientHeight + scrollTop;

        if (scrollTop > 400) {
            if (!$('.up').hasClass('show')){
                $('.up').addClass('show')
            }
        } else {
            if ($('.up').hasClass('show')) {
                $('.up').removeClass('show');
            }
        }

        arrowOffset = $('.up').offset().top;;
        footerOffset = $('.b-footer-bottom').offset().top;

        if(scrollBottom - 15 > footerOffset){
            if (!$('.up').hasClass('fix')) {
                $('.up').addClass('fix');
            }
        }else{
            if ($('.up').hasClass('fix')) {
                $('.up').removeClass('fix');
            }
        }
    });

    $(document).on('click', '.close-cookie', function(){
        $(this).parents('.b-cookies-block').fadeOut();
        return false;
    });

    // Календарь

if($(".b-calendar-cont").length){
    var calendarAjax = false;
    $(document).on("click", ".b-calendar-main-cont .event-ajax", function(){
        var $this = $(this);
        if(!calendarAjax && !$this.parent().hasClass("-selected-")){
            calendarAjax = true;
            $(".-selected-").removeClass("-selected-");
            $this.parent().addClass("-selected-");

            var arFirstDate = $(this).attr("data-date").split('.');
            firstDate = new Date(arFirstDate[2],arFirstDate[1]-1,arFirstDate[0]);

            $.ajax({
                type: "GET",
                url: $this.parents(".b-calendar-cont").attr("data-url"),
                data: "date="+$(this).attr("data-date"),
                success: function(data){
                    var $html = $(data);
                    if($this.parents(".b-calendar-main-cont").length > 0){//Главная страница
                        var $events = $html.find(".b-events-list").html();
                        $(".b-events-list-content").remove();
                        $(".b-events-list-ajax").html($events).addClass("show b-events-list-content").removeClass("b-events-list-ajax")
                        $('.b-events-list-cont').append("<div class='b-events-list b-events-list-main b-events-list-ajax'></div>");
                    }
                    // else{//Страница календаря
                    //     var $title = $html.find("h2.b-title").html();
                    //     $(".b-calendar-page-right h2").html($title);
                    //     var $news = $html.find(".b-news-list").html();
                    //     $(".b-calendar-page-right .b-news-list").html($news);
                    //     var $nav = $html.find(".b-page-nav").html();
                    //     $(".b-calendar-page-right .b-page-nav").html($nav);
                    // }
                },
                complete: function(){
                    calendarAjax = false;
                },
                error: function(){
                    // $this.removeClass("selected");
                },
            });
        }
        return false;
    });

    var curDate = new Date(),
        curMonth = curDate.getMonth(),
        curYear = curDate.getFullYear(),
        arMonths  = ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"];
    // Сгенерить 12 месяцев
    for (var i = 0, active = true; i < 14; i++) {
        $(".b-month-list").append("<div data-month="+(curMonth+1)+" data-year="+curYear+" class='month"+((i >= 12)?' disabled':'')+"'>"+arMonths[curMonth]+"</div>");
        curMonth++;
        if(curMonth >= 12){
            curMonth = 0;
            curYear++;
        }
        //active = false;
    }

    window.eventDatesDPC = JSON.parse(window.eventDatesDPC);
    //Получить первый доступный месяц
    if(window.activeDateDPC == undefined){
        window.activeDateDPC = window.eventDatesDPC[0];
    }
    var arFirstDate = window.activeDateDPC.split('.');
    firstDate = new Date(arFirstDate[2],arFirstDate[1]-1,arFirstDate[0]);
    //Получить индекс первого месяца
    var firstMonth = $(".b-month-list .month[data-month="+(firstDate.getMonth()+1)+"]").index();

    // Slick
    $('.b-month-list').slick({
        initialSlide: firstMonth,
        dots: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: false,
        cssEase: 'ease', 
        speed: 600,
        arrows: true,
        swipe: false,
        focusOnSelect: true,
        prevArrow: "<a href='#' class='icon-arrow-left'></a>",
        nextArrow: "<a href='#' class='icon-arrow-right'></a>",
    });

    var eventDatesObj = [];
    for (var i = window.eventDatesDPC.length - 1; i >= 0; i--) {
        var arDate = window.eventDatesDPC[i].split('.');
        eventDatesObj.push((new Date(arDate[2],arDate[1]-1,arDate[0])).getTime());
    }

    var datepickerOptions = {
        inline: true,
        multipleDates: false,
        showOtherMonths: false,
        onRenderCell: function (date, cellType) {
            if (cellType == 'day' && eventDatesObj.indexOf(date.getTime()) != -1) {
                var compositeDate = date.getDate()+"."+(date.getMonth()+1)+"."+date.getFullYear();
                //if((date.getTime() == firstDate.getTime())) console.log("123451345");
                return {
                    disabled: true,
                    classes: 'active-date'+((date.getTime() == firstDate.getTime()) ? " -selected-" : ""),
                    html: "<a href='"+$(".b-calendar-cont").attr("data-url")+"?date="+compositeDate
                        +"' class='event-ajax' data-date='"+compositeDate+"'>"+date.getDate()+"</a>"
                }
            }
        },
        onSelect: function onSelect(fd, date) {

        }
    };

    //Вывести полученный месяц
    var datepickerBack, datepickerFront;
    datepickerFront = $('.datepicker-calendar').eq(0);

    datepickerFront.datepicker($.extend(datepickerOptions,{startDate: firstDate}));
    datepickerFront.data('datepicker').selectDate(firstDate);
    $('.datepicker-calendar').eq(0).height($('.datepicker-calendar').eq(0).height());

    $('.b-month-list').on('beforeChange', function(event, slick, currentSlide, nextSlide){
        var $current = $(slick.$slides.get(nextSlide)),
            m = $current.attr("data-month"),
            y = $current.attr("data-year"),
            hiddenClass = (currentSlide < nextSlide) ? "hidden-left" : "hidden-right";
        $('.datepicker-calendar').eq(0).removeClass("show").addClass(hiddenClass);
        var datepickerBack = $('.datepicker-calendar').eq(1);
        datepickerBack.datepicker($.extend(datepickerOptions,{startDate: new Date(y,m-1,1)}));
        // datepickerBack.data('datepicker').selectDate(firstDate);
        $('.datepicker-calendar').eq(1).addClass("show");
        var h = $('.datepicker-calendar').eq(1).height();
        $('.datepicker-calendar').height(h);
    });

    $('.b-month-list').on('afterChange', function(event, slick, currentSlide){
        if($('.datepicker-calendar').eq(1).hasClass("show")){
            setTimeout(function(){
                $('.datepicker-calendar').eq(0).datepicker().data('datepicker').destroy();
                $('.datepicker-calendar').eq(0).remove();
                $('.datepicker-cont').append("<div class='datepicker-calendar'></div>");
            }, 10);
        }
    });
}

    if ($('#plup-actions').length){
        var uploaderAddPhoto = new plupload.Uploader({
            runtimes : 'html5,flash,silverlight,html4',
            browse_button : 'pickfiles',
            container: document.getElementById('plup-actions'),
            url : 'addFile.php',
            multi_selection: true,
            filters : {
                max_file_size : '10mb',
                mime_types: [
                    {title : "Image files", extensions : "jpg,jpeg,gif,png"},
                    {title : "Documents", extensions : "doc,docx,pdf,rtf,xls,xlsx"},
                    {title : "Archive", extensions : "zip,rar,7z"},
                ]
            },
            init: {
                PostInit: function() {
                    
                },
                FilesAdded: function(up, files) {
                    // progress.start(1.5);
                    $('.plup-add').addClass('hide');
                    $('.plup-loading').removeClass('hide complete');

                    changePlupText(files.length, false);

                    plupload.each(files, function(file) {
                        var block = 
                        '<div class="b-plup-file">'+
                            '<a href="#" class="file-delete"></a>'+
                            '<span class="file-name">'+file.name+'</span>'+
                            '<input id="file-'+file.id+'" type="hidden" name="file-'+file.id+'">'+
                        '</div>';

                        $(block).appendTo('#b-plup-files-list');
                    });
                    up.start();
                },
                UploadProgress: function(up, file) {
                    // $('.b-popup-add-link.icon-add-photo:before').css('content', '\e922');
                },
                FileUploaded: function(up, file, res) {
                    var json = JSON.parse(res.response);
                    $('#file-' + file.id).parents('.b-plup-file').addClass('uploaded');
                    $('#file-' + file.id).val(json.filePath);
                },
                Error: function(up, err) {
                    if (err.code == -600) {
                        $("#pickfiles").innerHTML = "Файл слишком большой";
                        $("#pickfiles").addClass('error');
                    };
                    if (err.code == -601) {
                        $("#pickfiles").innerHTML = "Неверный формат файла";
                        $("#pickfiles").addClass('error');
                    };
                },
                UploadComplete: function() {
                    $('.plup-loading').addClass('complete');
                    changePlupText($('.b-plup-file').length, true);
                }
            }
        });

        uploaderAddPhoto.init();
    }


    $(document).on('dragenter', '.moxie-shim input', function(){
        $('#plup-actions').addClass('dragenter');
    });

    $(document).on('dragleave', '.moxie-shim input', function(){
        $('#plup-actions').removeClass('dragenter');
    });
    $(document).on('drop', '.moxie-shim input', function(){
        $('#plup-actions').removeClass('dragenter');
    });

    $(document).on('click', '.file-delete', function(){
        $(this).parents('.b-plup-file').remove();
        
        if(!$('.b-plup-file').length){
            $('.plup-add').removeClass('hide');
            $('.plup-loading').addClass('hide');
        } else {
            changePlupText($('.b-plup-file').length, true);
        }

        return false;
    });

    $(document).on('click', '.pickfiles-more', function(){
        $(document).find('.moxie-shim input').click();
        return false;
    });

    function changePlupText(count, upload) {

        if (upload) {
            $('.b-load-text').text(getNoun(count, 'Загружен', 'Загружено', 'Загружено'));
        } else {
            $('.b-load-text').text(getNoun(count, 'Загружается', 'Загружаются', 'Загружается'));
        }

        $('.b-plup-count').text(count + ' ' + getNoun(count, 'файл','файла','файлов'));
    }

    function getNoun(number, one, two, five) {
        var n = Math.abs(number);
        n %= 100;
        if (n >= 5 && n <= 20) {
          return five;
        }
        n %= 10;
        if (n === 1) {
          return one;
        }
        if (n >= 2 && n <= 4) {
          return two;
        }
        return five;
      }

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
        if ((myWidth > 768 && myWidth < 1170) && $('#top-cont').find('.b-news-days-right-top').length) {
            var html = $('#top-cont').html();
            $('#top-cont').html('');
            $('#bottom-cont').html(html);
        }

        if ((myWidth >= 1170 || myWidth <= 768) && $('#bottom-cont').find('.b-news-days-right-top').length) {
            var html = $('#bottom-cont').html();
            $('#bottom-cont').html('');
            $('#top-cont').html(html);
        }

    }

    function resizeSlider(){

        var currentWidth = $('.b-main-slider-cont').width();

        if (myWidth > 665) {
            
            var width = 1386;
            var height = 310;

            $('.b-main-slider-cont').height(currentWidth/width*height);

        } else {
            
            var width = 296;
            var height = 180;

            $('.b-main-slider-cont').height(currentWidth/width*height);
        }

    }

});

customHandlers["actionResult"] = function(msg, $form){
    if( isValidJSON(msg) ){
        var json = JSON.parse(msg);
        if( typeof json.action != "undefined" ){
            if( json.action != "authError" ){
                $form.find("input[type=text], input[type=email], input[type=password], textarea").val("");
            }
            
            switch (json.action) {
                case "questionSuccess":
                    $form.find(".b-form-content").hide();
                    $form.find(".b-success").show();
                    $form.find("h2").html("Успешно!");
                    scrollToElement($form, 300, 32);
                    break;
                case "reload":
                    window.location.reload();
                    break;
                case "redirect":
                    window.location.href = json.href;
                    break;
                case "authError":
                    $form.find(".b-popup-auth-wrong").html(json.text).removeClass("hide");
                    scrollToElement($form.find(".b-popup-auth-wrong"), 300, 32, $(".fancybox-slide"));
                    break;
                case "showPopup":
                    showPopup(json.success, json.title, json.subtitle, json.text);
                    break;
            }
        }else{
            showPopup(false);
        }
    }else{
        if( msg == "1" ){
            $link = $this.find(".b-thanks-link").click();
        }
        
        showPopup(false);
    }
}

function showPopup(success, title, subtitle, text){
    if( typeof title == "undefined" ){
        title = "Отправка формы";
    }
    if( typeof subtitle == "undefined" ){
        subtitle = "Произошла ошибка отправки";
    }
    if( typeof text == "undefined" ){
        text = "Пожалуйста, попробуйте отправить форму повторно";
    }
    $("#b-text-popup-result h2").html(title);
    $("#b-text-popup-result .b-thanks-result").html(subtitle);
    $("#b-text-popup-result .b-thanks-msg").html(text);

    if( success ){
        $("#b-text-popup-result .b-thanks-result").removeClass("error");
    }else{
        $("#b-text-popup-result .b-thanks-result").addClass("error");
    }

    $(".b-success-link").click();
}

function isValidJSON(src) {
    var filtered = src+"";
    filtered = filtered.replace(/\\["\\\/bfnrtu]/g, '@');
    filtered = filtered.replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g, ']');
    filtered = filtered.replace(/(?:^|:|,)(?:\s*\[)+/g, '');

    return (/^[\],:{}\s]*$/.test(filtered));
}

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


