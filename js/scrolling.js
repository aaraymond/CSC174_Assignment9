// From: https://github.com/trungk18/Change-Navigation-Active-Class-on-Page-Scroll
$(document).ready(function () {

            // From:    Smooth Scrolling by CHRIS COYIER, updated JANUARY 31, 2016
        //          https://css-tricks.com/snippets/jquery/smooth-scrolling
        $(function() {
          $('a[href*="#"]:not([href="#"])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
              if (target.length) {
                $('html, body').animate({
                  scrollTop: target.offset().top
                }, 250);
                return false;
              }
            }
          });
        });

        $(window).scroll(function () {
            onScrollHandle();
        });

        function onScrollHandle() {
            

            //Get current scroll position
            var currentScrollPos = $(document).scrollTop();

            //Iterate through all node
            $('.right > li > a').each(function () {
                var curLink = $(this);
                var refElem = $(curLink.attr('href'));
                var navBarHeight = $('#top-nav').height()
                //Compare the value of current position and the every section position in each scroll
                if (refElem.position().top - navBarHeight <= currentScrollPos && refElem.position().top - navBarHeight + refElem.height() > currentScrollPos) {
                    //Remove class active in all nav
                    $('#top-nav > ul > li').removeClass("active");
                    //Add class active
                    curLink.parent().addClass("active");
                }
                else {
                    curLink.parent().removeClass("active");
                }
            });
        }
    });