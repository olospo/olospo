(function ($) {

  // Cache the selectors
  var $menuToggle = $(".menu-toggle"),
      $backToTop = $('a.back_to_top'),
      $components = $('header#main, nav, section'),
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

  // Animation Javascript
  $components.waypoint({
    handler: function() {
      $(this.element).addClass("visible");
    },
    offset: '90%'
  });
  
  $(document).ready(function() {
     
    // Initialize waypoints
    var waypointInit = function() {
      $('header, nav, section').waypoint({
        handler: function() {
          $(this.element).addClass("visible");
        },
        offset: '90%'
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
  
  $(document).ready(function() {
      // Select field and its container
      var $selectField = $('#nf-field-6');
      var $container = $('#nf-field-6-container');
  
      if ($selectField.length && $container.length) {
          // Function to update the class of the container
          function updateContainerClass() {
              var selectedValue = $selectField.val();
              // Remove all previously added classes
              $container.removeClass('essentials-gbp100-month advanced-gbp200-month premium-gbp400-month guidance-needed');
              // Add the new class based on the selected value
              $container.addClass(selectedValue);
          }
  
          // Add event listener for change event
          $selectField.on('change', updateContainerClass);
  
          // Initialize the container class based on the default selected option
          updateContainerClass();
      } else {
          console.error('Select field or container not found.');
      }
  });

})(jQuery);

// Accordian
function accordion_ajax() {
  var accItem = document.getElementsByClassName('accordionItem');
  var accHD = document.getElementsByClassName('accordionItemHeading');
  for (i = 0; i < accHD.length; i++) {
      accHD[i].addEventListener('click', toggleItem, false);
  }
  function toggleItem() {
      var itemClass = this.parentNode.className;
      for (i = 0; i < accItem.length; i++) {
        // accItem[i].className = 'accordionItem close';
        this.parentNode.className = 'accordionItem close';
      }
      if (itemClass == 'accordionItem close') {
        this.parentNode.className = 'accordionItem open';
      }
  }
}
accordion_ajax();