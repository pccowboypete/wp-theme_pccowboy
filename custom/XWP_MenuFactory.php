<?php 


class XWP_MenuFactory{
	public static function get_menus($params){
		$result = array();
		$tempMenu = null;
		
		
		$themeLocation = ( isset($params['theme_location']) && !empty($params['theme_location']) )
		? $params['theme_location'] : '' ;
		
		$theme_locations = get_nav_menu_locations();
		
		$menu_obj = get_term( $theme_locations[$themeLocation], 'nav_menu' );

	
		$menu_items = wp_get_nav_menu_items($menu_obj->term_id);
		
		foreach($menu_items as $menu_item){
			
			$tempMenu = new XWP_Menu( $menu_item->title , $menu_item->url );
			
			array_push($result, $tempMenu);
		}
	
		//wp_reset_query();
	
		return $result;
		
	}
}






















?>