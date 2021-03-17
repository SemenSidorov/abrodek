$(document).ready(function () {

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


ymaps.ready(function () {
  var myMap = new ymaps.Map('partners-map', {
      center: [55.751574, 37.573856],
      zoom: 9
    }, {
      searchControlProvider: 'yandex#search'
    }),

    // Создаём макет содержимого.
    MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
      '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
    ),

    myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
      hintContent: 'Собственный значок метки',
      balloonContent: 'Это красивая метка'
    }, {
      // Опции.
      // Необходимо указать данный тип макета.
      iconLayout: 'default#image',
      // Своё изображение иконки метки.
      iconImageHref: 'pics/point.png',
      // Размеры метки.
      iconImageSize: [34, 42],
      // Смещение левого верхнего угла иконки относительно
      // её "ножки" (точки привязки).
      iconImageOffset: [-5, -38]
    }),

    myPlacemarkWithContent = new ymaps.Placemark([55.661574, 37.573856], {
      hintContent: 'Собственный значок метки с контентом',
      balloonContent: 'Это красивая метка',
      iconContent: ''
    }, {
      // Опции.
      // Необходимо указать данный тип макета.
      iconLayout: 'default#imageWithContent',
      // Своё изображение иконки метки.
      iconImageHref: 'pics/point2.png',
      // Размеры метки.
      iconImageSize: [41, 42],
      // Смещение левого верхнего угла иконки относительно
      // её "ножки" (точки привязки).
      iconImageOffset: [-24, -24],
      // Смещение слоя с содержимым относительно слоя с картинкой.
      iconContentOffset: [15, 15],
      // Макет содержимого.
      iconContentLayout: MyIconContentLayout
    });

  myMap.geoObjects
    .add(myPlacemark)
    .add(myPlacemarkWithContent);
});

ymaps.ready(function () {
  var myMap = new ymaps.Map('slide_map', {
      center: [55.751574, 37.573856],
      zoom: 9
    }, {
      searchControlProvider: 'yandex#search'
    }),

    // Создаём макет содержимого.
    MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
      '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
    ),

    myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
      hintContent: 'Собственный значок метки',
      balloonContent: 'Это красивая метка'
    }, {
      // Опции.
      // Необходимо указать данный тип макета.
      iconLayout: 'default#image',
      // Своё изображение иконки метки.
      iconImageHref: 'pics/slide_pages-map1.png',
      // Размеры метки.
      iconImageSize: [34, 42],
      // Смещение левого верхнего угла иконки относительно
      // её "ножки" (точки привязки).
      iconImageOffset: [-5, -38]
    }),

    myPlacemarkWithContent = new ymaps.Placemark([55.661574, 37.573856], {
      hintContent: 'Собственный значок метки с контентом',
      balloonContent: 'Это красивая метка',
      iconContent: ''
    }, {
      // Опции.
      // Необходимо указать данный тип макета.
      iconLayout: 'default#imageWithContent',
      // Своё изображение иконки метки.
      iconImageHref: '',
      // Размеры метки.
      iconImageSize: [41, 42],
      // Смещение левого верхнего угла иконки относительно
      // её "ножки" (точки привязки).
      iconImageOffset: [-24, -24],
      // Смещение слоя с содержимым относительно слоя с картинкой.
      iconContentOffset: [15, 15],
      // Макет содержимого.
      iconContentLayout: MyIconContentLayout
    });

  myMap.geoObjects
    .add(myPlacemark)
    .add(myPlacemarkWithContent);
});

ymaps.ready(function () {
  var myMap = new ymaps.Map('slide_pages-map', {
      center: [55.751574, 37.573856],
      zoom: 9
    }, {
      searchControlProvider: 'yandex#search'
    }),

    // Создаём макет содержимого.
    MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
      '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
    ),

    myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
      hintContent: 'Собственный значок метки',
      balloonContent: 'Это красивая метка'
    }, {
      // Опции.
      // Необходимо указать данный тип макета.
      iconLayout: 'default#image',
      // Своё изображение иконки метки.
      iconImageHref: 'pics/slide_pages-map1.png',
      // Размеры метки.
      iconImageSize: [50, 56],
      // Смещение левого верхнего угла иконки относительно
      // её "ножки" (точки привязки).
      iconImageOffset: [-5, -38]
    }),

    myPlacemarkWithContent = new ymaps.Placemark([55.661574, 37.573856], {
      hintContent: 'Собственный значок метки с контентом',
      balloonContent: 'Это красивая метка',
      iconContent: '12'
    }, {
      // Опции.
      // Необходимо указать данный тип макета.
      iconLayout: 'default#imageWithContent',
      // Своё изображение иконки метки.
      iconImageHref: 'pics/slide_pages-map2.png',
      // Размеры метки.
      iconImageSize: [50, 56],
      // Смещение левого верхнего угла иконки относительно
      // её "ножки" (точки привязки).
      iconImageOffset: [-24, -24],
      // Смещение слоя с содержимым относительно слоя с картинкой.
      iconContentOffset: [15, 15],
      // Макет содержимого.
      iconContentLayout: MyIconContentLayout
    });

  myMap.geoObjects
    .add(myPlacemark)
    .add(myPlacemarkWithContent);
});