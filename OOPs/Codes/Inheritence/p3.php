<?php

//wap in php to show multi-level inheritance


class Papa{
    public function bike()
    {
        echo "Bike method from Papa \n";
    }
}

class Beta extends Papa{
    public function cycle()
    {
        echo "Cycle method from Beta \n";
    }
}

$papa = new Papa;
$papa->bike();

$beta = new Beta;
$beta->cycle();
$beta->bike();