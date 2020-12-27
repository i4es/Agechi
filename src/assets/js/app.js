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

$('.ag-jobs-list').slick({
  infinite: true,
  centerMode: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  nextArrow: '<button class="ag-jobs-list__prev">&#8592</button>',
  prevArrow: '<button class="ag-jobs-list__next">&#8594</button>',
});
