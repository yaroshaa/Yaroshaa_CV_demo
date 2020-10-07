/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/src/assets/js/app.js":
/*!****************************************!*\
  !*** ./resources/src/assets/js/app.js ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports) {



/***/ }),

/***/ "./resources/src/assets/js/partials/main.js":
/*!**************************************************!*\
  !*** ./resources/src/assets/js/partials/main.js ***!
  \**************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

var $ = jQuery.noConflict();
$(document).ready(function () {
  $(".center").slick({
    dots: false,
    infinite: true,
    centerMode: true,
    centerPadding: '0px',
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    mobileFirst: false,
    useCSS: true,
    responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        infinite: false
      }
    }, {
      breakpoint: 800,
      settings: {
        slidesToShow: 3,
        dots: false
      }
    }, {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        dots: false
      }
    }, {
      breakpoint: 400,
      settings: {
        slidesToShow: 1,
        dots: false
      }
    }, {
      breakpoint: 300,
      settings: "unslick" // destroys slick

    }]
  });
});

function checkScrollPosition() {
  if ($(window).scrollTop() > 50) {
    $(".fixed-header").addClass("scroll");
  } else {
    $(".fixed-header").removeClass("scroll");
  }
}

$(document).ready(function () {
  // Single page nav
  $('#head-menu').singlePageNav({
    // offset: $('.single-page-nav').outerHeight(),
    offset: 120,
    filter: ':not(.external)',
    updateHash: true,
    beforeStart: function beforeStart() {
      console.log('begin scrolling');
    },
    onComplete: function onComplete() {
      console.log('done scrolling');
    }
  });
  $('#scrollUp').singlePageNav({
    // offset: $('.single-page-nav').outerHeight(),
    offset: 120,
    filter: ':not(.external)',
    updateHash: true,
    beforeStart: function beforeStart() {
      console.log('begin scrolling');
    },
    onComplete: function onComplete() {
      console.log('done scrolling');
    }
  });
  checkScrollPosition(); // nav bar

  $('.nav-toggle').click(function () {
    $('.head-menu').toggleClass('show');
  });
  $('.nav-toggle a').click(function () {
    $('.head-menu').removeClass('show');
  });
});
$(window).on("scroll", function () {
  checkScrollPosition();
});
$(document).on("ready", function () {// $(function () {
  //     $.scrollUp({
  //     });
  // });
});
$(document).ready(function () {
  function S() {
    var lang_title = $(".lang-icon-title");
    lang_title.mouseenter(function () {
      var parent_lang_title_id = $(this).parent().attr('id');
      $('#' + parent_lang_title_id + ' .lang-icon-small').addClass('active');
      $('#' + parent_lang_title_id + ' > .lang-icon-description').addClass('active');
    });
    lang_title.mouseleave(function () {
      var parent_lang_title_id = $(this).parent().attr('id');
      $('#' + parent_lang_title_id + ' .lang-icon-small').removeClass('active');
      $('#' + parent_lang_title_id + ' > .lang-icon-description').removeClass('active');
    });
  }

  S();
});
$(document).ready(function () {
  // init Isotope
  var $grid = $('.grid-portfolio').isotope({
    itemSelector: '.portfolio-item',
    layoutMode: 'fitRows',
    getSortData: {
      category: '[data-category]',
      weight: function weight(itemElem) {
        var weight = $(itemElem).find('.weight').text();
        return parseFloat(weight.replace(/[\(\)]/g, ''));
      }
    },
    filter: '.new_work'
  });
  $('#portfolio-filters').on('click', '.filter-item', function () {
    var filterValue = $(this).attr('data-filter');
    $grid.isotope({
      filter: filterValue
    });
  }); // change is-checked class on buttons

  $('#portfolio-filters').each(function (i, portfolioFilters) {
    var $portfolioFilters = $(portfolioFilters);
    $portfolioFilters.on('click', '.filter-item', function () {
      $portfolioFilters.find('.is-checked').removeClass('is-checked');
      $(this).addClass('is-checked');
    });
  });
  $('.portfolio-item').click(function () {
    $(this).siblings().removeClass('click');

    if (!$(this).hasClass('click')) {
      $(this).addClass('click');
    } else {
      $(this).removeClass('click');
    }

    $(document).mouseup(function (e) {
      var div = $('.portfolio-item');

      if (!div.is(e.target) && div.has(e.target).length === 0) {
        div.removeClass('click');
      }
    });
    setTimeout(function () {
      var div = $('.portfolio-item ');
      div.removeClass('click');
      console.log('1');
    }, 5000);
  });
});

/***/ }),

/***/ "./resources/src/assets/scss/app.scss":
/*!********************************************!*\
  !*** ./resources/src/assets/scss/app.scss ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!******************************************************************************************************************************!*\
  !*** multi ./resources/src/assets/js/partials/main.js ./resources/src/assets/js/app.js ./resources/src/assets/scss/app.scss ***!
  \******************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /home/aleksey/web/yaroshcv2/resources/src/assets/js/partials/main.js */"./resources/src/assets/js/partials/main.js");
__webpack_require__(/*! /home/aleksey/web/yaroshcv2/resources/src/assets/js/app.js */"./resources/src/assets/js/app.js");
module.exports = __webpack_require__(/*! /home/aleksey/web/yaroshcv2/resources/src/assets/scss/app.scss */"./resources/src/assets/scss/app.scss");


/***/ })

/******/ });