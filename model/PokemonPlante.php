<?php

class PokemonPlante extends Pokemon
{

    public function __construct(string $name, float $hp, float $atk)
    {
        parent::__construct($name, $hp, $atk);
    }

    public function attaquer($pokemon): void
    {
        if (get_class($pokemon) === "PokemonEau") {
            $pokemon->setHp($pokemon->getHp() - ($this->atk * 2));
        } elseif (get_class($pokemon) === "PokemonFeu" || get_class($pokemon) === "PokemonPlante") {
            $pokemon->setHp($pokemon->getHp() - ($this->atk / 2));
        } else {
            parent::attaquer($pokemon);
        }
    }
}
