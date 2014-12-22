<?php
	/**
	 * Same as TraditionalImageGallery, but replaces non-existent titles with a placeholder
	 */
	class TraditionalImageGalleryPlaceholder extends TraditionalImageGallery {
		/**
		 * Return a HTML representation of the image gallery
		 *
		 * For each image in the gallery, display
		 * - a thumbnail
		 * - the image name
		 * - the additional text provided when adding the image
		 * - the size of the image
		 *
		 * Non existing images will be replaced by a placeholder
		 * @return string
		 */
		function toHTML() {
			global $wgImagePlaceholderImage;

			$newImages = array();
			$titlePlaceholder = Title::newFromText( $wgImagePlaceholderImage );
			// go through all images and build a new images array
			foreach ( $this->mImages as $pair ) {
				$nt = $pair[0];
				$text = $pair[1];
				$alt = $pair[2];
				$link = $pair[3];
				$handlerOpts = $pair[4];
				// if the title of this image does not exist (file does not exist), replace
				// it with the placeholder
				if ( !$nt->exists() ) {
					$nt = $titlePlaceholder;
				}
				$newImages[] = array( $nt, $text, $alt, $link, $handlerOpts );
			}
			// replace the old images array with the new one
			$this->mImages = $newImages;
			return parent::toHTML();
		}
	}
