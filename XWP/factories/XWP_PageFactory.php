<?php 
/**
 * Factory Class for XWP_Page
 * 
 *
 *
 * @author 		PcCowboy
 * @package 	XWP/factories
 * @version     1
 * 
 * @method		array(XWP_Page)				get_pages($params) returns the pages		
 * 
 */

if ( ! defined( 'ABSPATH' ) ) {
	//silence is golden :D
	exit; // Exit if accessed directly
}
?>

<?php 




class XWP_PageFactory{

	public static function get_pages($params){
	
		$numberOfPages = ( isset($params['number_of_pages']) && !empty($params['number_of_pages']) )
		? $params['number_of_pages'] : -1 ;
	
		$parentPage = ( isset($params['parent_page']) && !empty($params['parent_page']) )
		? $params['parent_page'] : -1 ;
	
		$sortOrder = ( isset($params['sort_order']) && !empty($params['sort_order']) )
		? $params['sort_order'] : 'desc' ;
	
	
		$args = array(
				'sort_order' => $sortOrder,
				'sort_column' => 'post_date',
				'hierarchical' => 0,
				'post_parent' => $parentPage,
				'post_type' => 'page',
				'post_status' => 'publish',
				'posts_per_page' => $numberOfPages,
				'no_found_rows'=> true
		);
	
		$recent_projects = new WP_Query( $args);
	
		$result = array();
	
		$tempPage = null;
	
	
		if($recent_projects->have_posts()){
			while($recent_projects->have_posts()){
				$recent_projects->the_post();
	
				$tempPage = new XWP_Page();
	
				$tempPage->permalink = get_the_permalink();
				$tempPage->title = get_the_title();
				$tempPage->excerpt = get_the_excerpt();
				$tempPage->content = get_the_content();
				$tempPage->thumbnail_small_url = get_the_post_thumbnail_url($tempPage->pageID,'small-thumbnail');
				$tempPage->thumbnail_medium_wide_url = get_the_post_thumbnail_url($tempPage->pageID,'medium-thumbnail-wide');
				$tempPage->thumbnail_banner_url = get_the_post_thumbnail_url($tempPage->pageID, 'banner-image');
				$tempPage->thumbnail_fullsize_url = get_the_post_thumbnail_url();
	
					
	
				array_push($result, $tempPage);
			}
		}
	
		wp_reset_query();
	
		return $result;
	}
}





















?>