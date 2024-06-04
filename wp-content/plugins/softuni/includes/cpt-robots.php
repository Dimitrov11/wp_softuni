<?php
// Simple file for our CPT roots


// Procedure programming

/** 
 * We can use this approach in the register function below,
 * but for now is more sample
 * if ( ! function_exists( 'su_robots_cpt' ) ) {}
 */

/**
 * Register our Robots CPT
 * 
 * @return void
 */

function su_robots_cpt()
{
    $labels = array(
        'name'                  => _x( 'Robots', 'Post type general name', 'textdomain' ),
		'singular_name'         => _x( 'Robot', 'Post type singular name', 'textdomain' ),
		'menu_name'             => _x( 'Robots', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar'        => _x( 'Robot', 'Add New on Toolbar', 'textdomain' ),
		'add_new'               => __( 'Add New', 'textdomain' ),
		'add_new_item'          => __( 'Add New Robot', 'textdomain' ),
		'new_item'              => __( 'New Robot', 'textdomain' ),
		'edit_item'             => __( 'Edit Robot', 'textdomain' ),
		'view_item'             => __( 'View Robot', 'textdomain' ),
		'all_items'             => __( 'All Robots', 'textdomain' ),
		// 'search_items'          => __( 'Search Robots', 'textdomain' ),
		// 'parent_item_colon'     => __( 'Parent Robots:', 'textdomain' ),
		// 'not_found'             => __( 'No Robots found.', 'textdomain' ),
		// 'not_found_in_trash'    => __( 'No Robots found in Trash.', 'textdomain' ),
		// 'featured_image'        => _x( 'Robot Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
		// 'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		// 'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		// 'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		// 'archives'              => _x( 'Robot archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
		// 'insert_into_item'      => _x( 'Insert into Robot', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
		// 'uploaded_to_this_item' => _x( 'Uploaded to this Robot', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
		// 'filter_items_list'     => _x( 'Filter Robots list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
		// 'items_list_navigation' => _x( 'Robots list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
		// 'items_list'            => _x( 'Robots list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
    );

    $args = array(
        'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 
            'title', 
            'editor', 
            'author', 
            'thumbnail',
            'revisions', 
        ),
        // Gutenberg editor
        'show_in_rest'       => true
    );

    register_post_type( 'robot', $args );
}
add_action( 'init', 'su_robots_cpt' );


/**
 * Register our Robots CPT Taxonomy
 * 
 * @return void
 */
/**
 * Registers the `robot_category` taxonomy,
 * for use with 'post'.
 */
function robot_category_init() {
    register_taxonomy( 'robot-category', [ 'robot' ], [
            'hierarchical'          => true,
            'public'                => true,
            'show_in_nav_menus'     => true,
            'show_ui'               => true,
            'show_admin_column'     => false,
            'query_var'             => true,
            'rewrite'               => true,
            'capabilities'          => array(
                    'manage_terms' => 'edit_posts',
                    'edit_terms'   => 'edit_posts',
                    'delete_terms' => 'edit_posts',
                    'assign_terms' => 'edit_posts',
            ),
            'labels'                => array(
                    'name'                       => __( 'Robot categories', 'softuni' ),
                    'singular_name'              => _x( 'Robot category', 'taxonomy general name', 'softuni' ),
                    'search_items'               => __( 'Search Robot categories', 'softuni' ),
                    'popular_items'              => __( 'Popular Robot categories', 'softuni' ),
                    'all_items'                  => __( 'All Robot categories', 'softuni' ),
                    'parent_item'                => __( 'Parent Robot category', 'softuni' ),
                    'parent_item_colon'          => __( 'Parent Robot category:', 'softuni' ),
                    'edit_item'                  => __( 'Edit Robot category', 'softuni' ),
                    'update_item'                => __( 'Update Robot category', 'softuni' ),
                    'view_item'                  => __( 'View Robot category', 'softuni' ),
                    'add_new_item'               => __( 'Add New Robot category', 'softuni' ),
                    'new_item_name'              => __( 'New Robot category', 'softuni' ),
                    'separate_items_with_commas' => __( 'Separate robot categories with commas', 'softuni' ),
                    'add_or_remove_items'        => __( 'Add or remove robot categories', 'softuni' ),
                    'choose_from_most_used'      => __( 'Choose from the most used robot categories', 'softuni' ),
                    'not_found'                  => __( 'No robot categories found.', 'softuni' ),
                    'no_terms'                   => __( 'No robot categories', 'softuni' ),
                    'menu_name'                  => __( 'Robot categories', 'softuni' ),
                    'items_list_navigation'      => __( 'Robot categories list navigation', 'softuni' ),
                    'items_list'                 => __( 'Robot categories list', 'softuni' ),
                    'most_used'                  => _x( 'Most Used', 'robot-category', 'softuni' ),
                    'back_to_items'              => __( '&larr; Back to Robot categories', 'softuni' ),
            ),
            'show_in_rest'          => true,
            'rest_base'             => 'robot-category',
            'rest_controller_class' => 'WP_REST_Terms_Controller',
    ] );

}

