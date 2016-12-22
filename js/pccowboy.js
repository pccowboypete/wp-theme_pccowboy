

// jQuery to collapse the navbar on scroll
function collapseNavbar() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
}//END collapseNavbar


// jQuery for fade effect of page on load
function fadeInPage() {
	$("#main-container").fadeTo(1000, 1);
}//END fadeInPage


//jQuery for fade effect on section scroll
function fadeInSection(selector){
	
	 $(".fade-section").each(
	   function(){
		   
		   	var top_of_object = $(this).offset().top;
			var top_of_window = $(window).scrollTop();
			
			
			var obj_top_position =  top_of_object - top_of_window;
			var window_percentage = $(window).height() * 0.75;
		
			
			
		    //if enough top part of the section is visible
			//and if enough bottom part of the section is visible
		    if( obj_top_position < window_percentage ){
		    	//if the opacity is 0
		    	if ($(this).children(".container").css("opacity")==0){
		    		//show the section
		        	$(this).children(".container").fadeTo(600,1);
		        }
		    	
		    }	   
	   }
	 
	 );
	

}//END fadeInSection






$(document).ready(function(){
	$(".fade-section").children(".container").css('opacity', '0.0');
	//plug collapseNavbar
	collapseNavbar();
	
	
	//plug the fade effect on window
	fadeInPage();
	fadeInSection(".fade-section");
	
});//END $(document).ready


$(window).scroll( function(){
	
	//plug collapseNavbar
	collapseNavbar();
	
	//plug fadeEffects on sections
	fadeInSection(".fade-section");
	
	
}

);//END $(window).scroll



$(
	function() {
	  $('a[href*="#"]:not([href="#"])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html, body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }//END if (target.length).....
	    }//END if (location.pathname.replace(/^\//,'').......
	  });//END $(a).click
	}//END Function
);//END


