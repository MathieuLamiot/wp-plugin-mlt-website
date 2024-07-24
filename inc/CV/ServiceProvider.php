<?php

namespace MLTWebsiteMUPlugin\CV;

use MLTWebsiteMUPlugin\Dependencies\LaunchpadAutoresolver\ServiceProvider as FrameworkServiceProvider;

class ServiceProvider extends FrameworkServiceProvider {
	/**
	 * Returns common subscribers.
	 *
	 * @return string[]
	 */
	public function get_common_subscribers(): array {
		return [
			\MLTWebsiteMUPlugin\CV\PostType\Subscriber::class,
		];
	}
}
