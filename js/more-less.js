/* more-less.js */ 

$(function(){
  $("a.show").click(function() {
    $('#intro').toggle(400);
    $('#welcome').toggle(400);
  });
});