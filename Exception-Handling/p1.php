<?php

//wap in PHP to show Exception Handling

$x=readline("Enter the first number: ");
$y=readline("Enter the second number: ");

try{

	echo "Block of try Started...\n";
	
	$result = $x/$y;

	echo "Block of try Ended..\n";
}
catch(Exception $e)
{

	echo "Some Exception Raised ".$e->getMessage();
	echo "\n";
}
finally{

	echo "This block will be executed..\n";
	echo "The reuslt is = $result";
}