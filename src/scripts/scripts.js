(function($) {

  'use strict';

  var init = function() {

    initHeader();

    if ($('.board--gallery').length) {
      initGallery();
    }

    if ($('.plans__items').length) {
      initPlans();
    }

    if ($('.contact__map__object').length) {
      initGoogleMaps();
    }

    if ($('.cookies').length) {
      initCookies();
    }

  };

  function initHeader() {
    $('.button--nav').click(function(event) {
      $('.header').toggleClass('header--opened');
    });
  };

  function initGallery() {

    $('.gallery').magnificPopup({
      removalDelay: 300,
      tClose: 'Chiudi',
      tLoading: 'Caricamento…',
      delegate: '.card__link',
      type: 'image',
      image: {
        markup: '<div class="mfp-figure">'+
            '<div class="button--close mfp-close"></div>'+
            '<div class="mfp-img"></div>'+
          '</div>',
      },
      gallery: {
        enabled: true,
        preload: [0,2],
        tPrev: 'Precedente',
        tNext: 'Successiva',
        arrowMarkup: '<button type="button" class="button button--arrow button--arrow-%dir%"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow"></use></svg></button>',
        tCounter: '%curr% / %total%'
      },
      closeBtnInside: false,
      closeMarkup: '<button type="button" class="button button--close"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close"></use></svg></button>',
      autoFocusLast: false,
      mainClass: 'mfp-fade'
    });
    
  };

  function initPlans() {
    $('.plans__item .button').hover(function() {
      $(this).parent('.plans__item').toggleClass('plans__item--active');
    });
  };

  function initGoogleMaps() {

    function new_map($el) {

      var $markers = $el.find('.contact__map__marker');

      var color1 = '#2c292d',
          color2 = '#d1c7b2',
          color3 = '#f4f3f1',
          color4 = '#fff';

    	var args = {
        scrollwheel       : false,
        navigationControl : true,
        mapTypeControl    : true,
        scaleControl      : true,
        draggable         : true,
    		zoom		          : 16,
        zoomControl       : true,
        mapTypeControl    : false,
        scaleControl      : true,
        streetViewControl : false,
        rotateControl     : false,
        fullscreenControl : false,
    		center		        : new google.maps.LatLng(0, 0),
    		mapTypeId	        : google.maps.MapTypeId.ROADMAP,
        styles: [
          {
            elementType: 'geometry',
            stylers: [
              {
                color: color3
              }
            ]
          },
          {
            elementType: 'labels.text.stroke',
            stylers: [
              {
                color: color3
              }
            ]
          },
          {
            elementType: 'labels.text.fill',
            stylers: [
              {
                color: color1
              }
            ]
          },
          {
            featureType: 'administrative.locality',
            elementType: 'labels.text.fill',
            stylers: [
              {
                color: color1
              }
            ]
          },
          {
            featureType: 'poi',
            elementType: 'labels.text.fill',
            stylers: [
              {
                color: color1
              }
            ]
          },
          {
            featureType: 'poi.park',
            elementType: 'geometry',
            stylers: [
              {
                color: color2
              }
            ]
          },
          {
            featureType: 'poi.park',
            elementType: 'labels.text.fill',
            stylers: [
              {
                color: color1
              }
            ]
          },
          {
            featureType: 'road',
            elementType: 'geometry',
            stylers: [
              {
                color: color2
              }
            ]
          },
          {
            featureType: 'road',
            elementType: 'geometry.stroke',
            stylers: [
              {
                color: color2
              }
            ]
          },
          {
            featureType: 'road',
            elementType: 'labels.text.fill',
            stylers: [
              {
                color: color1
              }
            ]
          },
          {
            featureType: 'road.highway',
            elementType: 'geometry',
            stylers: [
              {
                color: color2
              }
            ]
          },
          {
            featureType: 'road.highway',
            elementType: 'geometry.stroke',
            stylers: [
              {
                color: color2
              }
            ]
          },
          {
            featureType: 'road.highway',
            elementType: 'labels.text.fill',
            stylers: [
              {
                color: color1
              }
            ]
          },
          {
            featureType: 'transit',
            elementType: 'geometry',
            stylers: [
              {
                color: color2
              }
            ]
          },
          {
            featureType: 'transit.station',
            elementType: 'labels.text.fill',
            stylers: [
              {
                color: color1
              }
            ]
          },
          {
            featureType: 'water',
            elementType: 'geometry',
            stylers: [
              {
                color: color3
              }
            ]
          },
          {
            featureType: 'water',
            elementType: 'labels.text.fill',
            stylers: [
              {
                color: color3
              }
            ]
          },
          {
            featureType: 'water',
            elementType: 'labels.text.stroke',
            stylers: [
              {
                color: color1
              }
            ]
          }
        ]
    	};
	
      // create map
      var map = new google.maps.Map($el[0], args);

      // add a markers reference
      map.markers = [];

      // add markers
      $markers.each(function() {
        add_marker($(this), map);
	    });

      // center map
      center_map(map);

      return map;
    }

    function add_marker($marker, map) {

      var latlng = new google.maps.LatLng($marker.attr('data-lat'), $marker.attr('data-lng'));

    	// create marker
    	var marker = new google.maps.Marker({
    		position : latlng,
    		map      : map
    	});

    	// add to array
    	map.markers.push(marker);

    	// if marker contains HTML, add it to an infoWindow
    	if ($marker.html()) {

    		// create info window
    		var infowindow = new google.maps.InfoWindow({
          content: $marker.html()
    		});

    		// show info window when marker is clicked
        google.maps.event.addListener(marker, 'click', function() {
          infowindow.open(map, marker);
    		});
    	}
    }

    function center_map(map) {

    	var bounds = new google.maps.LatLngBounds();

    	// loop through all markers and create bounds
    	$.each(map.markers, function(i, marker) {
    		
        var latlng = new google.maps.LatLng(marker.position.lat(), marker.position.lng());
    		bounds.extend(latlng);

    	});

    	// only 1 marker?
    	if (map.markers.length == 1) {

    		// set center of map
  	    map.setCenter(bounds.getCenter());
  	    map.setZoom(15);

    	} else {

    		// fit to bounds
    		map.fitBounds(bounds);

    	}

    }

    var map = null;

    $(document).ready(function() {
      $('.contact__map__object').each(function() {
        
        // create map
        map = new_map($(this));

      });

      // resize the map when the viewport is changed
      google.maps.event.addDomListener(window, 'resize', function() {
        
        var center = map.getCenter();
        
        google.maps.event.trigger(map, 'resize');
        map.setCenter(center);

      });
      
    });

  };

  function initCookies() {
    
    var cookies = Cookies.get('landhocoworking-cookies-accepted');

    if (cookies == 1) {

      $('.cookies').removeClass('cookies--not-accepted');

    } else {

      Cookies.set('landhocoworking-cookies-accepted', '0', {expires: 365});

      $('.cookies').addClass('cookies--not-accepted');

      $('.cookies .button--accept').click(function(event) {
        $('.cookies').removeClass('cookies--not-accepted');
        Cookies.set('landhocoworking-cookies-accepted', '1', {expires: 365});
      });

    };

  };

  init();

})(jQuery);
