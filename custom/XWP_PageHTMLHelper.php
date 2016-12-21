<?php 


class XWP_PageHTMLHelper{

	/*##### GET PAGES HTML FUNCTIONS #####*/
	
	
	public static function get_recent_projects_for_frontpage($echo = true, $numberofprojects = 5){
	
		$output = "";
	
	
		$recent_projects = XWP_PageFactory::get_pages( array('parent_page' => PAGE_PROJECTS, 'number_of_pages' => $numberofprojects) );
	
		$i = 1;
		foreach ($recent_projects as $project){
				
				
			$output .= '<div class="col-sm-4 portfolio-item" style="text-align:center;">'  . "\n";
			$output .= '<a href="'. $project->permalink .'" class="portfolio-link" data-toggle="modal">' . "\n";
				
			$output .= '<img src="' . $project->thumbnail_medium_wide_url .'" class="img-responsive" alt="">' . "\n";
				
			$output .= '<div class="project-title"><h3>'. $project->title .'</h3></div>' . "\n";
			$output .= '</a>' . "\n";
			$output .= '</div>' . "\n" . "\n";;
				
			$i++;
		}
	
		if($echo){
			echo $output;
		}
	
		return $output;
	}//END FUNCTION get_recent_projects_for_frontpage
	

	
	
}

























?>