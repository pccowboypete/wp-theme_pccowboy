<?php 





class XWP_PostFactory{
	
	
	public static function get_posts($params){
	
		$numberOfPosts = ( isset($params['number_of_posts']) && !empty($params['number_of_posts']) )
		? $params['number_of_posts'] : -1 ;
	
		$category = ( isset($params['category']) && !empty($params['category']) )
		? $params['category'] : -1 ;
	
		$sortOrder = ( isset($params['sort_order']) && !empty($params['sort_order']) )
		? $params['sort_order'] : 'desc' ;
	
		$args = array(
				'cat' => $category,
				'sort_order' => $sortOrder,
				'sort_column' => 'post_date',
				'hierarchical' => 0,
				'post_type' => 'post',
				'post_status' => 'publish',
				'posts_per_page' => $numberOfPosts,
				'no_found_rows'=> true
		);
	
		$recent_posts = new WP_Query($args);
	
		$result = array();
	
		$tempPost = null;
	
	
		if($recent_posts->have_posts()){
			while($recent_posts->have_posts()){
				$recent_posts->the_post();
	
				$tempPost = new XWP_Post();
	
				$tempPost->permalink = get_the_permalink();
				$tempPost->title = get_the_title();
				$tempPost->excerpt = get_the_excerpt();
				$tempPost->content = get_the_content();
	
				array_push($result, $tempPost);
			}
		}
	
		wp_reset_query();
	
		return $result;
	
	}
}



















?>