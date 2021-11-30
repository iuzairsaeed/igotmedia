// sticky social
$(document).scroll(function() {
    "use strict";
    var y = $(this).scrollTop();
    if (y > 200) {
        $('.sticky-container').fadeIn();
    } else {
        $('.sticky-container').fadeOut();
    }

    if (y >= 70) {
        $(".header-main").addClass("stickyyy");
    } else {
        $(".header-main").removeClass("stickyyy");
    }
    if (y > 0) {
        $('.floating_wrap').addClass('visible');
        $('.floatbutton').addClass('visible');


    } else {
        $('.floating_wrap').removeClass('visible');
        $('.floatbutton').removeClass('visible');

    }

});
// sticky social end



var a = $('body').width();
if (a <= 768) {
    $('.btn-pack, .m-chat, .blink').attr('href', 'tel:+12132212842');
    //   $('.pkg-box a.button').removeAttr('onClick');
    //console.log('ne'+a);
}


$(".outer-show").click(function() {
    $('body').toggleClass('show');
    $('.floatingform-sec').toggleClass('show');
    $('.overlayfloatingform').toggleClass('show');
});


$(".clickbutton").click(function() {
    $('.overlayfloatingform').removeClass('show');
});


$(document).ready(function() {
    $(".clickbutton").click(function() {
        $('.floatbutton').toggleClass("active");
        $('.crossplus').toggleClass("rotate");
    });

    $(".topformswitch").click(function() {
        $('.topformwrap').toggleClass("active");
    });


    //*****************************
    // Mobile Navigation
    //*****************************
    $('.mobile-nav-btn').click(function() {
        $('.mobile-nav-btn, .mobile-nav, .app-container').toggleClass('active');
    });
    $('.firstlevel li a').click(function() {
        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
            $(this).siblings('ul').slideUp();
        } else {
            $('.firstlevel li a').removeClass('active');
            $(this).addClass('active');
            $('.dropdown').slideUp();
            $(this).siblings('ul').slideDown();
        }
    });

    $('.mainnav > li > a').click(function() {
        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
            $(this).parents('li').children('.firstlevel').slideUp();
        } else {
            $(this).addClass('active');
            $(this).parents('li').children('.firstlevel').slideDown();
            $(this).parents('li').siblings('li').children('a').removeClass('active');
            $(this).parents('li').siblings('li').children('.firstlevel').slideUp();
        }
    });

});

//=========== FLOATING FORM END


$(".pckkslider").slick({
    dots: false,
    arrows: true,
    infinite: false,
    speed: 1000,
    slidesToShow: 4,
    autoplay: false,
    autoplaySpeed: 4000,
    adaptiveHeight: true,
    responsive: [{
        breakpoint: 776,
        settings: {
            slidesToShow: 1,
            dots: true
        }
    }]

});

// Tabbing 
//*****************************

$('[data-targetit]').on('click', function() {
    $(this).siblings().removeClass('current');
    $(this).addClass('current');
    var target = $(this).data('targetit');
    $('.' + target).siblings('[class^="tabs"]').removeClass('current');
    $('.' + target).addClass('current');
    $('.slick-slider').slick('setPosition', 0);

});


////// thumb gallery slider end




$(function() {
    //Slim Scroller

    $.mCustomScrollbar.defaults.theme = "light-1"; //set "light-2" as the default theme
    $(".list-scroll,.subscription-list").mCustomScrollbar({
        scrollButtons: {
            enable: true
        },
        callbacks: {
            onTotalScroll: function() {
                addContent(this)
            },
            onTotalScrollOffset: 100,
            alwaysTriggerOffsets: false
        }
    });


});


$(".serviceicons").slick({
    dots: false,
    arrows: true,
    infinite: true,
    speed: 1000,
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 2000,
    responsive: [{
        breakpoint: 776,
        settings: {
            slidesToShow: 2
        }
    }]

});

$(".partnerslider").slick({
    dots: false,
    arrows: false,

    infinite: true,
    speed: 1000,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    adaptiveHeight: true,
    responsive: [{
        breakpoint: 769,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 1
        }
    }]

});



$(".pckgslidersec").slick({
    dots: false,
    arrows: true,
    speed: 1000,
    slidesToShow: 3,
    autoplay: false,
    slidesToScroll: 1,
    infinite: false,
    responsive: [{
        breakpoint: 769,
        settings: {
            dots: true,
            arrows: false,
            autoplay: false,
            slidesToShow: 1,
            slidesToScroll: 1
        }
    }]

});


////// tabs custom (place nav and tabs anywhere separately)
$('.tabs-custom-nav a').click(function(event) {
    $(this).closest('li').siblings('li').children('a').removeClass('current');
    $(this).addClass('current');
    $(this.hash).closest('.general').children('div.tab-content-panel:not(:hidden)').hide();
    $(this.hash).show();
    event.preventDefault();
    $('.sliderxs').slick('setPosition');
});
////// tabs custom end



////// tabs generic (nav and tabs in main div)
$('.tab-custom .tab-custom-nav a').click(function(event) {
    $(this).closest('li').siblings('li').children('a').removeClass('current');
    $(this).addClass('current');
    $(this).closest('.tab-custom').children('div.tab-content-panel:not(:hidden)').hide();
    $(this.hash).show();
    event.preventDefault();
    $('.sliderxs').slick('setPosition');
});
////// tabs generic end

// intel Tel Input
let ip;
let ip_value;
$("#phone-country,#phone-coun,#pro-phone,.phone-number").intlTelInput({

    // allowDropdown: false,
    // autoHideDialCode: false,
    // autoPlaceholder: "off",
    // dropdownContainer: "body",
    // excludeCountries: ["us"],
    // formatOnDisplay: false,
    geoIpLookup: function(callback) {
        $.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
            var countryCode = (resp && resp.country) ? resp.country : "";
            callback(countryCode);
            ip = resp.ip;


        });
    },
    initialCountry: "auto",
    nationalMode: true,
    separateDialCode: true,
    // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
    // placeholderNumberType: "MOBILE",
    // preferredCountries: ['cn', 'jp'],
    // utilsScript: "<?php echo $basesurl;?>js/utils.js"
});



setTimeout(function() {
    console.log(ip);

    $('input[name="pc"]').val($('.selected-dial-code').text());
    $('input[name="cip"]').val(ip);
    console.log(ip);
    $('input[name="ctry"]').val($('.country-list .country.active .country-name').text());
}, 3000);



$('body').delegate('.country', 'click', function() {
    $('input[name="pc"]').val($(this).find('.dial-code').text());

    var oldString2 = $('.selected-flag').attr('title').toUpperCase();
    var newString12 = oldString2.split(':', 1)[0];
    $('input[name="ctry"]').val(newString12);
});

//pack code
function getURLParameter(name) {
    return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search) || [null, ''])[1].replace(/\+/g, '%20')) || null;
}
var a = getURLParameter('pack');

$('#packages option:eq(' + a + ')').prop('selected', true);





$('.eggoffer').click(function() {
    $('.mypopup-wrap').toggle();
});

$('.closebutton').click(function() {
    $('.mypopup-wrap').hide();
});