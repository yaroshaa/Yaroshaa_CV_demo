
var $ = jQuery.noConflict();

$(document).ready(function ()  {

    $(".center").slick({
        dots: false,
        infinite: true,
        centerMode: true,
        centerPadding: '0px',
        slidesToShow:6,
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

        },{

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
    if($(window).scrollTop() > 50) {
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
        beforeStart: function() {
            console.log('begin scrolling');
        },
        onComplete: function() {
            console.log('done scrolling');
        }

    });

    $('#scrollUp').singlePageNav({

        // offset: $('.single-page-nav').outerHeight(),
        offset: 120,
        filter: ':not(.external)',
        updateHash: true,
        beforeStart: function() {
            console.log('begin scrolling');
        },
        onComplete: function() {
            console.log('done scrolling');
        }

    });


    checkScrollPosition();

    // nav bar
    $('.nav-toggle').click(function(){
        $('.head-menu').toggleClass('show');
    });

    $('.nav-toggle a').click(function(){
        $('.head-menu').removeClass('show');
    });
});

$(window).on("scroll", function() {
    checkScrollPosition();
});

$(document).on("ready", function () {

    // $(function () {
    //     $.scrollUp({
    //     });
    // });
});

$(document).ready(function() {

    function S() {
        const lang_title = $(".lang-icon-title");
        lang_title.mouseenter(function () {
            const parent_lang_title_id = $(this).parent().attr('id');
            $('#' + parent_lang_title_id + ' .lang-icon-small').addClass('active');
            $('#' + parent_lang_title_id + ' > .lang-icon-description').addClass('active');
        });

        lang_title.mouseleave(function () {
            const parent_lang_title_id = $(this).parent().attr('id');
            $('#' + parent_lang_title_id + ' .lang-icon-small').removeClass('active');
            $('#' + parent_lang_title_id + ' > .lang-icon-description').removeClass('active');
        });
    }
S();
});

$(document).ready(function() {
    // init Isotope
    let $grid = $('.grid-portfolio').isotope({
        itemSelector: '.portfolio-item',
        layoutMode: 'fitRows',
        getSortData: {
            category: '[data-category]',
            weight: function( itemElem ) {
                let weight = $( itemElem ).find('.weight').text();
                return parseFloat( weight.replace( /[\(\)]/g, '') );
            }
        },
        filter: '.new_work'
    });

    $('#portfolio-filters').on( 'click', '.filter-item', function() {
        let filterValue = $( this ).attr('data-filter');
        $grid.isotope({ filter: filterValue });
    });

    // change is-checked class on buttons
    $('#portfolio-filters').each( function( i, portfolioFilters ) {
        let $portfolioFilters = $( portfolioFilters );
        $portfolioFilters.on( 'click', '.filter-item', function() {
            $portfolioFilters.find('.is-checked').removeClass('is-checked');
            $( this ).addClass('is-checked');
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
            let div = $('.portfolio-item');
            if (!div.is(e.target) && div.has(e.target).length === 0) {
                div.removeClass('click');
            }

        });
        setTimeout(function () {
            let div = $('.portfolio-item ');
            div.removeClass('click');
            console.log('1');
        }, 5000);
    });
});




