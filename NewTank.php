<?php

/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 30.12.2016
 * Time: 13:43
 */
class NewTank extends Tank implements InterfaceTank
{
    protected $power = 100;
    protected $weight= 10;
    public function getPower()
    {
        return $this->power;
        // TODO: Implement getPower() method.
    }
    public function getWeight()
    {
        return $this->weight;

        // TODO: Implement getWeight() method.
    }
}