(function ($) 
{
    "use strict";
    $(document).ready(
        function () 
        {
            $(".jbcategory").owlCarousel({
                autoplay: false,
                autoplayTimeout: 2000,
                loop: true,
                margin: 15,
                dots: true,
                nav: false,
               autoplayHoverPause:true,
                responsive: {
                    0: {
                        items: 1,
                        center: false
                    },
                    600: {
                        items: 2,
                        center: false
                    },
                    750: {
                        items:3,
                        center: false
                    },
                    960: {
                        items: 4,
                    },
                    1170: {
                        items: 4,
                    },
                    1300: {
                        items: 4,
                    }
                }
            });
           
        }
     );
})(jQuery);



