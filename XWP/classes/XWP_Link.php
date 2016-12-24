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



class XWP_Link{
	protected $title = "";
	protected  $url = "";
	protected $children = array();
	protected $parent = null;
	
	function __construct($title, $url){
		$this->title = $title;
		$this->url = $url;
	}
	
	function __get($propertyName){
		return $this->$propertyName;
	}

	function __set($propertyName, $value){
		$this->$propertyName = $value;
	}
	
	function get_anchor(){
		return '#' . strtolower($this->title);
	}
}






?>