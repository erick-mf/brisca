<?php

namespace Models;

class Barajaes
{
    private array $baraja;

    public function __construct()
    {
        $baraja = [];
        $palos = Carta::PALOS;
        for ($i = 0; $i < count($palos); $i++) {
            for ($j = 1; $j <= 12; $j++) {
                $carta = new Carta($j, $palos[$i]);
                $baraja[] = $carta;
            }
        }
        $this->setBaraja($baraja);
    }

    public function getBaraja(): array
    {
        return $this->baraja;
    }

    public function setBaraja($baraja): void
    {
        $this->baraja = $baraja;
    }

    public function barajar(): void
    {
        shuffle($this->baraja);
    }
}
