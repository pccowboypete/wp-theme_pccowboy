<?php 



class XWP_MenuHTMLHelper{
	
	//get nav menu
	public static function get_nav_menu($themeLocation, $depth = 0, $echo = true, $withULwrap = true, $paramArgs = NULL){
		$args = array(
				'theme_location' => $themeLocation,
				'container' => false,
				'echo' => false,
				'items_wrap' => '%3$s',
				'depth' => $depth
		);
	
		$output =  strip_tags(wp_nav_menu($args),'<a><li>');  //display all primary menu links with only a and li tag
	
	
	
	
		if($echo){echo $output;}
	
		return  $output;
	}//END FUNCTION get_nav_menu
	
	
	
}


















?>