<?php

interface Animal
{
    public function makeSound():string;
    public function limbs():int;
    public function skin():string;
    public function whatEat():string;
    public function moveAbility():array;
    public function height():string;
    public function weight():string;
    public function tail():string;
}