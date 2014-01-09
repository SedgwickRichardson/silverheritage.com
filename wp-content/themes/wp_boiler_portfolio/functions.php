<?php // custom child functions

function get_ID_by_slug($page_slug) {
    $page = get_page_by_path($page_slug);
    if ($page) {
        return $page->ID;
    } else {
        return null;
    }
}
add_action('init', 'team_register');
function team_register() {
  $labels = array(
      'name' => _x('Team', 'post type general name'),
      'singular_name' => _x('Team', 'post type singular name'),
      'add_new' => _x('Add New', 'rep'),
      'add_new_item' => __('Add New Team Member'),
      'edit_item' => __('Edit Team Member'),
      'new_item' => __('New Team Member'),
      'view_item' => __('View Team Member'),
      'search_items' => __('Search Team Members'),
      'not_found' =>  __('Nothing found'),
      'not_found_in_trash' => __('Nothing found in Trash'),
      'parent_item_colon' => ''
  );
  $args = array(
      'labels' => $labels,
      'public' => true,
      'publicly_queryable' => false,
      'show_ui' => true,
      'query_var' => true,
      'menu_icon' => '',
      'rewrite' => true,
      'capability_type' => 'post',
      'hierarchical' => true,
      'menu_position' => null,
      'supports' => array('title', 'editor', 'page-attributes')
  );
  register_post_type( 'team' , $args );
}
add_action('init', 'project_register');
function project_register() {
  $labels = array(
      'name' => _x('Projects', 'post type general name'),
      'singular_name' => _x('Project', 'post type singular name'),
      'add_new' => _x('Add New', 'rep'),
      'add_new_item' => __('Add New Project'),
      'edit_item' => __('Edit Project'),
      'new_item' => __('New Project'),
      'view_item' => __('View Project'),
      'search_items' => __('Search Projects'),
      'not_found' =>  __('Nothing found'),
      'not_found_in_trash' => __('Nothing found in Trash'),
      'parent_item_colon' => ''
  );
  $args = array(
      'labels' => $labels,
      'public' => true,
      'publicly_queryable' => false,
      'show_ui' => true,
      'query_var' => true,
      'menu_icon' => '',
      'rewrite' => true,
      'capability_type' => 'post',
      'hierarchical' => true,
      'menu_position' => null,
      'supports' => array('title', 'editor', 'page-attributes', 'thumbnail')
  );
  register_post_type( 'project' , $args );
}

add_action( 'wp_ajax_nopriv_get_lightbox', 'myajax_get_lightbox' );
add_action( 'wp_ajax_get_lightbox', 'myajax_get_lightbox' );

function myajax_get_lightbox() {

  $my_id = $_POST["id"];
	$post = get_post($my_id);
	
	$output .= "<h5>".$post->post_title."</h5>";
	$output .= "<h6>".get_post_meta($post->ID, 'subtitle', true)."</h6>";
  $output .= get_the_post_thumbnail($post->ID, 'full'); 	
  $output .= "<p>".$post->post_content."</p>";

	print $output;

	exit;
}
?>