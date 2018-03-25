

jQuery(function ($) {
    "use strict";

    /* ========================================================================= */
    /*	Page Preloader
     /* ========================================================================= */

    window.onload = function () {
        document.getElementById('loading-mask').style.display = 'none';
    }

    /* =========================================================================== */
    /*	FitVids js
     /* =========================================================================== */

    $(".media-wrapper").fitVids();


    /* ========================================================================= */
    /*	Nice Scroll - Custom Scrollbar
     /* ========================================================================= */

    var nice = $("html").niceScroll({
        cursorborderradius: 0,
        cursorwidth: "8px",
        cursorfixedheight: 150,
        cursorcolor: "#6CB670",
        zindex: 9999,
        cursorborder: 0,
    });


    /* ========================================================================= */
    /*	Scroll Up / Back to top
     /* ========================================================================= */

    $(window).scroll(function () {
        if ($(window).scrollTop() > 400) {
            $("#scrollUp").fadeIn(200);
        } else {
            $("#scrollUp").fadeOut(200);
        }
    });

    $('#scrollUp').click(function () {
        $('html, body').stop().animate({
            scrollTop: 0
        }, 1500, 'easeInOutExpo');
    });


    /* ========================================================================= */
    /*	Post image slider
     /* ========================================================================= */

    $("#post-thumb, #gallery-post").owlCarousel({

        navigation: true,
        pagination: false,
        slideSpeed: 800,
        autoHeight: true,
        paginationSpeed: 800,
        singleItem: true,
        navigationText: ["<i class='fa fa-angle-left fa-2x'></i>", "<i class='fa fa-angle-right fa-2x'></i>"]

    });

    /* ========================================================================= */
    /*	Menu item highlighting
     /* ========================================================================= */


    $("#navigation").sticky({
        topSpacing: 0
    });

    $('#nav').onePageNav({
        currentClass: 'current',
        changeHash: false,
        scrollSpeed: 1500,
        scrollThreshold: 0.5,
        filter: '',
        easing: 'easeInOutExpo'
    });



    /* ========================================================================= */
    /*	Fix Slider Height
     /* ========================================================================= */

    var slideHeight = $(window).height();

    $('#slitSlider, .sl-slider, .sl-content-wrapper').css('height', slideHeight);

    $(window).resize(function () {
        'use strict',
                $('#slitSlider, .sl-slider, .sl-content-wrapper').css('height', slideHeight);
    });



    /* ========================================================================= */
    /*	Timer count
     /* ========================================================================= */

    (function () {
        var count = {
            initialized: false,
            initialize: function () {
                if (this.initialized)
                    return;
                this.initialized = true;
                this.build();
            },
            build: function () {
                this.animations();
            },
            animations: function () {
                // Count To
                $(".counters-item [data-to]").each(function () {
                    var $this = $(this);
                    $this.appear(function () {
                        $this.countTo({});
                    }, {
                        accX: 0,
                        accY: -150
                    });
                });
            },
        };
        count.initialize();
    })();


    /* ========================================================================= */
    /*	Skills Chart
     /* ========================================================================= */

    $(".chart").appear(function () {
        $(".chart").easyPieChart({
            easing: "easeOutBounce",
            barColor: "#6CB670",
            size: "150",
            lineWidth: 15,
            animate: 2e3,
            onStep: function (e, t, n) {
                $(this.el).find(".percent").text(Math.round(n))
            }
        })
    });

    /* ========================================================================= */
    /*	Portfolio Filtering Hook
     /* =========================================================================  */

    $('#og-grid').mixItUp(); // Portfolio filter

    Grid.init(); //Portfolio Grid Expand


    $('#contact_submit_login').click(function (e) {

        e.preventDefault();

        var error = false;
        var name = $('#name').val();
        var pass = $('#pass').val();

        if (name.length == 0) {
            var error = true;
            $('#name').css("border-color", "#D8000C");
        } else {
            $('#name').css("border-color", "#666");
        }
        if (pass.length == 0) {
            var error = true;
            $('#pass').css("border-color", "#D8000C");
        } else {
            $('#pass').css("border-color", "#666");
        }

        if (error == false) {

            $('#contact-form-login').submit();
        }
    });

    $('#contact-submit-save-information').click(function (e) {

        //stop the form from being submitted
        e.preventDefault();

        /* declare the variables, var error is the variable that we use on the end
         to determine if there was an error or not */
        var error = false;
        var email = $('#email').val();

        if (email.indexOf('@') == '-1') {
            var error = true;
            $('#email').css("border-color", "#D8000C");
        } else {
            $('#email').css("border-color", "#666");
        }
        //now when the validation is done we check if the error variable is false (no errors)
        if (error == false) {

         /*   $.post("Controller/UpdateCompany.php", $("#contact-form-save-information").serialize(), function (result) {
                //and after the ajax request ends we check the text returned
                console.log(result);
                if (result == 'sent') {
                    console.log("llego");
                } else {
                    
                }
            });*/
            $('#contact-form-save-information').submit();
        }
    });


});

