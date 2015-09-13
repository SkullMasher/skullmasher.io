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

  $('.grid').masonry({
    // options
    itemSelector: '.grid-item',
    columnWidth: 200
  });

});

