<?php

//wap in PHP to show class and object in PHP.

class Tv{

var $modal='XL TV';
var $type='LED';
var $price=50000;
var $color='black';
var $variant='flat';

public function showInformation(){

echo "The modal for ".__CLASS__." {$this->modal} \n";
echo "The Type for ".__CLASS__." {$this->type} \n";
echo "The Price for ".__CLASS__." {$this->price} \n";
echo "The Color for ".__CLASS__." {$this->color} \n";
echo "The Variant for ".__CLASS__." {$this->variant} \n";
}

public function volume(){

echo "Volume Up";

}

}

// Bottom
$tv = new Tv();   //Object
$tv->showInformation();   //method calling

echo "The volume is: ";
echo "{$tv->volume()}";
echo "\n";

echo "Tv volume is : {$tv->volume()}";



