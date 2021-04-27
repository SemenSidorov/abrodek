$(document).ready(function () {
    var pagen_data = "";

    $(".pagenation-oblast").on("click", function () {
        var page = { PAGEN_1: $(this).data("page") + 1 };
        $.ajax({
            type: "GET",
            url: "/local/templates/brevis/ajax-oblasty.php",
            data: page,
            contentType: "html",
            cache: false,
            success: function (data) {
                if (data != pagen_data) {
                    $(".card-application").append(data);
                    $(".pagenation-oblast").attr("data-page", page.PAGEN_1);
                    pagen_data = data;
                } else {
                    $(".pagenation-oblast").remove();
                }
            },
            error: function (request) {
                $(".pagenation-oblast").remove();
            },
        });
    });

    if ($(".bx-filter-parameters-box").length == 0) {
        $(".left-sidebar").remove();
    }
    $(".open_blocks").on("click", function () {
        if ($(".item.card:nth-child(n+7)").css("display") == "none") $(".item.card:nth-child(n+7)").css("display", "block");
        else {
            $(".item.card:nth-child(n+7)").css("display", "none");
            window.scrollTo(0, $(".open_blocks").position().top - 100);
        }
    });
if ($('.checkbox input[type=checkbox]').is(':checked')) {
        $(".btn.btn-link").css({"display":"block"});
    }
$(".phone_numb").click(function(){$(this).setCursorPosition(4);}).mask("+7 (999) 999-9999");

$(function() {
    $.fn.setCursorPosition = function(pos) {
        if ($(this).get(0).setSelectionRange) {
            $(this).get(0).setSelectionRange(pos, pos);
        } else if ($(this).get(0).createTextRange) {
            var range = $(this).get(0).createTextRange();
            range.collapse(true);
            range.moveEnd("character", pos);
            range.moveStart("character", pos);
            range.select();
        }
    };
});
    // Slider

    $(".top-slider").owlCarousel({
        items: 1,
        loop: true,
        nav: true,
        autoplay: true,
        autoplayTimeout: 3500,
        navText: [],
    });

    $(".pages-img-slider").owlCarousel({
        items: 1,
        loop: false,
        center: true,
        mouseDrag: false,
        nav: false,
        URLhashListener: true,
        autoplayHoverPause: true,
        startPosition: "URLHash",
    });

    $(".pages-img-slider-list-slider").owlCarousel({
        items: 1,
        loop: false,
        center: true,
        mouseDrag: false,
        URLhashListener: true,
        autoplayHoverPause: true,
        startPosition: "URLHash",
    });
    $(".variante_fire").slick({
        //arrows: false,
        //dots: true,
        speed: 300,
        slidesToShow: 1,
        //autoplay:true,
        //autoplaySpeed:1500
    });
    $(".partners-slider").owlCarousel({
        items: 6,
        loop: true,
        nav: true,
        navText: [],
        responsive: {
            0: {
                items: 1,
            },
            720: {
                items: 2,
            },
            960: {
                items: 4,
            },
            1200: {
                items: 6,
            },
        },
    });

    $(".item_sliders").children().each(function(index, el){
      var thumbs = $(el).find(".gallery-thumbs").attr("data-id");
        var galleryThumbs = new Swiper(".gallery-thumbs-" + thumbs, {
            observer: true,
            observeParents: true,
            spaceBetween: 10,
            slidesPerView: 6,
            freeMode: true,
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });

      var top = $(el).find(".gallery-top").attr("data-id");
        var galleryTop = new Swiper(".gallery-top-" + top, {
            observer: true,
            observeParents: true,
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            thumbs: {
                swiper: galleryThumbs,
            },
        });
    });



    $(".single-item").slick();
    if ($(window).width() <= "768") {
        $(".pages-img-slider-list").owlCarousel({
            items: 6,
            loop: true,
            nav: true,
            navText: [],
            responsive: {
                0: {
                    items: 2,
                },
                720: {
                    items: 4,
                },
                960: {
                    items: 5,
                },
                1200: {
                    items: 6,
                },
            },
        });
        $(".card-application").owlCarousel({
            items: 1,
            loop: true,
            nav: true,
            navText: [],
        });
        $(".advantages-slider").owlCarousel({
            items: 1,
            loop: true,
            nav: true,
            navText: [],
        });
        $(".application-slider").owlCarousel({
            items: 6,
            loop: true,
            nav: true,
            navText: [],
            responsive: {
                0: {
                    items: 1,
                },
                720: {
                    items: 2,
                },
                960: {
                    items: 4,
                },
                1200: {
                    items: 6,
                },
            },
        });
        $(".catalog-sliders").owlCarousel({
            items: 6,
            loop: true,
            nav: true,
            navText: [],
            responsive: {
                0: {
                    items: 1,
                },
                720: {
                    items: 2,
                },
                960: {
                    items: 4,
                },
                1200: {
                    items: 6,
                },
            },
        });
    }

    // Top

$(window).scroll(function () {
    if ($(this).scrollTop() > 150) {
        $("#top").fadeIn();
        $(".menu-list").css({
        	"position": "fixed",
         	"top":"0",
         	"background":"#282e4e",
         	"z-index":"99",
         	"width":"1170px"
         });
         if ($(window).width() < 993){
         	$(".menu-list").css({
         		"top": "50px",
         		"left" :"50%",
         		"transform":"translate(-50%)"
         	});
         	$(".menu").css({
         		"position":"fixed",
         		"width":"690px",
         		"top":"0",
         		"left" :"50%",
         		"transform":"translate(-50%)"
         	});
         }
    }
    else {
        $("#top").fadeOut();
        $(".menu-list").css({"position": "relative"});

        if ($(window).width() < 993){
        	$(".menu-list").css({
        		"top": "50px",
        		"left" :"0",
        		"transform": "none"
        	});
         $(".menu").css({
         	"position":"relative",
         	"transform": "none",
         	"left" :"0"
         });
    }
    }
});

$("#top").click(function () {
    $("body, html").animate({ scrollTop: 0 }, 1000);
});

    // Menu

    $(".button-menu").on("click", function () {
        $(".menu").toggleClass("active");
    });

    $(".menu ul li a").on("click", function () {
        $(".menu").removeClass("active");
        $(".menu-drop").removeClass("active");
    });

    $(".menu-drop-button").on("click", function () {
        $(".menu-drop").toggleClass("active");
    });

    $(function () {
        $("#slider-range").slider({
            range: true,
            min: 0,
            max: 99999,
            values: [0, 90900],
            slide: function (event, ui) {
                $("#amount1").val(+ui.values[0]);
                $("#amount2").val(+ui.values[1]);
            },
        });
        $("#amount1").val($("#slider-range").slider("values", 0));
        $("#amount2").val($("#slider-range").slider("values", 1));
    });
});

