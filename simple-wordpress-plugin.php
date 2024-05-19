<?php

/**
 * Plugin Name: LetGrow simple wordpress plugin
 * Plugin URI: https://letgrow.pl/wordpress/plugins/simple-wordpress-plugin
 * Description: Replaces the logo with a custom image base on the url
 * Version: 1.0.0
 * Requires at least: 6.4.3
 * Requires PHP: 7.4
 * Author: LetGrow
 * Author URI: https://letgrow.pl
 * License: MIT
 */

/**
 * @see https://developer.wordpress.org/reference/hooks/wp_get_attachment_image_src
 */
add_filter('wp_get_attachment_image_src', 'letgrow_simple_wordpress_plugin', 10, 3);

function letgrow_simple_wordpress_plugin($image_info, ...$args)
{
  /**
   * ID of the processed attachment
   * 
   * @var int
   */
  $attachment_id = intval($args[0]);

  /**
   * get_theme_mod(...) method returns the ID of theme logo image
   * 
   * @see https://developer.wordpress.org/reference/functions/get_theme_mod
   * @var string
   */
  $logo_attachment_id = intval(get_theme_mod('custom_logo'));

  if ($logo_attachment_id === $attachment_id) {
    /**
     * Current domain
     * 
     * @var string 
     */
    $domain = sanitize_url($_SERVER['SERVER_NAME']);
	  
    /**
     * Map domain to logo image attachment ID
     * 
     * @var array(
     *  'url' => int,
     * )
     */
    $domain_to_attachment_map = [
      'https://<your-domain>' => 1, // replace with your own domain
      'https://<your-other-domain>' => 2 // replace with your own domain
    ];

    if (array_key_exists($domain, $domain_to_attachment_map)) {
      /**
       * Attachment ID corresponding to the current domain
       * 
       * @var string
       */
      $domain_logo_attachment_id = intval($domain_to_attachment_map[$domain]);


      /**
       * Attachment size
       * 
       * @var string|array
       */
      $attachment_size = $args[1];

      /**
       * Find attachment corresponding to the domain logo and return it instead of original file
       * 
       * @see https://developer.wordpress.org/reference/functions/wp_get_attachment_image_src
       */
      return wp_get_attachment_image_src($domain_logo_attachment_id, $attachment_size);
    }
  }

  return $image_info;
}