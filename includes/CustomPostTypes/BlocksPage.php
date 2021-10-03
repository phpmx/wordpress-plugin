<?php

namespace phpmx\CustomPostTypes;

class BlocksPage {
	public static function init() {
		add_action( 'init', fn() => self::register_custom_post_type(), 0 );
		add_action( 'init', fn() => self::register_fields(), 10 );
	}

	private static function register_custom_post_type() {
		$labels = array(
			'name'                  => _x( 'Blocks Page', 'Post Type General Name', 'phpmx' ),
			'singular_name'         => _x( 'Blocks Page', 'Post Type Singular Name', 'phpmx' ),
			'menu_name'             => __( 'Blocks Pages', 'phpmx' ),
			'name_admin_bar'        => __( 'Blocks Page', 'phpmx' ),
			'archives'              => __( 'Blocks Page Archives', 'phpmx' ),
			'attributes'            => __( 'Blocks Page Attributes', 'phpmx' ),
			'parent_item_colon'     => __( 'Parent Blocks Page:', 'phpmx' ),
			'all_items'             => __( 'All Blocks Pages', 'phpmx' ),
			'add_new_item'          => __( 'Add New Blocks Page', 'phpmx' ),
			'add_new'               => __( 'Add New', 'phpmx' ),
			'new_item'              => __( 'New Blocks Page', 'phpmx' ),
			'edit_item'             => __( 'Edit Blocks Page', 'phpmx' ),
			'update_item'           => __( 'Update Blocks Page', 'phpmx' ),
			'view_item'             => __( 'View Blocks Page', 'phpmx' ),
			'view_items'            => __( 'View Blocks', 'phpmx' ),
			'search_items'          => __( 'Search Blocks Page', 'phpmx' ),
			'not_found'             => __( 'Not found', 'phpmx' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'phpmx' ),
			'featured_image'        => __( 'Featured Image', 'phpmx' ),
			'set_featured_image'    => __( 'Set featured image', 'phpmx' ),
			'remove_featured_image' => __( 'Remove featured image', 'phpmx' ),
			'use_featured_image'    => __( 'Use as featured image', 'phpmx' ),
			'insert_into_item'      => __( 'Insert into blocks page', 'phpmx' ),
			'uploaded_to_this_item' => __( 'Uploaded to this blocks page', 'phpmx' ),
			'items_list'            => __( 'Blocks Pages list', 'phpmx' ),
			'items_list_navigation' => __( 'Blocks Pages list navigation', 'phpmx' ),
			'filter_items_list'     => __( 'Filter blocks pages list', 'phpmx' ),
		);

		$args = array(
			'label'               => __( 'Blocks Page', 'phpmx' ),
			'description'         => __( 'Content Blocks Page', 'phpmx' ),
			'labels'              => $labels,
			'supports'            => array(
				'title',
				'editor',
			),
			'taxonomies'          => array(
				'category',
				'post_tag',
			),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'page',
			'show_in_graphql'     => true,
			'graphql_single_name' => 'blocksPage',
			'graphql_plural_name' => 'blocksPages',

		);

		register_post_type( 'blockspage', $args );
	}

	private static function register_fields() {
		acf_add_local_field_group( json_decode( file_get_contents( __DIR__ . '/acf/page-blocks.json' ), true ) );
	}
}
