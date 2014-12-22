<?php
	class ImagePlaceholderHooks {
		public static function onGalleryGetModes( &$modeMapping ) {
			global $wgImagePlaceholderImage;

			// replace TraditionalImageGallery with the Placeholder class (only when a placeholder is configured)
			if ( $wgImagePlaceholderImage ) {
				$modeMapping['traditional'] = 'TraditionalImageGalleryPlaceholder';
			}
			return false;
		}
	}
