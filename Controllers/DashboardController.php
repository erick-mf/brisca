<?php

namespace Controllers;

use Lib\Pages;

class DashboardController
{
    private Pages $pages;

    public function __construct()
    {
        $this->pages = new Pages;
    }

    public function mostrarDashboard(): void
    {
        $this->pages->render('pagina/index');
    }
}
