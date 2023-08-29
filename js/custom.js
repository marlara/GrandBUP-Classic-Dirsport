/**
 * @file /js/custom.js
 *
 * Copyright (c) Lara Marziali
 * Distributed under the GNU GPL v3. For full terms see the file LICENSE.
 *
 * @brief Handle JavaScript functionality unique to this theme.
 */

$(document).ready(function(){
    $('.responsive-slicker').slick({
        dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 3,
  arrow: true,
  responsive: [
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
    });
  });

$(document).ready(function(){
  $('.journal_summary > h2, .journal_summary > p').wrapAll('<div id="summary_text"/>');
  $('.journal_summary').prepend('<img id="summary_image" src="https://journals.buponline.com/public/journals/3/journalThumbnail_it_IT.png" />')
});