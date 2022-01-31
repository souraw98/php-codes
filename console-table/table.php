<?php

require __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/data.php';

$table = new LucidFrame\Console\ConsoleTable();
$table
    ->addHeader('Id')
    ->addHeader('Name')
    ->addHeader('Email')
    ->addRow()
        ->addColumn('1001')
        ->addColumn('Saurav')
	->addColumn('souraw99@gmail.com')
    ->addRow()
        ->addColumn('1002')
        ->addColumn('Himu')
	->addColumn('himu@gmail.com')
    ->addRow()
        ->addColumn('1003')
        ->addColumn('ABS')
	->addColumn('abs@gmail.com')
	->hideBOrder()
    ->display()
;