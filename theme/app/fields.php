<?php 
add_action( 'cmb2_admin_init', 'home_fields' );
add_action( 'cmb2_admin_init', 'maldives_fields' );
add_action( 'cmb2_admin_init', 'services_fields' );
add_action( 'cmb2_admin_init', 'about_fields' );

add_action( 'cmb2_admin_init', 'resorts_fields' );
add_action( 'cmb2_admin_init', 'facility_fields' );

add_action( 'cmb2_admin_init', 'cruises_fields' );

add_action( 'cmb2_admin_init', 'page_fields' );



function page_fields() {


    // Hero section
    $cmb = new_cmb2_box( array(
		'id'            => 'page_hero',
		'title'         => __( 'Page Hero', 'cmb2' ),
		'object_types'  => array( 'page' ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );

	$cmb->add_field( array(
		'name'       => __( 'Enabled ', 'cmb2' ),
        'desc' => 'Enable hero image on this page',
		'id'         => 'hero_check',
		'type'       => 'checkbox',
	) );

    $cmb->add_field( array(
        'name' => 'Title',
        'id'   => 'main_title',
        'type' => 'text',
    ) );

    $cmb->add_field( array(
        'name' => 'Hero Image (desktop)',
        'id'   => 'site_hero',
        'type' => 'file',
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
    ) );

    $cmb->add_field( array(
		'name'    => 'Hero Video',
		'desc'    => 'Full HD 1920 x 1080',
		'id'      => 'hero_video',
		'type'    => 'file',
		'query_args' => array(
			'type' => 'video', // Make library only display PDFs.

		),
		'options' => array(
			'url' => false, // Hide the text input for the url
		),
	) );

    $cmb->add_field( array(
        'name' => 'Hero Image (mobile)',
        'id'   => 'site_hero_mobile',
        'type' => 'file',
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
    ) );

    $cmb->add_field( array(
		'name'    => 'Hero Video (Mobile)',
		'desc'    => 'Full HD (Portrait) 1080 x 1920',
		'id'      => 'hero_video_mobile',
		'type'    => 'file',
		'query_args' => array(
			'type' => 'video', // Make library only display PDFs.

		),
		'options' => array(
			'url' => false, // Hide the text input for the url
		),
	) );

}


function home_fields() {
    //Hero Image
	$cmb = new_cmb2_box( array(
        'id'           => 'hero-section',
        'title'        => 'Hero Section',
        'object_types' => array( 'page' ), // post type
        'show_on'      => array( 'key' => 'page-template', 'value' => 'page-home.php' ),
        'context'      => 'normal', //  'normal', 'advanced', or 'side'
        'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
        'show_names'   => true, // Show field names on the left
    ) );

    $cmb->add_field( array(
        'name' => 'Main Banner(Desktop)',
        'id'   => 'banner_img',
        'desc' => 'Image size - 1920x1080',
        'type' => 'file_list',
        'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
        'query_args' => array( 'type' => 'image' ), // Only images attachment
    ) );

    $cmb->add_field( array(
        'name' => 'Main Banner(Mobile)',
        'id'   => 'banner_img_mob',
        'desc' => 'Image size - 1080x1920',
        'type' => 'file_list',
        'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
        'query_args' => array( 'type' => 'image' ), // Only images attachment
    ) );


    //section two
    $cmb = new_cmb2_box( array(
        'id'           => 'section-explore',
        'title'        => 'Section Explore ',
        'object_types' => array( 'page' ), // post type
        'show_on'      => array( 'key' => 'page-template', 'value' => 'page-home.php' ),
        'context'      => 'normal', //  'normal', 'advanced', or 'side'
        'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
        'show_names'   => true, // Show field names on the left
    ) );


    $cmb->add_field( array(
        'name' => 'Title',
        'id'   => '2_title',
        'type' => 'text',
    ) );

    $cmb->add_field( array(
        'name' => 'Sub Title',
        'id'   => '2_sub_title',
        'type' => 'text',
    ) );

    $cmb->add_field( array(
        'name'    => 'Description',
        'id'      => '2_description',
        'type'    => 'wysiwyg',
        'options' => array(
            'wpautop' => true, 
            'media_buttons' => false, 
            'textarea_rows' => get_option('default_post_edit_rows', 10), 
            'teeny' => true, 
            'tinymce' => true, 
            'quicktags' => false 
        ),
    ) );

    $cmb->add_field( array(
        'name' => 'Main Image',
        'id'   => 'main_image',
        'type' => 'file',
    ) );


    $cmb->add_field( array(
        'name' => 'Second Image',
        'id'   => 'second_image',
        'type' => 'file',
    ) );

    //section three
    $cmb = new_cmb2_box( array(
        'id'           => 'section-facilities',
        'title'        => 'Section Facilities ',
        'object_types' => array( 'page' ), // post type
        'show_on'      => array( 'key' => 'page-template', 'value' => 'page-home.php' ),
        'context'      => 'normal', //  'normal', 'advanced', or 'side'
        'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
        'show_names'   => true, // Show field names on the left
    ) );

    $cmb->add_field( array(
        'name' => 'Title',
        'id'   => '3_title',
        'type' => 'text',
    ) );

    $cmb->add_field( array(
        'name'    => 'Description',
        'id'      => '3_description',
        'type'    => 'wysiwyg',
        'options' => array(
            'wpautop' => true, 
            'media_buttons' => false, 
            'textarea_rows' => get_option('default_post_edit_rows', 10), 
            'teeny' => true, 
            'tinymce' => true, 
            'quicktags' => false 
        ),
    ) );

    $why_nova = $cmb->add_field( array(
        'id'          => 'why_nova_group',
        'type'        => 'group',
        //'description' => __( 'Generates reusable form entries', 'cmb2' ),
        // 'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'Entry {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'        => __( 'Add Another Entry', 'cmb2' ),
            'remove_button'     => __( 'Remove Entry', 'cmb2' ),
            'sortable'          => true,
            // 'closed'         => true, // true to have the groups closed by default
            'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ) );

    $cmb->add_group_field( $why_nova, array(
        'name' => 'Main Image 1 (Desktop)',
        'id'   => 'f_image_1',
        'type' => 'file',
    ) );

    $cmb->add_group_field( $why_nova, array(
        'name' => 'Main Image 2 (Desktop)',
        'id'   => 'f_image_2',
        'type' => 'file',
    ) );

    $cmb->add_group_field( $why_nova, array(
        'name' => 'Main Image 3 (Desktop)',
        'id'   => 'f_image_3',
        'type' => 'file',
    ) );

    $cmb->add_group_field( $why_nova, array(
        'name' => 'Main Image(Mobile)',
        'id'   => 'f_image_m',
        'type' => 'file',
    ) );

    $cmb->add_group_field( $why_nova, array(
        'name' => 'Title',
        'id'   => 'f_title',
        'type' => 'text',
    ) );

    $cmb->add_group_field( $why_nova, array(
        'name' => 'Url',
        'id'   => '3_url',
        'type' => 'text',
    ) );

    //Section Four
    $cmb = new_cmb2_box( array(
        'id'           => 'section-activity',
        'title'        => 'Section Activities ',
        'object_types' => array( 'page' ), // post type
        'show_on'      => array( 'key' => 'page-template', 'value' => 'page-home.php' ),
        'context'      => 'normal', //  'normal', 'advanced', or 'side'
        'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
        'show_names'   => true, // Show field names on the left
    ) );

    $cmb->add_field( array(
        'name' => 'Title',
        'id'   => '5_title',
        'type' => 'text',
    ) );

    $cmb->add_field( array(
        'name'    => 'Description',
        'id'      => '5_description',
        'type'    => 'wysiwyg',
        'options' => array(
            'wpautop' => true, 
            'media_buttons' => false, 
            'textarea_rows' => get_option('default_post_edit_rows', 10), 
            'teeny' => true, 
            'tinymce' => true, 
            'quicktags' => false 
        ),
    ) );

    $activity = $cmb->add_field( array(
        'id'          => 'activity_group',
        'type'        => 'group',
        //'description' => __( 'Generates reusable form entries', 'cmb2' ),
        // 'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'Entry {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'        => __( 'Add Another Entry', 'cmb2' ),
            'remove_button'     => __( 'Remove Entry', 'cmb2' ),
            'sortable'          => true,
            // 'closed'         => true, // true to have the groups closed by default
            'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ) );

    $cmb->add_group_field( $activity, array(
        'name' => 'Title',
        'id'   => 'a_title_5',
        'type' => 'text',
    ) );

    $cmb->add_group_field( $activity, array(
        'name' => 'Activity Image',
        'id'   => 'a_image',
        'type' => 'file',
    ) );

    $cmb->add_group_field( $activity, array(
        'name' => 'URL',
        'id'   => 'a_url_5',
        'type' => 'text',
    ) );




    //Section Five
    $cmb = new_cmb2_box( array(
        'id'           => 'section-featured',
        'title'        => 'Section Featured ',
        'object_types' => array( 'page' ), // post type
        'show_on'      => array( 'key' => 'page-template', 'value' => 'page-home.php' ),
        'context'      => 'normal', //  'normal', 'advanced', or 'side'
        'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
        'show_names'   => true, // Show field names on the left
    ) );

    $cmb->add_field( array(
        'name' => 'Title',
        'id'   => '4_title',
        'type' => 'text',
    ) );

    $cmb->add_field( array(
        'name'    => 'Description',
        'id'      => '4_description',
        'type'    => 'wysiwyg',
        'options' => array(
            'wpautop' => true, 
            'media_buttons' => false, 
            'textarea_rows' => get_option('default_post_edit_rows', 10), 
            'teeny' => true, 
            'tinymce' => true, 
            'quicktags' => false 
        ),
    ) );
}

function maldives_fields() {

	$cmb = new_cmb2_box( array(
        'id'           => 'maldives-section',
        'title'        => __( 'Maldives Paradise Section', 'cmb2' ),
        'object_types' => array( 'page' ), // post type
        'show_on'      => array( 'key' => 'page-template', 'value' => 'page-maldives.php' ),
        'context'      => 'normal', //  'normal', 'advanced', or 'side'
        'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
        'show_names'   => true, // Show field names on the left
    ) );

    $cmb->add_field( array(
        'name' => 'Title',
        'id'   => 'm_title_1',
        'type' => 'text',
    ) );

    $cmb->add_field( array(
        'name'    => 'Description',
        'id'      => 'm_description_1',
        'type'    => 'wysiwyg',
        'options' => array(
            'wpautop' => true, 
            'media_buttons' => false, 
            'textarea_rows' => get_option('default_post_edit_rows', 10), 
            'teeny' => true, 
            'tinymce' => true, 
            'quicktags' => false 
        ),
    ) );

    $cmb->add_field( array(
        'name' => 'Title',
        'id'   => 'm_title_2',
        'type' => 'text',
    ) );

    $cmb->add_field( array(
        'name'    => 'Description',
        'id'      => 'm_description_2',
        'type'    => 'wysiwyg',
        'options' => array(
            'wpautop' => true, 
            'media_buttons' => false, 
            'textarea_rows' => get_option('default_post_edit_rows', 10), 
            'teeny' => true, 
            'tinymce' => true, 
            'quicktags' => false 
        ),
    ) );

    $cmb->add_field( array(
        'name' => 'Title',
        'id'   => 'm_title_3',
        'type' => 'text',
    ) );

    $cmb->add_field( array(
        'name'    => 'Description',
        'id'      => 'm_description_3',
        'type'    => 'wysiwyg',
        'options' => array(
            'wpautop' => true, 
            'media_buttons' => false, 
            'textarea_rows' => get_option('default_post_edit_rows', 10), 
            'teeny' => true, 
            'tinymce' => true, 
            'quicktags' => false 
        ),
    ) );

    $cmb->add_field( array(
        'name' => 'Climate Image',
        'id'   => 'm_image',
        'type' => 'file',
    ) );

    $cmb->add_field( array(
        'name' => 'Flora Image',
        'id'   => 'f_image',
        'type' => 'file',
    ) );

    $cmb->add_field( array(
        'name' => 'Title',
        'id'   => 'f_title_1',
        'type' => 'text',
    ) );

    $cmb->add_field( array(
        'name'    => 'Description',
        'id'      => 'f_description_1',
        'type'    => 'wysiwyg',
        'options' => array(
            'wpautop' => true, 
            'media_buttons' => false, 
            'textarea_rows' => get_option('default_post_edit_rows', 10), 
            'teeny' => true, 
            'tinymce' => true, 
            'quicktags' => false 
        ),
    ) );

    $cmb->add_field( array(
        'name' => 'Title',
        'id'   => 'f_title_2',
        'type' => 'text',
    ) );

    $cmb->add_field( array(
        'name'    => 'Description',
        'id'      => 'f_description_2',
        'type'    => 'wysiwyg',
        'options' => array(
            'wpautop' => true, 
            'media_buttons' => false, 
            'textarea_rows' => get_option('default_post_edit_rows', 10), 
            'teeny' => true, 
            'tinymce' => true, 
            'quicktags' => false 
        ),
    ) );

    $cmb->add_field( array(
        'name' => 'Title',
        'id'   => 'f_title_3',
        'type' => 'text',
    ) );

    $cmb->add_field( array(
        'name'    => 'Description',
        'id'      => 'f_description_3',
        'type'    => 'wysiwyg',
        'options' => array(
            'wpautop' => true, 
            'media_buttons' => false, 
            'textarea_rows' => get_option('default_post_edit_rows', 10), 
            'teeny' => true, 
            'tinymce' => true, 
            'quicktags' => false 
        ),
    ) );

    $cmb->add_field( array(
        'name' => 'Image Grid',
        'id'   => 'grid_img',
        'desc' => 'Image size - 1920x1080',
        'type' => 'file_list',
        'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
        'query_args' => array( 'type' => 'image' ), // Only images attachment
    ) );

    $why_male = $cmb->add_field( array(
        'id'          => 'maldives_group',
        'type'        => 'group',
        //'description' => __( 'Generates reusable form entries', 'cmb2' ),
        // 'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'Entry {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'        => __( 'Add Another Entry', 'cmb2' ),
            'remove_button'     => __( 'Remove Entry', 'cmb2' ),
            'sortable'          => true,
            // 'closed'         => true, // true to have the groups closed by default
            'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ) );

    $cmb->add_group_field( $why_male, array(
        'name' => 'Title',
        'id'   => 'm_title_5',
        'type' => 'text',
    ) );

    $cmb->add_group_field( $why_male, array(
        'name'    => 'Description',
        'id'      => 'm_description_5',
        'type'    => 'wysiwyg',
        'options' => array(
            'wpautop' => true, 
            'media_buttons' => false, 
            'textarea_rows' => get_option('default_post_edit_rows', 10), 
            'teeny' => true, 
            'tinymce' => true, 
            'quicktags' => false 
        ),
    ) );

}

function services_fields() {
    $cmb = new_cmb2_box( array(
        'id'           => 'services-section',
        'title'        => __( 'Services Section', 'cmb2' ),
        'object_types' => array( 'page' ), // post type
        'show_on'      => array( 'key' => 'page-template', 'value' => 'page-services.php' ),
        'context'      => 'normal', //  'normal', 'advanced', or 'side'
        'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
        'show_names'   => true, // Show field names on the left
    ) );

    $service = $cmb->add_field( array(
        'id'          => 'services_group',
        'type'        => 'group',
        //'description' => __( 'Generates reusable form entries', 'cmb2' ),
        // 'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'Entry {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'        => __( 'Add Another Entry', 'cmb2' ),
            'remove_button'     => __( 'Remove Entry', 'cmb2' ),
            'sortable'          => true,
            // 'closed'         => true, // true to have the groups closed by default
            'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ) );

    $cmb->add_group_field( $service, array(
        'name' => 'Title',
        'id'   => 's_title_1',
        'type' => 'text',
    ) );

    $cmb->add_group_field( $service, array(
        'name'    => 'Description',
        'id'      => 's_description_1',
        'type'    => 'wysiwyg',
        'options' => array(
            'wpautop' => true, 
            'media_buttons' => false, 
            'textarea_rows' => get_option('default_post_edit_rows', 10), 
            'teeny' => true, 
            'tinymce' => true, 
            'quicktags' => false 
        ),
    ) );

    $cmb->add_group_field( $service,array(
        'name' => 'Flora Image',
        'id'   => 's_image',
        'type' => 'file',
    ) );

    $cmb->add_group_field( $service, array(
        'name'    => 'Description',
        'id'      => 's_description_3',
        'type'    => 'wysiwyg',
        'options' => array(
            'wpautop' => true, 
            'media_buttons' => false, 
            'textarea_rows' => get_option('default_post_edit_rows', 10), 
            'teeny' => true, 
            'tinymce' => true, 
            'quicktags' => false 
        ),
    ) );

}


function resorts_fields() {
	$cmb = new_cmb2_box( array(
		'id'            => 'resorts_metabox',
		'title'         => __( 'Details', 'cmb2' ),
		'object_types'  => array( 'resort',  ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );

    $cmb->add_field( array(
        'name' => 'Title',
        'id'   => 'r_title_1',
        'type' => 'text',
    ) );

	$cmb->add_field( array(
		'name'       => __( 'Short Description', 'cmb2' ),
		'id'         => 'r_description_1',
		'type'       => 'textarea_small',
	) );

    $cmb->add_field( array(
		'name'       => __( 'Enabled ', 'cmb2' ),
        'desc' => 'Enable Location on this page',
		'id'         => 'loc_check',
		'type'       => 'checkbox',
	) );

    $cmb->add_field( array(
		'name'       => __( 'Location ', 'cmb2' ),
		'id'         => 'loc',
		'type'       => 'text',

	) );

    $cmb->add_field( array(
		'name'       => __( 'Enabled ', 'cmb2' ),
        'desc' => 'Enable Airport Distance on this page',
		'id'         => 'air_check',
		'type'       => 'checkbox',
	) );

    $cmb->add_field( array(
		'name'       => __( 'Airport Distance ', 'cmb2' ),
		'id'         => 'distance',
		'type'       => 'text',

	) );

    $cmb->add_field( array(
		'name'       => __( 'Enabled ', 'cmb2' ),
        'desc' => 'Enable Transfer on this page',
		'id'         => 'trans_check',
		'type'       => 'checkbox',
	) );

    $cmb->add_field( array(
		'name'       => __( 'Transfer ', 'cmb2' ),
		'id'         => 'time',
		'type'       => 'text',

	) );

    $cmb->add_field( array(
		'name'       => __( 'Enabled ', 'cmb2' ),
        'desc' => 'Enable Size on this page',
		'id'         => 'size_check',
		'type'       => 'checkbox',
	) );

    $cmb->add_field( array(
		'name'       => __( 'Size', 'cmb2' ),
		'id'         => 'size',
		'type'       => 'text',

	) );

    $cmb->add_field( array(
        'name' => 'Location Title',
        'id'   => 'loc_title',
        'type' => 'text',
    ) );

    $cmb->add_field( array(
		'name'       => __( 'Enabled ', 'cmb2' ),
        'desc' => 'Enable Map on this page',
		'id'         => 'map_check',
		'type'       => 'checkbox',
	) );

    $cmb->add_field( array(
        'name' => 'Add Location URL here',
        'id' => 'loc_url',
        'type' => 'textarea_code'
    ) );

	$cmb->add_field( array(
		'name' => __( 'Booking Url', 'cmb2' ),
		'id'   => 'button_url',
		'type' => 'text_url',
	) );
  
    $cmb->add_field( array(
		'name' => __( 'Booking Text', 'cmb2' ),
		'id'   => 'button_txt',
		'type' => 'text_medium',
	) );

    $cmb->add_field( array(
        'name' => 'Photo gallery',
        'id'   => 'r_gallery',
        'type' => 'file_list',
        'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
        'query_args' => array( 'type' => 'image' ), // Only images attachment

    ) );

    $resort = $cmb->add_field( array(
        'id'          => 'resorts_group',
        'type'        => 'group',
        //'description' => __( 'Generates reusable form entries', 'cmb2' ),
        // 'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'Entry {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'        => __( 'Add Another Entry', 'cmb2' ),
            'remove_button'     => __( 'Remove Entry', 'cmb2' ),
            'sortable'          => true,
            // 'closed'         => true, // true to have the groups closed by default
            'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ) );

    $cmb->add_group_field( $resort, array(
        'name' => 'Title',
        'id'   => 'rs_title_1',
        'type' => 'text',
    ) );

    $cmb->add_group_field( $resort, array(
        'name'    => 'Description',
        'id'      => 'rs_description_1',
        'type'    => 'wysiwyg',
        'options' => array(
            'wpautop' => true, 
            'media_buttons' => false, 
            'textarea_rows' => get_option('default_post_edit_rows', 10), 
            'teeny' => true, 
            'tinymce' => true, 
            'quicktags' => false 
        ),
    ) );




    // Hero section
    $cmb = new_cmb2_box( array(
		'id'            => 'resort_page_hero',
		'title'         => __( 'Resort Page Hero', 'cmb2' ),
		'object_types'  => array( 'resort' ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );


    $cmb->add_field( array(
        'name' => 'Title',
        'id'   => 'main_title_r',
        'type' => 'text',
    ) );

    $cmb->add_field( array(
        'name' => 'Hero Image (desktop)',
        'id'   => 'site_hero_r',
        'type' => 'file',
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
    ) );

    $cmb->add_field( array(
		'name'    => 'Hero Video',
		'desc'    => 'Full HD 1920 x 1080',
		'id'      => 'hero_video_r',
		'type'    => 'file',
		'query_args' => array(
			'type' => 'video', // Make library only display PDFs.

		),
		'options' => array(
			'url' => false, // Hide the text input for the url
		),
	) );

    $cmb->add_field( array(
        'name' => 'Hero Image (mobile)',
        'id'   => 'site_hero_mobile_r',
        'type' => 'file',
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
    ) );

    $cmb->add_field( array(
		'name'    => 'Hero Video (Mobile)',
		'desc'    => 'Full HD (Portrait) 1080 x 1920',
		'id'      => 'hero_video_mobile_r',
		'type'    => 'file',
		'query_args' => array(
			'type' => 'video', // Make library only display PDFs.

		),
		'options' => array(
			'url' => false, // Hide the text input for the url
		),
	) );

}


function cruises_fields() {
	$cmb = new_cmb2_box( array(
		'id'            => 'cruise_metabox',
		'title'        => __( 'Cruises Section', 'cmb2' ),
        'object_types' => array( 'page' ), // post type
        'show_on'      => array( 'key' => 'page-template', 'value' => 'page-cruises.php' ),
        'context'      => 'normal', //  'normal', 'advanced', or 'side'
        'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
        'show_names'   => true, // Show field names on the left
	) );


    $cmb->add_field( array(
        'name' => 'Photo gallery',
        'id'   => 'cr_gallery',
        'type' => 'file_list',
        'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
        'query_args' => array( 'type' => 'image' ), // Only images attachment

    ) );

    $cruise = $cmb->add_field( array(
        'id'          => 'cruise_group',
        'type'        => 'group',
        //'description' => __( 'Generates reusable form entries', 'cmb2' ),
        // 'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'Entry {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'        => __( 'Add Another Entry', 'cmb2' ),
            'remove_button'     => __( 'Remove Entry', 'cmb2' ),
            'sortable'          => true,
            // 'closed'         => true, // true to have the groups closed by default
            'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ) );

    $cmb->add_group_field( $cruise, array(
        'name' => 'Title',
        'id'   => 'c_title_1',
        'type' => 'text',
    ) );

    $cmb->add_group_field( $cruise, array(
        'name'    => 'Description',
        'id'      => 'c_description_1',
        'type'    => 'wysiwyg',
        'options' => array(
            'wpautop' => true, 
            'media_buttons' => false, 
            'textarea_rows' => get_option('default_post_edit_rows', 10), 
            'teeny' => true, 
            'tinymce' => true, 
            'quicktags' => false 
        ),
    ) );




    // Hero section
    $cmb = new_cmb2_box( array(
		'id'            => 'resort_page_hero',
		'title'         => __( 'Resort Page Hero', 'cmb2' ),
		'object_types'  => array( 'resort' ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );


    $cmb->add_field( array(
        'name' => 'Title',
        'id'   => 'main_title_r',
        'type' => 'text',
    ) );

    $cmb->add_field( array(
        'name' => 'Hero Image (desktop)',
        'id'   => 'site_hero_r',
        'type' => 'file',
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
    ) );

    $cmb->add_field( array(
		'name'    => 'Hero Video',
		'desc'    => 'Full HD 1920 x 1080',
		'id'      => 'hero_video_r',
		'type'    => 'file',
		'query_args' => array(
			'type' => 'video', // Make library only display PDFs.

		),
		'options' => array(
			'url' => false, // Hide the text input for the url
		),
	) );

    $cmb->add_field( array(
        'name' => 'Hero Image (mobile)',
        'id'   => 'site_hero_mobile_r',
        'type' => 'file',
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
    ) );

    $cmb->add_field( array(
		'name'    => 'Hero Video (Mobile)',
		'desc'    => 'Full HD (Portrait) 1080 x 1920',
		'id'      => 'hero_video_mobile_r',
		'type'    => 'file',
		'query_args' => array(
			'type' => 'video', // Make library only display PDFs.

		),
		'options' => array(
			'url' => false, // Hide the text input for the url
		),
	) );

}


function about_fields() {
	$cmb = new_cmb2_box( array(
		'id'            => 'about_metabox',
		'title'         => __( 'About Us', 'cmb2' ),
		'object_types' => array( 'page' ), // post type
        'show_on'      => array( 'key' => 'page-template', 'value' => 'page-about.php' ),
        'context'      => 'normal', //  'normal', 'advanced', or 'side'
        'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
        'show_names'   => true, // Show field names on the left
	) );

    $cmb->add_field(  array(
        'name'    => 'Description',
        'id'      => 'a_description_1',
        'type'    => 'wysiwyg',
        'options' => array(
            'wpautop' => true, 
            'media_buttons' => false, 
            'textarea_rows' => get_option('default_post_edit_rows', 10), 
            'teeny' => true, 
            'tinymce' => true, 
            'quicktags' => false 
        ),
    ) );

    $cmb->add_field( array(
        'name' => 'Title',
        'id'   => 'main_title_a',
        'type' => 'text',
    ) );

    $cmb->add_field(  array(
        'name'    => 'Description',
        'id'      => 'rsa_description_1',
        'type'    => 'wysiwyg',
        'options' => array(
            'wpautop' => true, 
            'media_buttons' => false, 
            'textarea_rows' => get_option('default_post_edit_rows', 10), 
            'teeny' => true, 
            'tinymce' => true, 
            'quicktags' => false 
        ),
    ) );

    $cmb->add_field( array(
        'name' => 'Hero Image(Desktop)',
        'id'   => 'site_hero_a',
        'type' => 'file',
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
    ) );
    
    $cmb->add_field( array(
        'name' => 'Hero Image(Mobile)',
        'id'   => 'site_hero_mob_a',
        'type' => 'file',
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
    ) );
    
    $about = $cmb->add_field( array(
        'id'          => 'about_group',
        'type'        => 'group',
        //'description' => __( 'Generates reusable form entries', 'cmb2' ),
        // 'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'Entry {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'        => __( 'Add Another Entry', 'cmb2' ),
            'remove_button'     => __( 'Remove Entry', 'cmb2' ),
            'sortable'          => true,
            // 'closed'         => true, // true to have the groups closed by default
            'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ) );

    $cmb->add_group_field( $about, array(
        'name' => 'Title',
        'id'   => 'rsa_title',
        'type' => 'text',
    ) );

    $cmb->add_group_field( $about, array(
        'name' => 'number',
        'id'   => 'rsa_numb',
        'type' => 'text',
    ) );

    $cmb->add_group_field( $about, array(
        'name'    => 'Description',
        'id'      => 'rsa_description',
        'type'    => 'wysiwyg',
        'options' => array(
            'wpautop' => true, 
            'media_buttons' => false, 
            'textarea_rows' => get_option('default_post_edit_rows', 10), 
            'teeny' => true, 
            'tinymce' => true, 
            'quicktags' => false 
        ),
    ) );

}

function facility_fields() {
    //Hero Image
	$cmb = new_cmb2_box( array(
        'id'           => 'facility-section',
        'title'        => 'Facility Section',
        'object_types' => array( 'page' ), // post type
        'show_on'      => array( 'key' => 'page-template', 'value' => 'page-facilities.php' ),
        'context'      => 'normal', //  'normal', 'advanced', or 'side'
        'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
        'show_names'   => true, // Show field names on the left
    ) );

    $cmb->add_field( array(
        'name' => 'Category Name',
        'id'   => 'cat',
        'type' => 'text',
    ) );

}