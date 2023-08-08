
(function ($) {

  // Cache the selectors
  var $menuToggle = $(".menu-toggle"),
      $backToTop = $('a.back_to_top'),
      $components = $('header#main, nav, section, .home_journal, .home_recipes, .journals, .view_more, .journal'),
      $menuItemHasChildren = $("li.menu-item-has-children > a"),
      $window = $(window),
      amountScrolled = 100;

  // Menu Toggle
  $menuToggle.click(function() {
    $('nav.mobile, .overlay').fadeToggle();
    $('header').toggleClass("open");
    $(this).toggleClass("open");
    $(this).add('body').toggleClass("open fixed-position");
  });

  // SVG as Images
  $(document).ready(function(){
    activate('img[src*=".svg"]');

    function activate(string){
      $(string).each(function(){
        var $img = $(this);
        var imgID = $img.attr('id');
        var imgClass = $img.attr('class');
        var imgURL = $img.attr('src');

        $.get(imgURL, function(data) {
          var $svg = $(data).find('svg');
          if(imgID) $svg = $svg.attr('id', imgID);
          if(imgClass) $svg = $svg.attr('class', imgClass+' replaced-svg');
          $svg = $svg.removeAttr('xmlns:a');
          $img.replaceWith($svg);
        }, 'xml');
      });
    }
  });
  
  document.addEventListener('DOMContentLoaded', function() {
      const tableCells = document.querySelectorAll('td');
  
      tableCells.forEach(td => {
          const content = td.textContent.trim();
          const value = parseInt(content, 10);
  
          // Check if the content was a number by comparing it with its parsed value
          if (content == value) {
              if (value >= 0 && value <= 39) {
                  td.classList.add('poor');
              } else if (value >= 40 && value <= 86) {
                  td.classList.add('average');
              } else if (value >= 87 && value <= 100) {
                  td.classList.add('good');
              }
          }
          // If it's not a number, do nothing and leave the td as is
      });
  });

  // Animation Javascript
  $components.waypoint({
    handler: function() {
      $(this.element).addClass("visible");
    },
    offset: '70%'
  });
  
  $(document).ready(function() {
     
     // Initialize waypoints
     var waypointInit = function() {
         $('header, nav, section').waypoint({
             handler: function() {
                 $(this.element).addClass("visible");
             },
             offset: '70%'
         });
     }
     
     // Call the function to initialize the waypoints
     waypointInit();
 
 });

  // Mobile Menu 
  $menuItemHasChildren.after("<div class='sub-toggle'></div>");

  $(".sub-toggle").click(function() {
    $(this).siblings('ul').toggle();
    $(this).toggleClass("open");
  });

})(jQuery);
