<?php

namespace MLTWebsiteMUPlugin\CV\PostType;

class Subscriber {

	/**
	 * Initializes the subscriber and the custom post type.
	 *
	 * @hook init
	 */
	public function initialize() {
		$this->register_custom_post_type_cv();
	}

	/**
	 * Registers the CV items custom post type.
	 */
	public function register_custom_post_type_cv() {
		register_post_type('wpmlt_cv_item',
		array(
			'labels'      => array(
				'name'          => __('Curriculum Vitae Items', 'textdomain'),
				'singular_name' => __('Curriculum Vitae Item', 'textdomain'),
			),
				'public'       			=> true,
			 	'exclude_from_search'	=> false,
				'show_in_rest' 			=> true,
				'has_archive'  			=> true,
				'rewrite'      			=> array( 'slug' => 'cv' ),
			    'supports'     			=> array( 'title', 'editor', 'author', 'thumbnail' ),
				'taxonomies' 			=> array('category'),
		)
	);
	}
}
