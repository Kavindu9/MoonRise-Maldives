<?php 


// Resorts
function moonrise_resorts_type() {

	$labels = array(
		'name'                  => 'Accommodations',
		'singular_name'         => 'Resort',
		'menu_name'             => 'Accommodations',
		'name_admin_bar'        => 'Accommodations',
		'archives'              => 'Item Archives',
		'attributes'            => 'Item Attributes',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All Items',
		'add_new_item'          => 'Add New Item',
		'add_new'               => 'Add New',
		'new_item'              => 'New Item',
		'edit_item'             => 'Edit Item',
		'update_item'           => 'Update Item',
		'view_item'             => 'View Item',
		'view_items'            => 'View Items',
		'search_items'          => 'Search Item',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Items list',
		'items_list_navigation' => 'Items list navigation',
		'filter_items_list'     => 'Filter items list',
	);
	$rewrite = array(
		'slug'                  => 'resorts',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => 'resort',
		'description'           => 'Post Type Description',
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail' ),
		'taxonomies'            => array( 'resort_type', 'post_tag'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-building',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'resort', $args );

}
add_action( 'init', 'moonrise_resorts_type', 0 );

// Register Custom Taxonomy
function moonrise_resort_cateory() {

	$labels = array(
		'name'                       => _x( 'Resort Categories', 'Taxonomy General Name', 'moonrise' ),
		'singular_name'              => _x( 'Resort Category', 'Taxonomy Singular Name', 'moonrise' ),
		'menu_name'                  => __( 'Resort Category', 'moonrise' ),
		'all_items'                  => __( 'All Items', 'moonrise' ),
		'parent_item'                => __( 'Parent Item', 'moonrise' ),
		'parent_item_colon'          => __( 'Parent Item:', 'moonrise' ),
		'new_item_name'              => __( 'New Item Name', 'moonrise' ),
		'add_new_item'               => __( 'Add New Item', 'moonrise' ),
		'edit_item'                  => __( 'Edit Item', 'moonrise' ),
		'update_item'                => __( 'Update Item', 'moonrise' ),
		'view_item'                  => __( 'View Item', 'moonrise' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'moonrise' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'moonrise' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'moonrise' ),
		'popular_items'              => __( 'Popular Items', 'moonrise' ),
		'search_items'               => __( 'Search Items', 'moonrise' ),
		'not_found'                  => __( 'Not Found', 'moonrise' ),
		'no_terms'                   => __( 'No items', 'moonrise' ),
		'items_list'                 => __( 'Items list', 'moonrise' ),
		'items_list_navigation'      => __( 'Items list navigation', 'moonrise' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'resort_type', array( 'resort' ), $args );

}
add_action( 'init', 'moonrise_resort_cateory', 0 );


//Transit Hotels
// function transit_hotel_type() {

// 	$labels = array(
// 		'name'                  => 'Transit',
// 		'singular_name'         => 'Tran',
// 		'menu_name'             => 'Transit',
// 		'name_admin_bar'        => 'Transit',
// 		'archives'              => 'Item Archives',
// 		'attributes'            => 'Item Attributes',
// 		'parent_item_colon'     => 'Parent Item:',
// 		'all_items'             => 'All Items',
// 		'add_new_item'          => 'Add New Item',
// 		'add_new'               => 'Add New',
// 		'new_item'              => 'New Item',
// 		'edit_item'             => 'Edit Item',
// 		'update_item'           => 'Update Item',
// 		'view_item'             => 'View Item',
// 		'view_items'            => 'View Items',
// 		'search_items'          => 'Search Item',
// 		'not_found'             => 'Not found',
// 		'not_found_in_trash'    => 'Not found in Trash',
// 		'featured_image'        => 'Featured Image',
// 		'set_featured_image'    => 'Set featured image',
// 		'remove_featured_image' => 'Remove featured image',
// 		'use_featured_image'    => 'Use as featured image',
// 		'insert_into_item'      => 'Insert into item',
// 		'uploaded_to_this_item' => 'Uploaded to this item',
// 		'items_list'            => 'Items list',
// 		'items_list_navigation' => 'Items list navigation',
// 		'filter_items_list'     => 'Filter items list',
// 	);
// 	$args = array(
// 		'label'                 => 'Tran',
// 		'description'           => 'Post Type Description',
// 		'labels'                => $labels,
// 		'supports'              => array( 'title', 'thumbnail' ),
// 		'taxonomies'            => array( 'category', 'post_tag' ),
// 		'hierarchical'          => false,
// 		'public'                => true,
// 		'show_ui'               => true,
// 		'show_in_menu'          => true,
// 		'menu_position'         => 5,
// 		'menu_icon'             => 'dashicons-airplane',
// 		'show_in_admin_bar'     => true,
// 		'show_in_nav_menus'     => true,
// 		'can_export'            => true,
// 		'has_archive' => false,
//             'rewrite' => array(
//                 'slug' => 'transit'
// 			),
// 		'exclude_from_search'   => false,
// 		'publicly_queryable'    => true,
// 		'capability_type'       => 'page',
// 	);
// 	register_post_type( 'transi', $args );

// }
// add_action( 'init', 'transit_hotel_type', 0 );


// function nova_experience_type() {

// 	$labels = array(
// 		'name'                  => 'Experiences',
// 		'singular_name'         => 'Experience',
// 		'menu_name'             => 'Experiences',
// 		'name_admin_bar'        => 'Experiences',
// 		'archives'              => 'Item Archives',
// 		'attributes'            => 'Item Attributes',
// 		'parent_item_colon'     => 'Parent Item:',
// 		'all_items'             => 'All Items',
// 		'add_new_item'          => 'Add New Item',
// 		'add_new'               => 'Add New',
// 		'new_item'              => 'New Item',
// 		'edit_item'             => 'Edit Item',
// 		'update_item'           => 'Update Item',
// 		'view_item'             => 'View Item',
// 		'view_items'            => 'View Items',
// 		'search_items'          => 'Search Item',
// 		'not_found'             => 'Not found',
// 		'not_found_in_trash'    => 'Not found in Trash',
// 		'featured_image'        => 'Featured Image',
// 		'set_featured_image'    => 'Set featured image',
// 		'remove_featured_image' => 'Remove featured image',
// 		'use_featured_image'    => 'Use as featured image',
// 		'insert_into_item'      => 'Insert into item',
// 		'uploaded_to_this_item' => 'Uploaded to this item',
// 		'items_list'            => 'Items list',
// 		'items_list_navigation' => 'Items list navigation',
// 		'filter_items_list'     => 'Filter items list',
// 	);
// 	$args = array(
// 		'label'                 => 'Experience',
// 		'description'           => 'Post Type Description',
// 		'labels'                => $labels,
// 		'supports'              => array( 'title', 'thumbnail' ),
// 		'hierarchical'          => false,
// 		'public'                => true,
// 		'show_ui'               => true,
// 		'show_in_menu'          => true,
// 		'menu_position'         => 5,
// 		'menu_icon'             => 'dashicons-buddicons-groups',
// 		'show_in_admin_bar'     => true,
// 		'show_in_nav_menus'     => true,
// 		'can_export'            => true,
// 		'has_archive'           => false,
// 		'exclude_from_search'   => false,
// 		'publicly_queryable'    => true,
// 		'capability_type'       => 'page',
// 	);
// 	register_post_type( 'experience', $args );

// }
// add_action( 'init', 'nova_experience_type', 0 );

// function nova_offers_type() {

// 	$labels = array(
// 		'name'                  => 'Special offers',
// 		'singular_name'         => 'Special Offer',
// 		'menu_name'             => 'Special Offers',
// 		'name_admin_bar'        => 'Post Type',
// 		'archives'              => 'Item Archives',
// 		'attributes'            => 'Item Attributes',
// 		'parent_item_colon'     => 'Parent Item:',
// 		'all_items'             => 'All Items',
// 		'add_new_item'          => 'Add New Item',
// 		'add_new'               => 'Add New',
// 		'new_item'              => 'New Item',
// 		'edit_item'             => 'Edit Item',
// 		'update_item'           => 'Update Item',
// 		'view_item'             => 'View Item',
// 		'view_items'            => 'View Items',
// 		'search_items'          => 'Search Item',
// 		'not_found'             => 'Not found',
// 		'not_found_in_trash'    => 'Not found in Trash',
// 		'featured_image'        => 'Featured Image',
// 		'set_featured_image'    => 'Set featured image',
// 		'remove_featured_image' => 'Remove featured image',
// 		'use_featured_image'    => 'Use as featured image',
// 		'insert_into_item'      => 'Insert into item',
// 		'uploaded_to_this_item' => 'Uploaded to this item',
// 		'items_list'            => 'Items list',
// 		'items_list_navigation' => 'Items list navigation',
// 		'filter_items_list'     => 'Filter items list',
// 	);
// 	$args = array(
// 		'label'                 => 'Special Offer',
// 		'description'           => 'Post Type Description',
// 		'labels'                => $labels,
// 		'supports'              => array( 'title', 'thumbnail' ),
// 		'hierarchical'          => false,
// 		'public'                => true,
// 		'show_ui'               => true,
// 		'show_in_menu'          => true,
// 		'menu_position'         => 5,
// 		'menu_icon'             => 'dashicons-pressthis',
// 		'show_in_admin_bar'     => true,
// 		'show_in_nav_menus'     => true,
// 		'can_export'            => true,
// 		'has_archive'           => true,
// 		'exclude_from_search'   => false,
// 		'publicly_queryable'    => true,
// 		'capability_type'       => 'page',
// 	);
// 	register_post_type( 'offers', $args );

// }
// add_action( 'init', 'nova_offers_type', 0 );


// // Register Custom Post Type
// function nova_downloads_type() {

// 	$labels = array(
// 		'name'                  => _x( 'Downloads', 'Post Type General Name', 'nova' ),
// 		'singular_name'         => _x( 'Download', 'Post Type Singular Name', 'nova' ),
// 		'menu_name'             => __( 'Downloads', 'nova' ),
// 		'name_admin_bar'        => __( 'Downloads', 'nova' ),
// 		'archives'              => __( 'Item Archives', 'nova' ),
// 		'attributes'            => __( 'Item Attributes', 'nova' ),
// 		'parent_item_colon'     => __( 'Parent Item:', 'nova' ),
// 		'all_items'             => __( 'All Section', 'nova' ),
// 		'add_new_item'          => __( 'Add Section', 'nova' ),
// 		'add_new'               => __( 'Add Section', 'nova' ),
// 		'new_item'              => __( 'New Section', 'nova' ),
// 		'edit_item'             => __( 'Edit Section', 'nova' ),
// 		'update_item'           => __( 'Update Section', 'nova' ),
// 		'view_item'             => __( 'View Section', 'nova' ),
// 		'view_items'            => __( 'View Section', 'nova' ),
// 		'search_items'          => __( 'Search Item', 'nova' ),
// 		'not_found'             => __( 'Not found', 'nova' ),
// 		'not_found_in_trash'    => __( 'Not found in Trash', 'nova' ),
// 		'featured_image'        => __( 'Featured Image', 'nova' ),
// 		'set_featured_image'    => __( 'Set featured image', 'nova' ),
// 		'remove_featured_image' => __( 'Remove featured image', 'nova' ),
// 		'use_featured_image'    => __( 'Use as featured image', 'nova' ),
// 		'insert_into_item'      => __( 'Insert into item', 'nova' ),
// 		'uploaded_to_this_item' => __( 'Uploaded to this item', 'nova' ),
// 		'items_list'            => __( 'Items list', 'nova' ),
// 		'items_list_navigation' => __( 'Items list navigation', 'nova' ),
// 		'filter_items_list'     => __( 'Filter items list', 'nova' ),
// 	);
// 	$args = array(
// 		'label'                 => __( 'Download', 'nova' ),
// 		'description'           => __( 'Post Type Description', 'nova' ),
// 		'labels'                => $labels,
// 		'supports'              => array( 'title' ),
// 		'hierarchical'          => false,
// 		'public'                => true,
// 		'show_ui'               => true,
// 		'show_in_menu'          => true,
// 		'menu_position'         => 5,
// 		'menu_icon'             => 'dashicons-download',
// 		'show_in_admin_bar'     => true,
// 		'show_in_nav_menus'     => true,
// 		'can_export'            => true,
// 		'has_archive'           => false,
// 		'exclude_from_search'   => false,
// 		'publicly_queryable'    => true,
// 		'capability_type'       => 'page',
// 	);
// 	register_post_type( 'downloads', $args );

// }
// add_action( 'init', 'nova_downloads_type', 0 );



// // Art
// function nova_artist_type() {

// 	$labels = array(
// 		'name'                  => 'Artists',
// 		'singular_name'         => 'Artist',
// 		'menu_name'             => 'Artists',
// 		'name_admin_bar'        => 'Arts',
// 		'archives'              => 'Item Archives',
// 		'attributes'            => 'Item Attributes',
// 		'parent_item_colon'     => 'Parent Item:',
// 		'all_items'             => 'All Items',
// 		'add_new_item'          => 'Add New Item',
// 		'add_new'               => 'Add New',
// 		'new_item'              => 'New Item',
// 		'edit_item'             => 'Edit Item',
// 		'update_item'           => 'Update Item',
// 		'view_item'             => 'View Item',
// 		'view_items'            => 'View Items',
// 		'search_items'          => 'Search Item',
// 		'not_found'             => 'Not found',
// 		'not_found_in_trash'    => 'Not found in Trash',
// 		'featured_image'        => 'Featured Image',
// 		'set_featured_image'    => 'Set featured image',
// 		'remove_featured_image' => 'Remove featured image',
// 		'use_featured_image'    => 'Use as featured image',
// 		'insert_into_item'      => 'Insert into item',
// 		'uploaded_to_this_item' => 'Uploaded to this item',
// 		'items_list'            => 'Items list',
// 		'items_list_navigation' => 'Items list navigation',
// 		'filter_items_list'     => 'Filter items list',
// 	);
// 	$rewrite = array(
// 		'slug'                  => 'arts',
// 		'with_front'            => true,
// 		'pages'                 => true,
// 		'feeds'                 => true,
// 	);
// 	$args = array(
// 		'label'                 => 'Artist',
// 		'description'           => 'Post Type Description',
// 		'labels'                => $labels,
// 		'supports'              => array( 'title', 'thumbnail' ),
// 		'taxonomies'            => array( 'artist_type'),
// 		'hierarchical'          => false,
// 		'public'                => true,
// 		'show_ui'               => true,
// 		'show_in_menu'          => true,
// 		'menu_position'         => 5,
// 		'menu_icon'             => 'dashicons-admin-customizer',
// 		'show_in_admin_bar'     => true,
// 		'show_in_nav_menus'     => true,
// 		'can_export'            => true,
// 		'has_archive'           => false,
// 		'exclude_from_search'   => false,
// 		'publicly_queryable'    => true,
// 		'rewrite'               => $rewrite,
// 		'capability_type'       => 'page',
// 	);
// 	register_post_type( 'art', $args );

// }
// add_action( 'init', 'nova_artist_type', 0 );

// // Register Custom Taxonomy
// function nova_artist_cateory() {

// 	$labels = array(
// 		'name'                       => _x( 'Art Categories', 'Taxonomy General Name', 'nova' ),
// 		'singular_name'              => _x( 'Art Category', 'Taxonomy Singular Name', 'nova' ),
// 		'menu_name'                  => __( 'Art Category', 'nova' ),
// 		'all_items'                  => __( 'All Items', 'nova' ),
// 		'parent_item'                => __( 'Parent Item', 'nova' ),
// 		'parent_item_colon'          => __( 'Parent Item:', 'nova' ),
// 		'new_item_name'              => __( 'New Item Name', 'nova' ),
// 		'add_new_item'               => __( 'Add New Item', 'nova' ),
// 		'edit_item'                  => __( 'Edit Item', 'nova' ),
// 		'update_item'                => __( 'Update Item', 'nova' ),
// 		'view_item'                  => __( 'View Item', 'nova' ),
// 		'separate_items_with_commas' => __( 'Separate items with commas', 'nova' ),
// 		'add_or_remove_items'        => __( 'Add or remove items', 'nova' ),
// 		'choose_from_most_used'      => __( 'Choose from the most used', 'nova' ),
// 		'popular_items'              => __( 'Popular Items', 'nova' ),
// 		'search_items'               => __( 'Search Items', 'nova' ),
// 		'not_found'                  => __( 'Not Found', 'nova' ),
// 		'no_terms'                   => __( 'No items', 'nova' ),
// 		'items_list'                 => __( 'Items list', 'nova' ),
// 		'items_list_navigation'      => __( 'Items list navigation', 'nova' ),
// 	);
// 	$args = array(
// 		'labels'                     => $labels,
// 		'hierarchical'               => true,
// 		'public'                     => true,
// 		'show_ui'                    => true,
// 		'show_admin_column'          => true,
// 		'show_in_nav_menus'          => true,
// 		'show_tagcloud'              => false,
// 	);
// 	register_taxonomy( 'artist_type', array( 'art' ), $args );

// }
// add_action( 'init', 'nova_artist_cateory', 0 );