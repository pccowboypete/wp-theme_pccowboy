var  i = 0;
// jQuery to collapse the navbar on scroll
function collapseNavbar() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
}

function fadeInPage() {
	$("#main-container").fadeIn( "slow");
}

function fadeInSection(selector){
	
	var top_of_object = $(selector).offset().top;
	var bottom_of_object = top_of_object + $(selector).outerHeight();
	
	
	var top_of_window = $(document).scrollTop();
	var bottom_of_window = top_of_window + $(window).height();
    
    
    $(".jdebug").text(i++);
    
    if( 
    		( top_of_object < (bottom_of_window - 400) )
    		
    		
    ){
    	//if the opacity is 0
    	if ($(selector).children(".container").css("opacity")==0){
    		//show the section
        	$(selector).children(".container").fadeTo(100,1);
        }
    	
    }else{
    	
    	//if the opacity is 1
    	//hide the section
		$(selector).children(".container").fadeTo(500,0);
    	
    }
    
    

}





$(window).scroll(collapseNavbar);






$(document).ready(collapseNavbar);
$(document).ready(fadeInPage);




$(window).scroll( function(){
	
	fadeInSection("#portfolio");
	
	
	
	
	
}

);


