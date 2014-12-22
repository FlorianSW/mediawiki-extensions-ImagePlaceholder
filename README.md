mediawiki-extensions-ImagePlaceholder
=====================================

MediaWiki extension to replace non-existent images in an image gallery with a configurable placeholder.

Installation
==
Add the following line to your LocalSettings.php:

    require_once "$IP/extensions/ImagePlaceholder/ImagePlaceholder.php";

Configuration
==
To use this extension, you need to set a File title in your LocalSettings.php, e.g.:

    $wgImagePlaceholderImage = 'File:PlceholderImage.jpg';
