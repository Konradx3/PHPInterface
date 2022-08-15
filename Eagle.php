<?php

namespace Day;

class Eagle implements \Animal
{

    public function makeSound(): string
    {
        return "Scream!!";
    }

    public function limbs(): int
    {
        return 2;
    }

    public function skin(): string
    {
        return "feathers";
    }

    public function whatEat(): string
    {
        return "Eagles are carnivores";
    }

    public function moveAbility(): array
    {
        return ['Fly', 'Walk'];
    }

    public function height(): string
    {
        return "45 - 53 cm";
    }

    public function weight(): string
    {
        return "3 - 6.7 kg";
    }

    public function tail(): string
    {
        return "Yes, Eagle's have a tails";
    }
}