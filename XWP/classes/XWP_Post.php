<?php 
/**
 * Class for page item
 * Extends XWP_Item
 *
 *
 * @author 		PcCowboy
 * @package 	XWP/classes
 * @version     1
 * 
 * @property	array(XWP_Page) 			$parents	 	Page parent
 * @property	array(XWP_Page) 			$children 		Page children
 * @property	string						$pageID 		Page ID		
 * 
 */

if ( ! defined( 'ABSPATH' ) ) {
	//silence is golden :D
	exit; // Exit if accessed directly
}
?>

<?php 

class XWP_Post extends XWP_Item{
	protected  $categoryName = "";
	protected  $categoryID = "";
}



?>