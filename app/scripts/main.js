jQuery(document).ready(function() {
  console.log('Hello There !');

  // Get viewport width & height
  var $viewportHeight = $(window).width(); // jshint ignore:line
  var $viewportWidth = $(window).height(); // jshint ignore:line

  // Set viewport width & height on load
  $('.slide').width( $(window).width() );
  $('.slide').height( $(window).height() );

  // Set viewport width & height on window resize
  $(window).resize(function(){

    $('.slide').width( $(window).width() );
    $('.slide').height( $(window).height() );

  });

  // Getting my age dynamically
  var myAge = function() {
    
    var myBirthday = new Date('March 18, 1992 00:45:00');
    var today = new Date();

    return ( today.getFullYear() - myBirthday.getFullYear() );

  };
  
  $('.skullAge').append( myAge() + ' ans.' );

  $('.grid').masonry({
    // options
    itemSelector: '.grid-item',
    columnWidth: 200
  });



});

