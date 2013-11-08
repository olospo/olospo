/* more-less.js */ 

 $(function(){
		 $("a.show").click(function() {
		     $('#intro').toggle(400);
		     $('#welcome').toggle(400);     
		 });
		 
		 function brand() {
			 $('#brand').toggle(200);
		     $('#dev').hide(200), $('#design').hide(200), $('#cms').hide(200);  
		 }
		 
		 $("span.brand-show").click(function() { brand(); });
		 $(".icon.brand").click(function() { brand(); });
		 
		 function design() {
			 $('#design').toggle(200); 
		     $('#dev').hide(200), $('#brand').hide(200), $('#cms').hide(200); 
		 }
		 
		 $("span.design-show").click(function() { design(); });
		 $(".icon.design").click(function() { design(); });
		 
		 function dev() {
			 $('#dev').toggle(200); 
		     $('#design').hide(200), $('#brand').hide(200), $('#cms').hide(200); 
		 }
		 
		 $("span.dev-show").click(function() { dev(); });
		 $(".icon.dev").click(function() { dev(); });
		 
		 function cms() {
			 $('#cms').toggle(200); 
		     $('#dev').hide(200), $('#brand').hide(200), $('#design').hide(200); 
		 }
		 
		 $("span.cms-show").click(function() { cms(); });
		 $(".icon.cms").click(function() { cms(); });
	 
	 });