add_action( 'init', 'robot_category_init' );

/**
 * Register Tags in the Robots CPT
 * 
 * @return void
 */
function robot_tag_init() {
    register_taxonomy( 'robot-tag', [ 'robot' ], array(
        'hierarchical'          => false,
        'show_in_rest'          => true,
        'labels'                => array(
            'name'                       => __( 'Robot Tags', 'softuni' ),
            'singular_name'              => _x( 'Robot Tag', 'taxonomy general name', 'softuni' ),
            'parent_item'                => __( 'Parent Robot Tag', 'softuni' ),
            'add_new_item'               => __( 'Add New Robot Tag', 'softuni' ),
            )
    ) );
}
add_action( 'init', 'robot_tag_init' );

/**
 * Register Robot Type CPT
 * 
 * @return void
 */
function robot_type_init() {
    $labels = array(
        'name'          => __( 'Robot Types', 'softuni' ),
        'singular_name' => _x( 'Robot Type', 'taxonomy general name', 'softuni' ),
        'add_new_item'  => __( 'Add New Robot Type', 'softuni' ),    
    );

    $args = array(
        'labels'       => $labels,
        'show_in_rest' => true,
    );

    register_taxonomy( 'robot-type', 'robot', $args );
};
add_action( 'init', 'robot_type_init' );

/**
* Sets the post updated messages for the `robot_category` taxonomy.
*
* @param  array $messages Post updated messages.
* @return array Messages for the `robot_category` taxonomy.
*/
function robot_category_updated_messages( $messages ) {

    $messages['robot-category'] = array(
            0 => '', // Unused. Messages start at index 1.
            1 => __( 'Robot category added.', 'softuni' ),
            2 => __( 'Robot category deleted.', 'softuni' ),
            3 => __( 'Robot category updated.', 'softuni' ),
            4 => __( 'Robot category not added.', 'softuni' ),
            5 => __( 'Robot category not updated.', 'softuni' ),
            6 => __( 'Robot categories deleted.', 'softuni' ),
    );

    return $messages;
}

add_filter( 'term_updated_messages', 'robot_category_updated_messages' );


// Custom meta post - is_featured
/**
 * Register meta box(es)
 */
function robot_register_meta_boxes() {
	add_meta_box( 'featured', __( 'Is Featured?', 'softuni' ), 'robots_featured_metabox_callback', 'robot', 'side' );
}
add_action( 'add_meta_boxes', 'robot_register_meta_boxes' );

/**
 * Callback function for Featured Meta box.
 * 
 * @return void
 */
function robots_featured_metabox_callback( $post ) {
        $checked = get_post_meta( $post->ID, 'is_featured', true );
    ?>
    <div>
        <label for="is-featured">Is Featured?</label>
        <input id="is-featured" name="is_featured" type="checkbox" <?php checked( $checked, 'on', true ); ?> >
    </div>
    <?php
} 

/**
 * Save Robots post meta
 * 
 * @return void
 */
function robots_meta_save( $post_id ) {
    // Data validation
    if ( empty( $post_id ) ) {
        return;
    }

    $featured = 0;
    $meta_key = 'is_featured';

    if ( isset( $_POST['is_featured'] ) ) {
        // Escaping special symbols as <, >, & and etc.
        $featured = esc_attr( $_POST['is_featured'] );
    }

    update_post_meta( $post_id, $meta_key, $featured );
}
add_action( 'save_post', 'robots_meta_save' );