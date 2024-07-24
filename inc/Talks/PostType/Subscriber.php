<?php

namespace MLTWebsiteMUPlugin\Talks\PostType;

class Subscriber {

	/**
	 * Initializes the subscriber and the custom post type.
	 *
	 * @hook init
	 */
	public function initialize() {
		$this->register_custom_post_type_talk();
	}

	/**
	 * Registers the Talk custom post type.
	 */
	public function register_custom_post_type_talk() {
		register_post_type(
			'wpmlt_talk',
			[
				'labels'              => [
					'name'          => __( 'Talks', 'mltwebsitemuplugin' ),
					'singular_name' => __( 'Talk', 'mltwebsitemuplugin' ),
				],
				'public'              => true,
				'exclude_from_search' => false,
				'show_in_rest'        => true,
				'has_archive'         => true,
				'rewrite'             => [ 'slug' => 'talk' ],
				'supports'            => [ 'title', 'editor', 'author', 'thumbnail', 'excerpt' ],
				'taxonomies'          => [ 'category' ],
			]
		);
	}
}
