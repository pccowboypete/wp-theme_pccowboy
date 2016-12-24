
<?php 
/**
 * This file is for XWP_Link class definition
 *
 *
 * @author 		PcCowboy
 * @package 	XWP/classes
 * @version     1
 * 
 * @property	string 				$title 		Link Title
 * @property	string 				$url 		Link URL
 * @property	array(XWP_Link) 	$children 	Link children
 * @property	XWP_Link 			$parent 	Link parent
 * 
 * @method		string				get_anchor	Returns the link anchor		
 * 
 */

if ( ! defined( 'ABSPATH' ) ) {
	//silence is golden :D
	exit; // Exit if accessed directly
}
?>
<?php

class XWP_Menu{
	
	protected $links = array();
	
	function __construct(){
		$links = array();
	}

	
	function add($paramLink){
		array_push($this->links, $paramLink);
	}
	
	function remove($linkID){
		return "not yet implemented";
	}
	
	function get_links(){
		return $this->links;
	}
}


?>