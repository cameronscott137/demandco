<?php 
/** Register the Project Custom Post Type
==========================================**/
	add_action('init', 'ncs_init');
        function ncs_init() {
            /* Insights */
            $insight_labels = array(
                'name' => _x('Insights', 'post type general name'),
                'singular_name' => _x('Insight','post type singular name'),
                'all_items' => __('All insights'),
                'add_new' => _x('Add new insight', 'Work'),
                'add_new_item' => __('Add new insight'),
                'edit_item' => __('Edit insight'),
                'new_item' => __('New insight'),
                'view_item' => __('View insight'),
                'search_items' => __('Search in insights'),
                'not_found' => __('No insights found'),
                'not_found_in_trash' => __('No insights found in trash'),
                'parent_item_colon' => ''
            );

            $args = array(
                'labels' => $insight_labels,
                'public' => true,
                'public_queryable' => true,
                'show_ui' => true,
                'query_var' => true,
                'rewrite' => true,
                'capability_type' => 'post',
                'hierarchical' => false,
                'taxonomies' => array('category'),
                'menu_position' => 5,
                'supports' => array('title','editor', 'author', 'thumbnail', 'excerpt','comments','revisions', 'custom-fields'),
                'has_archive' => 'insights'
            );

            register_post_type('ncs_insights',$args);

            /* Press */
                $press_labels = array(
                'name' => _x('Press', 'post type general name'),
                'singular_name' => _x('Press','post type singular name'),
                'all_items' => __('All Press'),
                'add_new' => _x('Add new press', 'Work'),
                'add_new_item' => __('Add new press'),
                'edit_item' => __('Edit press'),
                'new_item' => __('New press'),
                'view_item' => __('View press'),
                'search_items' => __('Search in press'),
                'not_found' => __('No press found'),
                'not_found_in_trash' => __('No press found in trash'),
                'parent_item_colon' => ''
            );

            $args = array(
                'labels' => $press_labels,
                'public' => true,
                'public_queryable' => true,
                'show_ui' => true,
                'query_var' => true,
                'rewrite' => true,
                'capability_type' => 'post',
                'hierarchical' => false,
                'taxonomies' => array('category','post_tag'),
                'menu_position' => 5,
                'supports' => array('title','editor', 'author', 'thumbnail', 'excerpt','comments','revisions', 'custom-fields'),
                'has_archive' => 'press'
            );

            register_post_type('ncs_press',$args);
        }

// Add new Custom Post Type icons
add_action( 'admin_head', 'ncs_project_icon' );
function ncs_project_icon() {
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
add_action( 'init', 'ncs_create_taxonomies', 0 );
function ncs_create_taxonomies() 
{   // Market
    $medium_labels = array(
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
    ));
}

?>