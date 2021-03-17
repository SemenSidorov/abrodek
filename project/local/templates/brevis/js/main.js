$(document).ready(function () {

  var pagen_data = '';

  $('.pagenation-oblast').on('click', function(){
    var page = {PAGEN_1: $(this).data('page') + 1};
    $.ajax({
      type: "GET",
      url: "/local/templates/brevis/ajax-oblasty.php",
      data: page,
      contentType: 'html',
      cache: false,
      success: function (data) {
        if(data != pagen_data){
          $('.card-application').append(data);
          $('.pagenation-oblast').attr('data-page', page.PAGEN_1);
          pagen_data = data;
        }else{
          $('.pagenation-oblast').remove();
        }
      },
      error: function (request) {
        $('.pagenation-oblast').remove();
      }
    });
  });

  if($('.bx-filter-parameters-box').length == 0){
    $('.left-sidebar').remove();
  }

// Slider

  $(".top-slider").owlCarousel({
    items:1,
    loop: true,
    nav: true,
    navText: []
  });

  $(".pages-img-slider").owlCarousel({
    items:1,
    loop:false,
    center:true,
    mouseDrag:false,
    nav:false,
    URLhashListener:true,
    autoplayHoverPause:true,
    startPosition: 'URLHash'
  });

  $(".pages-img-slider-list-slider").owlCarousel({
    items:1,
    loop:false,
    center:true,
    mouseDrag:false,
    URLhashListener:true,
    autoplayHoverPause:true,
    startPosition: 'URLHash'
  });

  $(".partners-slider").owlCarousel({
    items: 6,
    loop: true,
    nav: true,
    navText: [],
    responsive : {
      0 : {
        items: 1
      },
      720: {
        items: 2
      },
      960: {
        items: 4
      },
      1200: {
        items: 6
      },
    }
  });

  if ($(window).width() <= '768'){
    $(".pages-img-slider-list").owlCarousel({
      items: 6,
      loop: true,
      nav: true,
      navText: [],
      responsive : {
        0 : {
          items: 2
        },
        720: {
          items: 4
        },
        960: {
          items: 5
        },
        1200: {
          items: 6
        },
      }
    });
    $(".card-application").owlCarousel({
      items:1,
      loop: true,
      nav: true,
      navText: []
    });
    $(".advantages-slider").owlCarousel({
      items:1,
      loop: true,
      nav: true,
      navText: []
    });
    $(".application-slider").owlCarousel({
      items: 6,
      loop: true,
      nav: true,
      navText: [],
      responsive : {
        0 : {
          items: 1
        },
        720: {
          items: 2
        },
        960: {
          items: 4
        },
        1200: {
          items: 6
        },
      }
    });
    $(".catalog-sliders").owlCarousel({
      items: 6,
      loop: true,
      nav: true,
      navText: [],
      responsive : {
        0 : {
          items: 1
        },
        720: {
          items: 2
        },
        960: {
          items: 4
        },
        1200: {
          items: 6
        },
      }
    });
  };

  // Top

  $(window).scroll(function () {
    if ($(this).scrollTop() > 150) $('#top').fadeIn();
    else $('#top').fadeOut();
  });
  $('#top').click(function () {
    $('body, html').animate({scrollTop: 0}, 1000);
  });

  // Menu

  $('.button-menu').on('click', function(){
    $('.menu').toggleClass('active');
  });

  $('.menu ul li a').on('click', function(){
    $('.menu').removeClass('active');
    $('.menu-drop').removeClass('active');
  });

  $('.menu-drop-button').on('click', function(){
    $('.menu-drop').toggleClass('active');
  });

  $( function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 99999,
      values: [ 0, 90900 ],
      slide: function( event, ui ) {
        $( "#amount1" ).val( + ui.values[ 0 ]);
        $( "#amount2" ).val( + ui.values[ 1 ]);
      }
    });
    $( "#amount1" ).val( $( "#slider-range" ).slider( "values", 0 ));
    $( "#amount2" ).val( $( "#slider-range" ).slider( "values", 1 ));
  } );

});

$(function(){
  $('form.smartfilter').on('change', function(){
    $(".btn-themes").click();
  });
});
