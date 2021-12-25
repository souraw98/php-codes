<?php

//wap in php to show constants are global

printf("********************START OF GLOBAL SCOPE********************** \n");

define('animal','Tiger');
printf("The king of jungle is : %s \n",animal);

$ani2='Loin';
printf("Tiger can only be replaced by : %s\n",$ani2);

printf("********************END OF GLOBAL SCOPE********************** \n");

printf("********************START OF LOCAL SCOPE********************** \n");

function test(){
	printf("The king of jungle is : %s \n",animal);
	printf("Tiger can only be replaced by : %s\n",$ani2);
}

test();

printf("********************END OF LOCAL SCOPE********************** \n");

?>