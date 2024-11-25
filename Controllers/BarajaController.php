<?php

namespace Controllers;

use Lib\Pages;
use Models\Barajaes;

class BarajaController
{
    private Barajaes $baraja;

    private Pages $pages;

    public function __construct()
    {
        $this->baraja = new Barajaes;
        $this->pages = new Pages;
    }

    public function mostrarBaraja(?Barajaes $mazo = null): void
    {
        if ($mazo == null) {
            $mazo = $this->baraja;
        }
        $this->pages->render('baraja/mostrarBaraja', ['mazo' => $mazo->getBaraja()]);
    }

    public function barajar(): void
    {
        $this->baraja->barajar();
        $this->pages->render('baraja/mostrarBaraja', ['mazo' => $this->baraja->getBaraja()]);
    }

    public function sacarCarta(): void
    {
    }
}
