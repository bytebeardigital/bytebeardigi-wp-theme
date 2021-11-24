const common = (($) => {
  'use strict';

  /**
   * Some function
   *
   * @since   1.0.0
   */
  const serviceSlider = () => {
    $('.service__slide').slick( {
      autoplay:true,
      slidesToShow: 2,
      slidesToScroll: 2,
      arrows: false,
      useCSS: false,
      speed: 3000,
      responsive: [
          {
              breakpoint: 800,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
      ]
  })
  };

  const portfolioSlider = () => {
    $('.portfolio__slide').slick( {
      autoplay:true,
      slidesToShow: 3,
      slidesToScroll: 3,
      rtl: true,
      arrows: false,
      useCSS: false,
      speed: 3000,
      responsive: [
          {
              breakpoint: 800,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
      ]
  })
  };

  /**
   * Fire events on document ready and bind other events
   *
   * @since   1.0.0
   */
  const ready = () => {
    serviceSlider();
    portfolioSlider();
  };

  /**
   * Only expose the ready function to the world
   */
  return {
      ready: ready
  }

})(jQuery);

jQuery(common.ready);
