<?php

namespace Day;

class Whale implements \Animal
{

    public function makeSound(): string
    {
        return "Sing";
    }

    public function limbs(): int
    {
        return 0;
    }

    public function skin(): string
    {
        return "Skin";
    }

    public function whatEat(): string
    {
        return "Krill, small fish, zooplankton and squid";
    }

    public function moveAbility(): array
    {
        return ['Swim'];
    }

    public function height(): string
    {
        return "16 m";
    }

    public function weight(): string
    {
        return "41 000 kg";
    }

    public function tail(): string
    {
        return "Caudal fin";
    }
}