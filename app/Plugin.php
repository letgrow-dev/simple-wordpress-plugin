<?php

namespace Letgrow\MailHistory;

use Letgrow\MailHistory\Controller\Dashboard;
use Letgrow\WordPress\LetgrowPlugin;

// don't load directly.
if (!defined('ABSPATH')) {
    die();
}

class Plugin extends LetgrowPlugin
{
    protected static array $controllers = [
        Dashboard::class,
    ];

    protected static string $plugin;

    protected static string $dir;

    public static function onActivate()
    {
    }

    public static function onDeactivate()
    {
    }
}