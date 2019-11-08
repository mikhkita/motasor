function getNextField($form){
	var j = 1;
	while( $form.find("input[name="+j+"]").length ){
		j++;
	}
	return j;
}

function fancyOpen(el){
    $.fancybox(el,{
    	padding:0,
    	fitToView: false,
        scrolling: 'no',
        beforeShow: function(){
			$(".fancybox-wrap").addClass("beforeShow");
			if( !device.mobile() ){
		    	$('html').addClass('fancybox-lock'); 
		    	$('.fancybox-overlay').html($('.fancybox-wrap')); 
		    }
		},
		afterShow: function(){
			$(".fancybox-wrap").removeClass("beforeShow");
			$(".fancybox-wrap").addClass("afterShow");
			setTimeout(function(){
                $('.fancybox-wrap').css({
                    'position':'absolute'
                });
                $('.fancybox-inner').css('height','auto');
            },200);
		},
		beforeClose: function(){
			$(".fancybox-wrap").removeClass("afterShow");
			$(".fancybox-wrap").addClass("beforeClose");
		},
		afterClose: function(){
			$(".fancybox-wrap").removeClass("beforeClose");
			$(".fancybox-wrap").addClass("afterClose");
		},
    }); 
    return false;
}

var customHandlers = [];

$(document).ready(function(){	
	var rePhone = /^\+\d \(\d{3}\) \d{3}-\d{2}-\d{2}$/,
		tePhone = '+7 (999) 999-99-99';

	$.validator.addMethod('customPhone', function (value) {
		return rePhone.test(value);
	});
	$(".ajax").parents("form").each(function(){
		$(this).validate({
			rules: {
				email: 'email',
				phone: 'customPhone',
				'password': {
					required: true,
					minlength: 6
			    },
			    'password-confirmation': {
			    	required: true,
					minlength: 6,
					equalTo: $(this).find("input[name='password']")
			    },
			}
		});
		if( $(this).find("input[name=phone]").length ){
			$(this).find("input[name=phone]").each(function(){
				if (typeof IMask == 'function') {
					var phoneMask = new IMask($(this)[0], {
			        	mask: '+{7} (000) 000-00-00',
			        	prepare: function(value, masked){
					    	if( value == 8 && masked._value.length == 0 ){
					    		return "+7 (";
					    	}

					    	tmp = value.match(/[\d\+]*/g);
					    	if( tmp && tmp.length ){
					    		value = tmp.join("");
					    	}else{
					    		value = "";
					    	}
					    	return value;
					    }
			        });
			    } else {
					$(this).mask("+7 (999) 999-99-99");
				}
			});
		}
	});

	$.extend($.validator.messages, {
	    required: "Ошибка: значение не может быть пустым",
	    email: "Ошибка: недопустимое значение",
	    customPhone: "Ошибка: недопустимое значение",
	    minlength: "Ошибка: пароль должен быть не менее 6 символов длиной",
	    equalTo: "Ошибка: пароли не совпадают",
	});

	function whenScroll(){
		var scroll = (document.documentElement && document.documentElement.scrollTop) || document.body.scrollTop;
		if( customHandlers["onScroll"] ){
			customHandlers["onScroll"](scroll);
		}
	}
	$(window).scroll(whenScroll);
	whenScroll();

	$(".fancy:not(.fancy-binded)").each(function(){
		var $popup = $($(this).attr("href")),
			$this = $(this);
		$this.fancybox({
			padding : 0,
			content : $popup,
			helpers: {
	         	overlay: {
	            	locked: true 
	         	}
	      	},
	      	closeExisting: true,
	      	btnTpl : {
                smallBtn   : '<button data-fancybox-close class="fancybox-close-small" title="Закрыть"></button>',
            },
			beforeShow: function(){
				if($this.hasClass("b-header-community")){
					$(".b-btn-menu-mobile, .b-menu-mobile-window").removeClass("open");
				}
				$(".fancybox-wrap").addClass("beforeShow");
				$popup.find(".custom-field").remove();
				if( $this.attr("data-value") ){
					var name = getNextField($popup.find("form"));
					$popup.find("form").append("<input type='hidden' class='custom-field' name='"+name+"' value='"+$this.attr("data-value")+"'/><input type='hidden' class='custom-field' name='"+name+"-name' value='"+$this.attr("data-name")+"'/>");
				}
				if( $popup.attr("data-beforeShow") && customHandlers[$popup.attr("data-beforeShow")] ){
					customHandlers[$popup.attr("data-beforeShow")]($popup);
				}
			},
			afterShow: function(){
				$(".fancybox-wrap").removeClass("beforeShow");
				$(".fancybox-wrap").addClass("afterShow");
				if( $popup.attr("data-afterShow") && customHandlers[$popup.attr("data-afterShow")] ){
					customHandlers[$popup.attr("data-afterShow")]($popup);
				}
				$popup.find("input[type='text'],input[type='number'],textarea").eq(0).focus();
			},
			beforeClose: function(){
				$(".fancybox-wrap").removeClass("afterShow");
				$(".fancybox-wrap").addClass("beforeClose");
				if( $popup.attr("data-beforeClose") && customHandlers[$popup.attr("data-beforeClose")] ){
					customHandlers[$popup.attr("data-beforeClose")]($popup);
				}
			},
			afterClose: function(){
				$(".fancybox-wrap").removeClass("beforeClose");
				$(".fancybox-wrap").addClass("afterClose");
				if( $popup.attr("data-afterClose") && customHandlers[$popup.attr("data-afterClose")] ){
					customHandlers[$popup.attr("data-afterClose")]($popup);
				}
			}
		});
		$this.addClass("fancy-binded");
	});

	var open = false;
    $("body").on("mouseup", ".b-popup *, .b-popup", function(){
        open = true;
    });
    $("body").on("mousedown", ".fancybox-slide", function() {
        open = false;
    }).on("mouseup", ".fancybox-slide", function(){
        if( !open ){
            $.fancybox.close();
        }
    });

	$(".b-go, .b-sections-list a, .b-links-list li a").click(function(){
		scrollToElement( $(this).attr("href"), $(this).attr("data-duration"), $(this).attr("data-offset") );
		return false;
	});

	$(".fancy-img").fancybox({
		padding : 0
	});

	$(".goal-click").click(function(){
		if( $(this).attr("data-goal") )
			yaCounter12345678.reachGoal($(this).attr("data-goal"));
	});

	$(".ajax").parents("form").submit(function(){
  		if( $(this).find("input.error,select.error,textarea.error").length == 0 ){
  			var $this = $(this),
  				$thanks = $($this.attr("data-block"));

  			$this.find(".ajax").attr("onclick", "return false;");

  			if( $this.attr("data-beforeAjax") && customHandlers[$this.attr("data-beforeAjax")] ){
				customHandlers[$this.attr("data-beforeAjax")]($this);
			}

			if( $this.attr("data-goal") ){
				yaCounter12345678.reachGoal($this.attr("data-goal"));
			}

			if ($this.hasClass("b-form-forgot")) {
				if(!$this.find("input[name='login']").val() && !$this.find("input[name='email']").val()){
					$(".b-popup-forgot-wrong").removeClass("hide");
					return false;
				}else{
					$(".b-popup-forgot-wrong").addClass("hide");
				}
			}

  			$.ajax({
			  	type: $(this).attr("method"),
			  	url: $(this).attr("action"),
			  	data:  $this.serialize(),
				success: function(msg){

					actionResult(msg);

				},
				error: function(){
					$.fancybox.close();
					$(".b-error-link").click();
				},
				complete: function(){
					$this.find(".ajax").removeAttr("onclick");
					$this.find("input[type=text],textarea").val("");
					$this.find(".icon-clear").removeClass("show");
				}
			});
  		}else{
  			$(this).find("input.error,select.error,textarea.error").eq(0).focus();
  		}
  		return false;
  	});

	$("body").on("click", ".ajax", function(){
		$(this).parents("form").submit();
		return false;
	});

	function actionResult(msg){
		if( isValidJSON(msg) ){
            var json = JSON.parse(msg);
            if( json.result == "error" ){
            	// alert("Ошибка");
            }else if( typeof json.action != "undefined" ){
            	switch (json.action) {
            		case "questionSuccess":
            			$(".b-question-form").hide();
            			$(".b-success").show();
            			scrollToElement(".b-success", 300);
            			break;
            		case "reload":
            			window.location.reload();
            			break;

            	}
            }
        }else{
            // alert("Ошибка");
            
            if( msg == "1" ){
				$link = $this.find(".b-thanks-link");
			}else{
				$link = $(".b-error-link");
			}
			
			$link.click();
        }
	}

	function scrollToElement(selectorTo, duration, offset){
		var block = $( selectorTo ),
			off = offset||( (window.innerWidth < 768) ? 180 : 20 ),
			duration = duration||800;

		$("body, html").animate({
			scrollTop : block.offset().top-off
		},duration);
	}

	function isValidJSON(src) {
	    var filtered = src+"";
	    filtered = filtered.replace(/\\["\\\/bfnrtu]/g, '@');
	    filtered = filtered.replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g, ']');
	    filtered = filtered.replace(/(?:^|:|,)(?:\s*\[)+/g, '');

	    return (/^[\],:{}\s]*$/.test(filtered));
	}
});