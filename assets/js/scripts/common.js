
  
//       // Layout Isotope after each image loads
//       $grid.imagesLoaded().progress( function() {
//         $grid.isotope('layout');
//       });
  
  
  
//     // Filter items on button click
//     $('#my-category').on( 'click', 'a', function() {
//         var filterValue = $(this).attr('data-filter');
  
//         $('#cpt-wrap').isotope({ filter: filterValue });
  
//         $(this).parent('div').find('a').removeClass('active');
//         $(this).addClass('active');
//     });

// });

// filterable();

const filterTime = (($) => {
    'use strict';

    const filterable = () => {
       var $grid =  $('.filter-grid').isotope({
            itemSelector: '.project-single',
            percentPosition: true,
            layoutMode: 'fitRows',
        });


        $('#filter-controls').on('click', 'button', function(){
            var filterValue = $(this).attr('data-filter');

            $('').isotope({filter: filterValue});

            $(this).parent('div').find('a').removeClass('active');

            $(this).addClass('active');
        })


    }
    const ready = () => {
        filterable();
    };
  
    /**
     * Only expose the ready function to the world
     */
    return {
        ready: ready
    }
  
  })(jQuery);
  
  jQuery(filterTime.ready);
  