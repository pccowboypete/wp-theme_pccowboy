<?php 

class XWP_Menu{
	protected $title = "";
	protected  $permalink = "";
	
	function __get($propertyName){
		return $this->$propertyName;
	}

	function __set($propertyName, $value){
		$this->$propertyName = $value;
	}
	
	function get_anchor(){
		return "#" . $this->title;
	}
	
}



abstract class  XWP_Item{
	protected $title = "";
	protected  $permalink = "";
	protected  $excerpt = "";
	protected $content = "";
	protected  $edit_link;
	protected $thumbnail_small_url = "";
	protected $thumbnail_banner_url = "";
	protected $thumbnail_medium_wide_url = "";
	protected $thumbnail_fullsize_url = "";


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






class XWP_Page extends XWP_Item{
	protected $parents = "";
	protected  $childs = "";
	protected  $pageID = "";
}

class XWP_Post extends XWP_Item{
	protected  $categoryName = "";
	protected  $categoryID = "";
}























































//factories
require_once 'XWP_MenuFactory.php';
require_once 'XWP_PostFactory.php';
require_once 'XWP_PageFactory.php';


require_once 'XWP_Util.php';


//HTMLHelpers
require_once 'XWP_MenuHTMLHelper.php';
require_once 'XWP_PostHTMLHelper.php';
require_once 'XWP_PageHTMLHelper.php';




?>