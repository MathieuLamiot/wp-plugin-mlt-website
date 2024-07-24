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
		register_post_type(
			'wpmlt_cv_item',
			[
				'labels'              => [
					'name'          => __( 'Curriculum Vitae Items', 'mltwebsitemuplugin' ),
					'singular_name' => __( 'Curriculum Vitae Item', 'mltwebsitemuplugin' ),
				],
				'public'              => true,
				'exclude_from_search' => false,
				'show_in_rest'        => true,
				'has_archive'         => true,
				'rewrite'             => [ 'slug' => 'cv' ],
				'supports'            => [ 'title', 'editor', 'author', 'thumbnail' ],
				'taxonomies'          => [ 'category' ],
			]
		);
	}
}
