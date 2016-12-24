<?php 
/**
 * This file is for including all XWP needed files
 *
 *
 * @author 		PcCowboy
 * @package 	XWP
 * @version     1
 */

if ( ! defined( 'ABSPATH' ) ) {
	//silence is golden :D
	exit; // Exit if accessed directly
}
?>

<?php 
//Abstracts
require_once 'abstracts/XWP_Item.php';

//Classes
require_once 'classes/XWP_Link.php';
require_once 'classes/XWP_Menu.php';
require_once 'classes/XWP_Page.php';
require_once 'classes/XWP_Post.php';

//factories
require_once 'factories/XWP_LinkFactory.php';
require_once 'factories/XWP_MenuFactory.php';
require_once 'factories/XWP_PostFactory.php';
require_once 'factories/XWP_PageFactory.php';

//utilities
require_once 'utilities/XWP_Util.php';


//HTMLHelpers
require_once 'HTMLHelpers/XWP_MenuHTMLHelper.php';
require_once 'HTMLHelpers/XWP_PageHTMLHelper.php';
require_once 'HTMLHelpers/XWP_PostHTMLHelper.php';




?>