<?php 




class XWP_Util{

	//return the currecnt URL
	public static function current_url(){
		global $wp;
		$current_url = home_url(add_query_arg(array(),$wp->request));
		return $current_url;
	}//END FUNCTION
	
	
	//return the currecnt page title
	public static function current_page_title(){
		global $wp;
		$current_page_title = $wp->title;
		return $current_page_title;
	}//END FUNCTION
	
	
	public static function get_the_meta_description_by_id($post_id){
		$the_post = get_post($post_id); //Gets post ID
		$the_excerpt = $the_post->post_content; //Gets post_content to be used as a basis for the excerpt
		$excerpt_length = 120; //Sets excerpt length by word count
		$the_excerpt = strip_tags(strip_shortcodes($the_excerpt)); //Strips tags and images
		$words = explode(' ', $the_excerpt, $excerpt_length + 1);
	
		if(count($words) > $excerpt_length) :
		array_pop($words);
		array_push($words, '…');
		$the_excerpt = implode(' ', $words);
		endif;
	
		return $the_excerpt;
	}
	
	public static function get_the_tags($echo = true){
		$output = '';
		$posttags = get_the_tags();
	
		if ($posttags) {
			foreach($posttags as $tag) {
				$output .= $tag->name . ', ';
			}
		}
	
		$output = trim($output);
	
		if($echo){echo $output;}
		return  $output;
	
	}

}



















?>