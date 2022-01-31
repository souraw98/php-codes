<?php

//wap in php to show fatal error
//scince we cannot re-declare the signature (or definition) of Function scince it generates the, Fatal Error, hence it is possible at least in PHP for the current version to support method Overloading.

function Test(){

echo 'hello from methiod';

}
Test();

//Re-decalared Function

function Test(){

echo 'Hello fro 2nd Method';

}
Test();