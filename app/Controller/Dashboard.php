<?php

namespace Letgrow\MailHistory\Controller;

use Letgrow\WordPress\Controller;
use Letgrow\WordPress\UI;
use Letgrow\WordPress\ViewLoader;

// don't load directly.
if (!defined('ABSPATH')) {
    die();
}

class Dashboard extends Controller
{
    protected static string $viewName = 'dashboard';
    protected static string $pageTitle = 'LetGrow mail history';
    protected static string $menuTitle = 'Mail history';
    protected static string $menuSlug = 'letgrow-mail-history';
    protected static ViewLoader $viewLoader;
    protected static string|null $parentMenuSlug = null;

    public static function index(): array
    {
        return [
            'saved' => isset($_POST['submit']),
            'ui' => new UI(),
        ];
    }
}
