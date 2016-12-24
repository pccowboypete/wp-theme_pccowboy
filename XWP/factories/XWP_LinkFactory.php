<?php 
/**
 * Factory Class for XWP_Link
 * 
 *
 *
 * @author 		PcCowboy
 * @package 	XWP/factories
 * @version     1
 * 
 * @method		array(XWP_Link)				get_links($params) returns the links		
 * 
 */

if ( ! defined( 'ABSPATH' ) ) {
	//silence is golden :D
	exit; // Exit if accessed directly
}
?>


<?php 


class XWP_LinkFactory{
	public static function get_links($params){
		$result = array();
		$tempLink = null;
		
		
		$themeLocation = ( isset($params['theme_location']) && !empty($params['theme_location']) )
		? $params['theme_location'] : '' ;
		
		$theme_locations = get_nav_menu_locations();
		
		$menu_obj = get_term( $theme_locations[$themeLocation], 'nav_menu' );

	
		$menu_items = wp_get_nav_menu_items($menu_obj->term_id);
		
		foreach($menu_items as $menu_item){
			
			$tempLink = new XWP_Link( $menu_item->title , $menu_item->url );
			
			array_push($result, $tempLink);
		}
	
		//
	
		return $result;
		
	}
}






















?>