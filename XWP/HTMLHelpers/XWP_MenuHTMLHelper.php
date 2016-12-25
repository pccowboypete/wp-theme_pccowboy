<?php 



class XWP_MenuHTMLHelper{
	
	//get nav menu
	public static function get_nav_menu_for_frontpage($themeLocation, $echo = true){
		$args = array(
				'theme_location' => $themeLocation,
		);

		$result = "";
		$links = XWP_MenuFactory::get_menus($args)->get_links();
		
		
		foreach ($links as $link){
			
			$result .= '<li><a>';
			$result .= $link->title;
	
			$result .= '</li></a>';
			
			
		}
	
	
	
	
		if($echo){echo $result;}
	
		return  $result;
	}//END FUNCTION get_nav_menu
	
	
	
}


















?>