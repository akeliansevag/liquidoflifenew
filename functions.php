<?php
if (! defined('_S_VERSION')) {
	define('_S_VERSION', '1.0.0');
}


function liquidoflife_setup()
{
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');

	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'liquidoflife'),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Banner sizes (landscape)
	add_image_size('banner-large', 1920, 600, true); // Large banners (cropped)
	add_image_size('banner-medium', 1280, 400, true); // Medium banners (cropped)
	add_image_size('banner-small', 768, 300, true); // Small banners (cropped)

	// Thumbnails
	add_image_size('thumbnail-square', 150, 150, true); // Square thumbnails (cropped)
	add_image_size('thumbnail-portrait', 150, 200, true); // Portrait thumbnails (cropped)
	add_image_size('thumbnail-landscape', 200, 150, true); // Landscape thumbnails (cropped)

	// Full-width content images
	add_image_size('content-full', 1200, 800, false); // Large content images (not cropped)
	add_image_size('content-medium', 800, 600, false); // Medium content images (not cropped)
	add_image_size('content-small', 400, 300, false); // Small content images (not cropped)

	// Featured images
	add_image_size('featured-large', 1024, 768, true); // Large featured images (cropped)
	add_image_size('featured-medium', 800, 600, true); // Medium featured images (cropped)
	add_image_size('featured-small', 600, 400, true); // Small featured images (cropped)

	// Custom sizes for icons or widgets
	add_image_size('icon-small', 64, 64, true); // Small icons (cropped)
	add_image_size('icon-medium', 128, 128, true); // Medium icons (cropped)

}
add_action('after_setup_theme', 'liquidoflife_setup');

// Disable automatic <p> and <br> tags in Contact Form 7
add_filter('wpcf7_autop_or_not', '__return_false');

function liquidoflife_scripts()
{
	// Get file paths
	$css_file = get_template_directory_uri() . '/dist/css/output.css';
	$js_file = get_template_directory_uri() . '/dist/js/bundle.js'; // Get file paths

	// Dynamic versioning based on file modification time
	$css_version = file_exists($css_file) ? filemtime($css_file) : _S_VERSION;
	$js_version = file_exists($js_file) ? filemtime($js_file) : _S_VERSION;

	// Enqueue styles and scripts with dynamic versions
	wp_enqueue_style('liquidoflife-style', $css_file, array(), $css_version);
	wp_enqueue_script_module('liquidoflife-scripts', $js_file, array(), $js_version, true);
}
add_action('wp_enqueue_scripts', 'liquidoflife_scripts');

function dd($variable)
{
	echo '<pre style="background-color: #f4f4f4; padding: 10px; border: 1px solid #ccc; border-radius: 5px; font-family: Courier, monospace; color: #333; font-size: 14px;">';
	var_dump($variable);
	echo '</pre>';
}
