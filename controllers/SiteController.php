<?php

declare(strict_types=1);

/**
 * ===============================================
 * ==================           ==================
 * ****** SiteController
 * ==================           ==================
 * ===============================================
 */

namespace PhpStrike\controllers;

use celionatti\Bolt\Controller;

class SiteController extends Controller
{
    public function welcome()
    {
        $view = [
            'title' => 'Bolt Framework',
            'header' => 'Hello, User! Welcome to Bolt Framework',
            'text' => 'You are most welcome to our world.',
            'items' => ['Item 1', 'Item 2', 'Item 3'],
        ];

        $this->view->render("welcome", $view);
    }
}
