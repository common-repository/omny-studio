<?php
/*
Plugin Name: omny.fm Embeds
Plugin URI: https://omnystudio.com
Description: Easily embed omny.fm players from Omny Studio into your posts by pasting in the listen page link.
Version: 1.0
Author: Omny Studio
License: MIT
*/

// Enable and whitelist omny.fm for oEmbeds
wp_oembed_add_provider('https://omny.fm/shows/*', 'https://omny.fm/oembed', false);
