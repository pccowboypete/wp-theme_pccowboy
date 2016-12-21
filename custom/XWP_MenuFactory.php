<?php 


class XWP_MenuFactory{
	public static function get_menus($param){
		$result = array();
		$tempMenu = null;
		
		
		$themeLocation = ( isset($params['theme_location']) && !empty($params['theme_location']) )
		? $params['theme_location'] : '' ;

		
		$args = array(
				'theme_location' => $themeLocation,
				'container' => false,
				'echo' => false,
				'items_wrap' => '%3$s',
				
		);
		
		
		
		
		wp_reset_query();
	
		return $result;
		
	}
}






















?>