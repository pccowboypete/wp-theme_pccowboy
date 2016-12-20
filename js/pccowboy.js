
var scrollCount = 0;
var scrollThreshold = 3;

// jQuery to collapse the navbar on scroll
function collapseNavbar() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
}


// jQuery for fade effect of page on load
function fadeInPage() {
	$("#main-container").fadeTo(500, 1);
}


//jQuery for fade effect on section scroll
function fadeInSection(selector){
	
	 $(".fade-section").each(
	   function(){
		   
		   	var top_of_object = $(this).offset().top;
			var bottom_of_object = top_of_object + $(this).outerHeight();
			var top_of_window = $(window).scrollTop();
			var bottom_of_window = top_of_window + $(window).height();
			
			
		    //if enough top part of the section is visible
			//and if enough bottom part of the section is visible
		    if( top_of_object < (bottom_of_window - 350) && !((top_of_window + 300) > bottom_of_object) ){
		    	//if the opacity is 0
		    	if ($(this).children(".container").css("opacity")==0){
		    		//show the section
		        	$(this).children(".container").fadeTo(600,1);
		        }
		    	
		    }
		    //else if 
		    else{
		    	
		    	//if the opacity is 1
		    	if ($(this).children(".container").css("opacity")==1){
		    		//hide the section
		    		$(this).children(".container").fadeTo(500,0);
		    	}
		    }
	   
	   }
	 
	 );
	

}




////events

$(document).ready(function(){
	
	//plug collapseNavbar
	collapseNavbar();
	
	//plug fadeEffects on sections
	fadeInSection(".fade-section");
	
	//plug the fade effect on window
	fadeInPage();
	
});


$(window).scroll( function(){
	
	
	scrollCount++;
	if(scrollCount > scrollThreshold){
		
		//plug collapseNavbar
		collapseNavbar();
		
		//plug fadeEffects on sections
		fadeInSection(".fade-section");
		
		 
		
	
		scrollCount = 0;
	}
	
	
	
	
	
	
	
}

);


