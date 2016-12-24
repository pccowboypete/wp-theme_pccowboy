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


class XWP_MenuFactory{
	
	
	public static function get_menus($params){
		$result = new XWP_Menu();
		
		
		$links = XWP_LinkFactory::get_links($params);
		
		foreach ($links as $link){
			$result->add($link);
		}
		return $result;
		
	}
}


?>