$(function () {
    $('#headerModalDialog').on('submit', function(e) {
        e.preventDefault();
        var form = this;
        var flag = true;
        if($(form).find("input[name=phone]").val() == ''){
          $(form).find("input[name=phone]").attr("style", "border: 1px solid red;");
          flag = false;
        }
        if($(form).find("input[name=name]").val() == ''){
          $(form).find("input[name=name]").attr("style", "border: 1px solid red;");
          flag = false;
        }
        if($(form).find("input[name=checkbox]").val() == ''){
          $(form).find("input[name=checkbox]").parent('label').attr("style", "border: 1px solid red;");
          flag = false;
        }
        if(flag){
    	    $.ajax({
            type: "POST",
            url: "/local/templates/brevis/ajax.php",
    				data: {
    					phone: $(form).find("input[name=phone]").val(),
    					name: $(form).find("input[name=name]").val(),
    					test: $(form).find("input[name=test]").val(),
    					time: $(form).find("input[name=time]").val(),
              checkbox: $(form).find("input[name=checkbox]").val()
    				},
            success: function(out){
    					if(out == "success"){
                $('div.modal-content div.message').html('Спасибо! Наш менеджер скоро с вами свяжется!');
                form.reset();
    					}else{
                $('div.modal-content div.errors').text(out);
    					}
            }
    	    });
        }
  	});
    $("form.smartfilter").on("change", function () {
        $(".btn-themes").click();
    });
});
