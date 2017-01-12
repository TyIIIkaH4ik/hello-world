<?php

/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 29.12.2016
 * Time: 15:54
 */
class Tank
{
    protected $power;
    protected $weight;

    public function DriveTo($destination)
    {
        echo "$destination";
    }
    public function ShotTo($target)
    {
        echo "$target";
    }

}