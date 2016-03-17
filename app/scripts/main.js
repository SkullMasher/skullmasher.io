jQuery(document).ready(function() {
  'use strict';

  console.log('  XXXXX  ');
  console.log(' XXXXXXX ');
  console.log('XXXXXXXXX');
  console.log('X  XXX  X');
  console.log('X   X   X');
  console.log('XXXXXXXXX');
  console.log(' XXX XXX ');
  console.log(' XXXXXXX ');
  console.log(' X X X X ');

  console.log('Hello There !');

  // Getting my age dynamically
  var myAge = function() {

    var myBirthday = new Date('March 18, 1992 00:45:00');
    var today = new Date();

    return ( today.getFullYear() - myBirthday.getFullYear() );

  };

  $('.skullAge').append( myAge() + ' ans.' );

  // Init Masonry
  $('.grid').masonry({
    // options
    itemSelector: '.grid-item',
    isFitWidth: true,
    gutter: 10,
    transitionDuration: '1s'
  });


});
