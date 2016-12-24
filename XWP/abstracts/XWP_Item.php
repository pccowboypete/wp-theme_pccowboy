<?php 
/**
 * Abstract class for post item
 *
 *
 * @author 		PcCowboy
 * @package 	XWP/abtracts
 * @version     1
 * 
 * @property	string 				$title	 		Item title
 * @property	string 				$permalink 		Item permalink
 * @property	string				$excerpt 		Item excerpt
 * @property	string				$content 		Item content
 * @property	string	 			$edit_link	 	Item edit_link
 * 
 * @property	string 				$featured_image-xxx	Item image url
 * 
 * @method		string				get_edit_link($textBefore, $textAfter)	
 * 									Returns the edit link with before and after options		
 * 
 */

if ( ! defined( 'ABSPATH' ) ) {
	//silence is golden :D
	exit; // Exit if accessed directly
}
?>


<?php 

abstract class  XWP_Item{
	protected $title = "";
	protected  $permalink = "";
	protected  $excerpt = "";
	protected $content = "";
	protected  $edit_link;
	
	protected $featured_image_xs_square_url = "";
	protected $featured_image_xs_wide_url = "";
	
	protected $featured_image_sm_square_url = "";
	protected $featured_image_sm_wide_url = "";
	
	protected $featured_image_md_square_url = "";
	protected $featured_image_md_wide_url = "";
	
	protected $featured_image_lg_square_url = "";
	protected $featured_image_lg_wide_url = "";
	
	protected $featured_image = "";


	function __construct(){

	}


	function __get($propertyName){
		return $this->$propertyName;
	}

	function __set($propertyName, $value){
		$this->$propertyName = $value;
	}

	public function get_edit_link($textBefore = "", $textAfter = ""){
		return $textBefore . $this->edit_link . $textAfter;
	}

}






?>