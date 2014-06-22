<?php 
/** Register the Project Custom Post Type
==========================================**/
	add_action('init', 'dmd_init');
        function dmd_init() {
            /* Insights */
            $case_study_labels = array(
                'name' => _x('Case Studies', 'post type general name'),
                'singular_name' => _x('Case Study','post type singular name'),
                'all_items' => __('All case studies'),
                'add_new' => _x('Add new case study', 'Work'),
                'add_new_item' => __('Add new case study'),
                'edit_item' => __('Edit case study'),
                'new_item' => __('New case study'),
                'view_item' => __('View case study'),
                'search_items' => __('Search in case studies'),
                'not_found' => __('No case studies found'),
                'not_found_in_trash' => __('No case studies found in trash'),
                'parent_item_colon' => ''
            );

            $args = array(
                'labels' => $case_study_labels,
                'public' => true,
                'public_queryable' => true,
                'show_ui' => true,
                'query_var' => true,
                'rewrite' => true,
                'capability_type' => 'post',
                'hierarchical' => false,
                'taxonomies' => array('category'),
                'menu_position' => 5,
                'supports' => array('title','editor', 'thumbnail', 'excerpt','revisions'),
                'has_archive' => 'case-studies'
            );

            register_post_type('case-studies',$args);
        }

// Add new Custom Post Type icons
add_action( 'admin_head', 'dmd_project_icon' );
function dmd_project_icon() {
?>
    <style type="text/css" media="screen">
        #menu-posts-fb_projects .wp-menu-image {
            background: url(<?php bloginfo('url') ?>/wp-content/themes/images/resources_icon.png) no-repeat 6px !important;
        }
        .icon32-posts-fb_projects {
            background: url(<?php bloginfo('url') ?>/wp-content/themes/images/resources_icon2x.png) no-repeat !important;
        }
    </style>
<?php } 

// Add custom taxonomies
add_action( 'init', 'dmd_create_taxonomies', 0 );
function dmd_create_taxonomies() 
{   // Market
    /*$medium_labels = array(
        'name' => _x( 'Medium', 'taxonomy general name' ),
        'singular_name' => _x( 'Medium', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search in medium' ),
        'all_items' => __( 'All media' ),
        'most_used_items' => null,
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __( 'Edit medium' ), 
        'update_item' => __( 'Update medium' ),
        'add_new_item' => __( 'Add new medium' ),
        'new_item_name' => __( 'New medium' ),
        'menu_name' => __( 'Medium' ),
    );
    register_taxonomy('medium', array('_press') ,array(
        'hierarchical' => true,
        'labels' => $medium_labels,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'media' )
    ));*/
}

?>