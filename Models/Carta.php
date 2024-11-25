<?php

namespace Models;

class Carta
{
    const PALOS = ['ESPADAS', 'OROS', 'COPAS', 'BASTOS'];

    const CARTAS = [
        1 => 'as',
        2 => 'dos',
        3 => 'tres',
        4 => 'cuatro',
        5 => 'cinco',
        6 => 'seis',
        7 => 'siete',
        8 => 'ochos',
        9 => 'nueve',
        10 => 'sota',
        11 => 'caballo',
        12 => 'rey'];

    public function __construct(private int $numero, private string $palo) {}

    public static function compruebaNumero(int $numero): bool
    {
        return array_key_exists($numero, self::CARTAS);
    }

    public static function compruebaPalo(string $palo): bool
    {
        return in_array($palo, self::PALOS);
    }

    public function __toString(): string
    {
        return self::CARTAS[$this->numero].' de '.$this->palo;
    }

    public function getNumero(): int
    {
        return $this->numero;
    }

    public function getPalo(): string
    {
        return $this->palo;
    }
}
