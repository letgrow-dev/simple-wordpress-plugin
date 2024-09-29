<?php

/**
 * Plugin Name: LetGrow mail history
 * Plugin URI: https://letgrow.pl/wordpress/plugins/simple-wordpress-plugin
 * Description: Saves all emails that are sent from this wordpress
 * Version: 0.0.1
 * Requires at least: 6.4.3
 * Requires PHP: 7.4
 * Author: LetGrow
 * Author URI: https://letgrow.pl
 * License: MIT
 */

namespace Letgrow\MailHistory;

// don't load directly.
if (!defined('ABSPATH')) {
    die();
}

define('LETGROW_MAIL_HISTORY_VERSION', '0.0.1');
define('LETGROW_MAIL_HISTORY_AUTOLOAD', plugin_dir_path(__FILE__) . '/lib/autoload.php');

if (file_exists(LETGROW_MAIL_HISTORY_AUTOLOAD)) {
    require_once LETGROW_MAIL_HISTORY_AUTOLOAD;
}

\Letgrow\MailHistory\Plugin::init(__FILE__, __DIR__);