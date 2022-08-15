<?php
namespace Day;
require_once ('Animal.php');
use Animal;

class Cat implements Animal
{
    public function height():string
    {
       return "23 - 25 cm";
    }
    public function limbs():int
    {
        return 4;
    }
    public function makeSound():string
    {
        return "meow";
    }
    public function moveAbility():array
    {
        return ['run', 'jump', 'cats are crazy'];
    }
    public function skin():string
    {
        return "Fur";
    }
    public function whatEat():string
    {
        return "Cats are carnivores";
    }
    public function weight():string
    {
        return "4 - 5 kg";
    }
    public function tail():string
    {
        return "Yes, Cat's have a tail";
    }
}