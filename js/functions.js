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

document.addEventListener('DOMContentLoaded', function() {
    // Attach event listeners to buttons
    document.getElementById('select-essentials').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent default anchor behavior
        setSelectValue('essentials-gbp100-month');
        scrollToForm();
    });

    document.getElementById('select-advanced').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent default anchor behavior
        setSelectValue('advanced-gbp200-month');
        scrollToForm();
    });

    document.getElementById('select-premium').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent default anchor behavior
        setSelectValue('premium-gbp400-month');
        scrollToForm();
    });

    // Function to set the select field value
    function setSelectValue(value) {
        var selectField = document.getElementById('nf-field-6'); // Select field ID
        if (selectField) {
            selectField.value = value;
            // Trigger change event to notify Ninja Forms of the change
            var event = new Event('change');
            selectField.dispatchEvent(event);
        } else {
            console.error('nf-field-6 not found.');
        }
    }

    // Function to scroll to the form section
    function scrollToForm() {
        var formSection = document.getElementById('form'); // Replace 'form' with your form section ID
        if (formSection) {
            formSection.scrollIntoView({ behavior: 'smooth' });
        } else {
            console.error('Form not found.');
        }
    }
});