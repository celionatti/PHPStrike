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

class AdminController extends Controller
{
    public function onConstruct(): void
    {
        $this->view->setLayout("admin");

        // if ($this->currentUser = BoltAuthentication::currentUser()) {
        //     redirect("/");
        // }
    }

    public function dashboard()
    {
        $view = [
            'title' => 'Dashboard',
            'navigations' => [
                ['label' => 'Dashboard', 'url' => ''],
            ],
        ];

        $this->view->render("admin/dashboard", $view);
    }
}
