<?php

$data = array(

'name'=>'Saurav',
'class'=>'QWERTY',
'rollno'=>1111,

);

echo <<<FORM
<h1>Student Form</h1>
<hr/>

<form>
	<p>
		Name:<input type="text" value="{$data['name']}">
	</p>
	<p>
		Class:<input type="text" value="{$data['class']}">
	</p>
	<p>
		RollNo:<input type="text" value="{$data['rollno']}">
	</p>
</form>


FORM;