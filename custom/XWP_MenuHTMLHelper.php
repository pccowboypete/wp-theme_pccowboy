<?php 



class XWP_MenuHTMLHelper{
	
	//get nav menu
	public static function get_nav_menu_for_frontpage($themeLocation, $echo = true){
		$args = array(
				'theme_location' => $themeLocation,
		);

		$result = "";
		$menu_items = XWP_MenuFactory::get_menus($args);
		
		
		foreach ($menu_items as $menu){
			$result .= '<li><a href="' .  $menu->get_anchor() .'">';
			$result .= $menu->title;
	
			$result .= '</li></a>';
			
			
		}
	
	
	
	
		if($echo){echo $result;}
	
		return  $result;
	}//END FUNCTION get_nav_menu
	
	
	
}


















?>