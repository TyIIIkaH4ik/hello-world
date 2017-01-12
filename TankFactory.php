<?php

/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 29.12.2016
 * Time: 15:45
 */
class TankFactory
{
    protected $type = [];
    public function CreateTank()
    {
        return new Tank();
    }

    public function AddNewType(InterfaceTank $tank)
    {
        $this->type[] = get_class($tank);
    }
    public function printType()
    {
        var_dump($this->type);
    }
       public function __call($name, $args)
       {
           $tName = str_replace('create','',$name);
           echo $tName;

           if (in_array($tName,$this->type))
       {
           $nTank = new $tName();
           return $nTank;

       }


       }
}