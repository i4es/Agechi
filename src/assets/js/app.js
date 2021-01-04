import $ from 'jquery';
import whatInput from 'what-input';

window.$ = $;

import Foundation from 'foundation-sites';
// If you want to pick and choose which modules to include, comment out the above and uncomment
// the line below
//import './lib/foundation-explicit-pieces';
import 'slick-carousel';
import '@fancyapps/fancybox';

// ViewScroll
import './plugins/viewscroller/jquery.easing.min';
import './plugins/viewscroller/jquery.mousewheel.min';
import './plugins/viewscroller/viewScroller.min';

$(document).foundation();

$(document).ready(function() {
  $('.ag-jobs-list').slick({
    infinite: true,
    centerMode: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    nextArrow: '<button class="ag-jobs-list__prev"><i class="fas fa-long-arrow-alt-left"></i></button>',
    prevArrow: '<button class="ag-jobs-list__next"><i class="fas fa-long-arrow-alt-right"></i></button>',
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          centerMode: true,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          centerMode: true,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          centerMode: true,
        }
      }
    ]
  });

  $('.ag-team-list').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    centerMode: true,
    nextArrow: '<button class="ag-team-list__prev"><i class="fas fa-long-arrow-alt-left"></i></button>',
    prevArrow: '<button class="ag-team-list__next"><i class="fas fa-long-arrow-alt-right"></i></button>',
  });
});

$(window).ready(function () {

  function capitalizeFirstLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
  }

  function pad(d) {
    return (d < 10) ? '0' + d.toString() : d.toString();
  }

  const checkActive = function () {
    const link = window.location.href.split('#').pop();
    const sectionName = capitalizeFirstLetter(link);

    $('.top-bar-right ul li a').each(
      function () {
        ($(this).attr('href') == '#' + link) ? $(this).addClass('active') : '';
      }
    );
    $('section').each(
      function (index) {

        const sectionNumber = pad(index + 1);
        ($(this).attr('vs-anchor').toLowerCase() ==  link) ? $('.ag-section-counter__number').text(sectionNumber) : '';
      }
    )

    document.querySelector('.ag-section-counter__title').innerHTML = sectionName;
  }

  checkActive();

  $('.mainbag').viewScroller({
    useScrollbar: false,
    beforeChange: function () {
      $('.top-bar-right ul li a').removeClass('active');
      return false;
    },
    afterChange: function () {
      checkActive();
    },
  });
});

