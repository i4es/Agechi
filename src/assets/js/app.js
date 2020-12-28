import $ from 'jquery';
import whatInput from 'what-input';

window.$ = $;

import Foundation from 'foundation-sites';
// If you want to pick and choose which modules to include, comment out the above and uncomment
// the line below
//import './lib/foundation-explicit-pieces';
import 'slick-carousel';
import '@fancyapps/fancybox';

$(document).foundation();

$(document).ready(function() {
  $('.ag-jobs-list').slick({
    infinite: true,
    centerMode: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    nextArrow: '<button class="ag-jobs-list__prev"><i class="fas fa-long-arrow-alt-left"></i></button>',
    prevArrow: '<button class="ag-jobs-list__next"><i class="fas fa-long-arrow-alt-right"></i></button>',
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

