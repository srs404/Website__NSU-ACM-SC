$(document).ready(function () {

    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            document.getElementById("header_part").style.top = "0";
        } else {
            document.getElementById("header_part").style.top = "-100%";
        }
    }
    //sticky navbar

    $("body").niceScroll({
      cursorcolor: "#rgb(0, 199, 255, 0.7)",
      cursorwidth: "15px",
      cursorborder: 'none',
      cursorborderradius: 'none',
  });
  //Scroll Bar

    $('#navbarSupportedContent a').click(function (tag) {
        tag.preventDefault();
        var hash = this.hash;
        var position = $(hash).offset().top;
        $('html').animate({
            scrollTop: position,
        }, 800);
    })
    //Smooth Scroll

    $('.about_video').venobox();

    //VenoBox Ends

    $('.testimonial_slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
        speed: 1200,
        infinite: true,
        centerMode: true,
        dots: true,
        arrows: true,
        prevArrow: '<i class="flaticon-left-arrow-1"></i>',
        nextArrow: '<i class="flaticon-right-arrow-1"></i>',
        responsive: [
            {
                breakpoint: 1800,
                settings: {
                  centerMode: true,
                  centerPadding: '40px',
                  slidesToShow: 2
                }
              },
            {
              breakpoint: 991,
              settings: {
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
              }
            },
            {
              breakpoint: 767,
              settings: {
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 575,
              settings: {
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
        
    });
    //Testimonial Slider

    $('.blog_slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: '<i class="fas fa-chevron-left"></i>',
        nextArrow: '<i class="fas fa-chevron-right"></i>',
        responsive: [
            {
              breakpoint: 991,
              settings: {
                slidesToShow: 2
              }
            },
            {
              breakpoint: 767,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 575,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
    });
    //Blog Part Slider
    $('.news_slider').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        vertical: true,
        verticalSwiping: true,
        prevArrow: '<i class="fas fa-angle-up"></i>',
        nextArrow: '<i class="fas fa-angle-down"></i>',
    });
    //NEWS Part Slider


    $('.gallery_slider').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: '<i class="flaticon-left-arrow"></i>',
        nextArrow: '<i class="flaticon-right-arrow"></i>',
        
    });
    //Gallery Part Slider
    $('.venobox').venobox({
        frameheight: 768,
    });
    //Gallery Venobox

    // Slick Ends

    $(".team_tab").tabs({
        show: {
            effect: "slide",
            direction: "left",
            duration: 200,
            easing: "easeOutBack"
        },
        hide: {
            effect: "slide",
            direction: "right",
            duration: 200,
            easing: "easeInQuad"
        }
    });
    //Team Tab ends

    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });
    //Counter Up

    $(window).scroll(function () {
        if ($(this).scrollTop() > 0) {
            $('header').addClass('sticky');
        } else {
            $('header').removeClass('sticky');
        }
    })
});