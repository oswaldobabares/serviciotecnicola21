
jQuery(function ($) {
    "use strict";

    window.onload = function () {
        document.getElementById('loading-mask').style.display = 'none';
    }

    $(".media-wrapper").fitVids();

    var nice = $("html").niceScroll({
        cursorborderradius: 0,
        cursorwidth: "8px",
        cursorfixedheight: 150,
        cursorcolor: "#6CB670",
        zindex: 9999,
        cursorborder: 0,
    });
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

    var slideHeight = $(window).height();

    $('#slitSlider, .sl-slider, .sl-content-wrapper').css('height', slideHeight);

    $(window).resize(function () {
        'use strict',
                $('#slitSlider, .sl-slider, .sl-content-wrapper').css('height', slideHeight);
    });

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
        e.preventDefault();
        var error = false;
        var email = $('#email').val();
        if (email.indexOf('@') == '-1') {
            var error = true;
            $('#email').css("border-color", "#D8000C");
        } else {
            $('#email').css("border-color", "#666");
        }
        if (error == false) {

            $('#contact-form-save-information').submit();
        }
    });
    
    $('#submit-save-imageList').click(function (e) {
        e.preventDefault();
        var error = false;
        var imageText = $('#imageList').val();
       if (imageText.length == 0) {
            var error = true;
            $('#imageList').css("border-color", "#D8000C");
        } else {
            $('#imageList').css("border-color", "#666");
        }
        if (error == false) {

         $.post("Controller/saveImageList.php", $("#contact-form-save-listImage").serialize(), function (result) {
                console.log(result)
                var li = '<li><a href="#" class="filter" data-filter=".'+imageText+'">'+imageText+'</a></li>'
                    $('#containerListImage').append(li); 
            });
           
        }
        
    });


});

