/**
 * File general.js.
 *
 */
 jQuery( document ).ready( function( $ ) {
   $("#map-hide").on('click', function(event){
     event.preventDefault()
     $("#map-hide").addClass('hidden').removeClass('visible')
     $("#map_overlay").removeClass('hidden')
   })
   $("#map-show").on('click', function(event){
     event.preventDefault()
     $("#map-hide").addClass('visible').removeClass('hidden')
     $("#map_overlay").addClass('hidden')
   })
   $("#phone__call-to-action__link").on('click', function(event){
     event.preventDefault()
     $("#call-pop").removeClass('hidden')
   })
   $("#call-pop__close").on('click', function(event){
     event.preventDefault()
     $("#call-pop").addClass('hidden')
   })

   $('body').on( 'scroll', function(){
     if($('body').scrollTop() > 1530) {
         $('.quote__img').addClass('visible')
     } else if($('body').scrollTop() > 870) {
           $('.about__row--second').addClass('visible')
       } else if($('body').scrollTop() > 500) {
          $('.about__row--first').addClass('visible')
          $('.about__row--second').removeClass('visible')
      } else if($('body').scrollTop() > 1) {
        $('.site-header').addClass('scrolled')
        $('.about__row--first').removeClass('visible')
      } else {
        $('.site-header').removeClass('scrolled')
      }
   })
   $('.introduction__column').addClass('visible')
 })
